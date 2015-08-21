<?php
require_once('model_class.php');
class ExamTimetable extends Model
{
protected $Slot;
protected $Date;
protected $ExamSubjectId;

protected function defineTableName()
{
return('exam_timetable');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"slot"=>"Slot",
			"date"=>"Date",
			"exam_subject_id"=>"ExamSubjectId",
));
}

public function checkExamSubjectId($exam_sub_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_subject_id`='".$exam_sub_id."';";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$res=$objStmt->rowCount();
if($res==1)
{
return true;
}
return false;
}

public function getByExamSubjectId($exam_sub_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_subject_id`='".$exam_sub_id."';";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$res=$objStmt->fetch(PDO::FETCH_ASSOC);
return $res;
}

public function deleteByExamSubjectId($exam_sub_id)
{
$qry="DELETE FROM ".$this->strTableName."  WHERE `exam_subject_id`='".$exam_sub_id."';";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$res=$objStmt->execute();
if($res)
return true;
return false;
}


};