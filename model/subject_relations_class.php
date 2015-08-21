<?php
require_once('model_class.php');
class SubjectRelations extends Model
{
protected $SubjectId;
protected $ClassId;

protected function defineTableName()
{
return('class_subject_relation');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"subject_id"=>"SubjectId",
			"class_id"=>"ClassId",
));
}

public function getByClassId($class_id)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `class_id`='".$class_id."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub_list=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$sub_list[]=$arRow['subject_id'];
	}
	return $sub_list;
}

public function deleteByClassId($class_id)
{
$strQuery="DELETE FROM ".$this->defineTableName()." WHERE `class_id`='".$class_id."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$res=$objStatement->execute();
	return $res;
}

};

?>