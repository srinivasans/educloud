<?php
require_once('student_class.php');
require_once('pdofactory_class.php');
$strDSN='mysql:dbname=cloud;host=localhost';
$objPDO=PDOfactory::GetPDO($strDSN,"root","",array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$objUser=new Student($objPDO);

$objUser->setRollNo("admin");
$objUser->setName("admin");
$objUser->setEmail("srini2351994@yahoo.com");
$objUser->setPassword("827ccb0eea8a706c4c34a16891f84e7b");
$objUser->setPhone("2346");
$objUser->setacctType("admin");

$objUser->save();
echo $objUser->getName();
echo $objUser->getEmail();
echo $objUser->getPassword();
echo $objUser->getPhone();
//$objUser->markForDeletion();
?>