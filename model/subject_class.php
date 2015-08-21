<?php
require_once('model_class.php');
class Subject extends Model
{
protected $Name;

protected function defineTableName()
{
return('subject');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"name"=>"Name",
));
}


public function getSubjectArray()
{
$qry="SELECT * FROM ".$this->strTableName.";";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$sub=array();
$objStmt->execute();
while($subject=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$sub[$subject['id']]=$subject['name'];
}
return $sub;
}

public static function getSubjectName($subject_id)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM `subject` WHERE `id`='".$subject_id."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub_name=$objStatement->fetch(PDO::FETCH_ASSOC);
	return $sub_name['name'];
	
}

public static function getSubjectNameLike($subject)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM `subject` WHERE `name` LIKE '%".$subject."%' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub_name=$objStatement->fetch(PDO::FETCH_ASSOC);
	return $sub_name['id'];
}



};

?>