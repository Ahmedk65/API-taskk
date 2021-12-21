<?php
$api_url = 'http://myapiurl';

$_SERVER [ 'PHP_AUTH_USER' ] = 'mySERVERUSER';
$_SERVER['PHP_AUTH_PW'] = 'mySERVERPW';

$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("$_SERVER [ 'PHP_AUTH_USER' ]:$_SERVER['PHP_AUTH_PW']"),
    ),
));

$result = file_get_contents($api_url, false, $context);
?>