# Dockerfile
# FROM nimmis/apache-php5
FROM nimmis/apache-php7
MAINTAINER COLAB MULTIMEDIA <support@teamcolab.com>

ENV NODE_VERSION stable
ENV SHELL=/bin/bash

# Update all packages to latest and nstall Basic Server Packages
RUN apt-get update -y && apt-get install -y openssh-server git-core openssh-client \
    curl build-essential apt-transport-https openssl libreadline6 libreadline6-dev \
    curl zlib1g zlib1g-dev libssl-dev libyaml-dev libsqlite3-dev sqlite3 libxml2-dev \
    libxslt-dev autoconf libc6-dev ncurses-dev automake libtool bison subversion pkg-config

# install WP CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# Install NVM / Node
ENV NVM_DIR /usr/local/nvm
RUN curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.25.0/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm alias default $NODE_VERSION \
    && nvm use default \
	&& npm install gulp -g
ENV NODE_PATH $NVM_DIR/v$NODE_VERSION/lib/node_modules
ENV PATH      $NVM_DIR/v$NODE_VERSION/bin:$PATH

# Download Mailhog binary from github
RUN wget --quiet -O ~/mailhog https://github.com/mailhog/MailHog/releases/download/v0.2.1/MailHog_linux_amd64

# Make it executable
RUN chmod +x ~/mailhog

# Configuration Files
COPY docker-apache.conf /etc/apache2/sites-available/000-default.conf
COPY docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh

EXPOSE 80
EXPOSE 8025

# Permissions and rewrites
RUN a2enmod rewrite
RUN usermod -u 1000 www-data

ENTRYPOINT ["/docker-entrypoint.sh"]
