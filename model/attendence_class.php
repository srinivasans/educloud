<?php
require_once('model_class.php');
class Attendence extends Model
{
protected $StudentId;
protected $SectionId;
protected $Date;
protected $Presence;

protected function defineTableName()
{
return('student_attendance');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"student_id"=>"StudentId",
			"section_id"=>"SectionId",
			"date"=>"Date",
			"presence"=>"Presence",
));
}

public function getBySectionDateArray($section_id,$date)
{
$qry="SELECT * FROM ".$this->defineTableName()." WHERE `date`='".$date."' AND `section_id`='".$section_id."';";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$att=array();
$objStmt->execute();
while($attend=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$att[$attend['student_id']]=$attend['presence'];
}
return $att;
}

public function deleteBySectionDate($section_id,$date)
{
$qry="DELETE FROM ".$this->defineTableName()." WHERE `date`='".$date."' AND `section_id`='".$section_id."';";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
}

public function getBySectionId($section_id)
{
$qry="SELECT count(distinct `section_id`,`date`) as total_days FROM ".$this->defineTableName()." WHERE `section_id`=".$section_id." ;";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
$res=$objStmt->fetch(PDO::FETCH_ASSOC);
$total=$res['total_days'];
return $total;
}

public function getByStudentId($student_id)
{
$qry="SELECT * FROM ".$this->defineTableName()." WHERE `student_id`=".$student_id." ;";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
$student_att=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$student_att[]=$res;
}
return $student_att;
}



};

?>