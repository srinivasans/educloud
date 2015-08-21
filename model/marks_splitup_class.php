<?php
require_once('model_class.php');
class MarksSplitUp extends Model
{
protected $ExamSubjectId;
protected $SplitUpValue;
protected $SplitUpName;

protected function defineTableName()
{
return('marks_splitup');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"split_up_name"=>"SplitUpName",
			"split_up_value"=>"SplitUpValue",
			"exam_subject_id"=>"ExamSubjectId",
));
}



public function getByExamSubjectId($exam_sub_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `exam_subject_id`='".$exam_sub_id."';";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$result=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$result[]=$res;
}
return $result;
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