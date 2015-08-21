<?php
require_once('model_class.php');
class ExamMarks extends Model
{
protected $StudentId;
protected $ExamSubjectId;
protected $Marks;
protected $Grade;

protected function defineTableName()
{
return('exam_marks');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"student_id"=>"StudentId",
			"exam_subject_id"=>"ExamSubjectId",
			"marks"=>"Marks",
			"grade"=>"Grade",
));
}

public function setByExamStudentId($exam_subject_id,$student_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_subject_id`='".$exam_subject_id."' AND `student_id`='".$student_id."';";
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$res=$objStmt->fetch(PDO::FETCH_ASSOC);
if($res)
{
$this->setID($res['id']);
}

}

public function getByExamSubjectId($exam_subject_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_subject_id`='".$exam_subject_id."';";
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$result=array();
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/splitup_marks_class.php');
GLOBAL $objPDO;
$split=new SplitupMarks($objPDO);
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$split_marks=$split->getByExamMarksId($res['id']);
$result[$res['student_id']]=array('id'=>$res['id'],'total_marks'=>$res['marks'],'grade'=>$res['grade'],'split'=>$split_marks);
}

return $result;
}

public function autoGrade()
{
$mark=$this->getMarks();
if($mark>90)
{
$grade='A1';
}
else if($mark>80)
{
$grade='A2';
}
else if($mark>70)
{
$grade='B1';
}
else if($mark>60)
{
$grade='B2';
}
else if($mark>50)
{
$grade='C1';
}
else if($mark>40)
{
$grade='C2';
}
else if($mark>30)
{
$grade='D';
}
else if($mark>20)
{
$grade='E1';
}
else
{
$grade='E2';
}
$this->setGrade($grade);

}

};