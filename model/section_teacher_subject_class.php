<?php
require_once('model_class.php');
class SectionTeacherSubjectRelations extends Model
{
protected $SubjectId;
protected $SectionId;
protected $TeacherId;

protected function defineTableName()
{
return('student_teacher_subject_relation');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"subject_id"=>"SubjectId",
			"student_id"=>"SectionId",
			"teacher_id"=>"TeacherId",
));
}

public function loadByClassSubject()
{
GLOBAL $objPDO;
$strQuery="SELECT id FROM ".$this->defineTableName()." WHERE `student_id`='".$this->SectionId."' AND `subject_id`='".$this->SubjectId."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$id=$objStatement->fetch(PDO::FETCH_ASSOC);
	if($id)
	{
	$this->setID($id['id']);
	}
}

public function getByClassSubject($class,$subject)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `student_id`='".$class."' AND `subject_id`='".$subject."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$sub_list=$objStatement->fetch(PDO::FETCH_ASSOC);
	if($sub_list)
	return $sub_list['teacher_id'];
	else
	return false;
}


public function deleteByClassId($class_id)
{
$strQuery="DELETE FROM ".$this->defineTableName()." WHERE `student_id`='".$class_id."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$res=$objStatement->execute();
	return $res;
}


public function getByClass($class)
{
GLOBAL $objPDO;
$strQuery="SELECT * FROM ".$this->defineTableName()." WHERE `student_id`='".$class."' ;";
	$objStatement=$objPDO->prepare($strQuery);
	$objStatement->execute();
	$rel=array();
	while($sub_list=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$rel[]=$sub_list;
	}
	if($rel)
	return $rel;
	else
	return false;
}

};

?>