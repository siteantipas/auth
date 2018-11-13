<?php

 define('request', empty(@$_GET['request']) ? 'login' : @$_GET['request']);
 define('error', $_GET['err'] ?? '');
 
 require_once 'controller/settings.php';
 require_once 'controller/session.php';
 require_once 'controller/route.php'; 

?>