<?php
require_once('model_class.php');
class Timetable extends Model
{
protected $Slot;
protected $SectionId;
protected $SubjectId;
protected $TeacherId;

protected function defineTableName()
{
return('timetable');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"section_id"=>"SectionId",
			"subject_id"=>"SubjectId",
			"slot"=>"Slot",
			"teacher_id"=>"TeacherId",
));
}

public function getBySecSlot()
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `section_id`='".$this->getSectionId()."' AND `slot`='".$this->getSlot()."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub_list=$objStatement->fetch(PDO::FETCH_ASSOC);
	if($sub_list)
	{
	$this->setID($sub_list['id']);
	}
}

public function getBySection($section_id)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `section_id`='".$section_id."';";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$timetable=array();
	while($tt=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$timetable[$tt['slot']]=$tt['subject_id'];
	}
	return $timetable;
}

public function getByTeacherId($teacher_id)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `teacher_id`='".$teacher_id."';";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$timetable=array();
	while($tt=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$timetable[$tt['slot']]=$tt['section_id'];
	}
	return $timetable;
}

public function checkTeacherSlot($slot,$tid,$sec)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `slot`='".$slot."' AND `teacher_id`='".$tid."' AND `section_id`!='".$sec."' ;";
$objStatement=$objPDO->prepare($strQuery);
$objStatement->execute();
if($objStatement->rowCount())
{
return false;
}
else
{
return true;
}
}

public function getTeachersubject($teacher_id)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `teacher_id`='".$teacher_id."';";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub=$objStatement->fetch(PDO::FETCH_ASSOC);
	return $sub['subject_id'];
}






};

?>