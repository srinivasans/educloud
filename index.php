<?php

include_once('model/pdofactory_class.php');
$strDSN='mysql:dbname=cloud;host=localhost';
$objPDO=PDOfactory::GetPDO($strDSN,"root","",array());
include_once('model/session_class.php');

$user=new Session($objPDO);
if(isset($_GET['key']))
{
$view=strtolower($_GET['key']);
$check=true;
if($view=='login' && $user->isLoggedIn()==true)
{
$check=false;
}
$controller=ucfirst($view).'Controller';
$controllerFile='controller/'.$view.'Controller.php';
if(file_exists($controllerFile))
{
if($check==true)
{
include_once($controllerFile);
$action=(isset($_GET['action']))?$_GET['action']:'index';
eval('$ctr = new '.$controller.'();');
if(method_exists($ctr,$action))
{
eval('$ctr->authenticate("'.$action.'");');
}
else
{
echo 'error';
}

}
else
{
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud">';
}
}
else
{
echo 'error';
}

}
else
{
include_once('controller/homeController.php');
$ctr=new HomeController();
$ctr->authenticate('index');
}
?>