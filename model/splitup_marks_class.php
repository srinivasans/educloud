<?php
require_once('model_class.php');
class SplitupMarks extends Model
{
protected $ExamMarksId;
protected $SplitUpId;
protected $Marks;

protected function defineTableName()
{
return('splitup_marks');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"split_up_id"=>"SplitUpId",
			"exam_marks_id"=>"ExamMarksId",
			"marks"=>"Marks",
));
}

public function getByExamMarksId($exam_marks_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_marks_id`='".$exam_marks_id."';";
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$result=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$result[$res['split_up_id']]=$res['marks'];
}
return $result;
}


};