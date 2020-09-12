<?php

require 'Finalclass/classdir/App.php';
require 'Finalclass/classdir/Prefix.php';
use \Finalclass\classdir\App as App;
use \Finalclass\classdir\Prefix as Prefix;
$date=new Prefix();
$date->set(date("Y/m/d"));
$e=new App();
$e->value=rand(1,3);
echo $date->get().$e->getClass($e->value);