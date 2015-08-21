<?php
require_once('model_class.php');
class Studentsection extends Model
{
protected $SectionId;
protected $StudentId;

protected function defineTableName()
{
return('student_section_relation');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"student_id"=>"StudentId",
			"section_id"=>"SectionId",
			
));
}

public function getByStudentId($student_id)
{
$strQuery="SELECT * FROM `".$this->defineTableName()."` WHERE `student_id`='".$student_id."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$res=$objStatement->fetch(PDO::FETCH_ASSOC);
	if($res)
	return $res['section_id'];
	else
	return false;
}

public function getBySectionId($section_id)
{
$strQuery="SELECT * FROM `".$this->defineTableName()."` WHERE `section_id`='".$section_id."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$res=array();
	
	while($temp=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$res[]=$temp;
	}
	
	return $res;
}


};

?>