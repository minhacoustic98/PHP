<?php
     
     
     define('WEBROOT',str_replace("Webroot/index.php","",$_SERVER["SCRIPT_NAME"]));
     define('ROOT',str_replace("Webroot/index.php","",$_SERVER["SCRIPT_FILENAME"]));

     require '../vendor/autoload.php';
     use Main\Dispathcher;
     $dispathcher=new Dispathcher();
     $dispathcher->dispatch();