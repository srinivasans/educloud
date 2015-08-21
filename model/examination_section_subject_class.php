<?php
require_once('model_class.php');
class ExaminationSectionSubject extends Model
{
protected $ExaminationId;
protected $SectionId;
protected $SubjectId;
protected $TotalMarks;

protected function defineTableName()
{
return('examination_section_subjects');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"examination_id"=>"ExaminationId",
			"section_id"=>"SectionId",
			"subject_id"=>"SubjectId",
			"total_marks"=>"TotalMarks",
));
}

public function deleteByExamId($exam_id)
{
$qry="DELETE FROM ".$this->strTableName." WHERE `examination_id`='".$exam_id."' ;";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
}

public function getByExamId($exam_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `examination_id`='".$exam_id."' ;";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$result=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$result[$res['section_id']][]=$res['subject_id'];
}

return $result;

}

public function getIDByElems()
{
$qry="SELECT `id` FROM ".$this->strTableName." WHERE `examination_id`='".$this->ExaminationId."' AND `subject_id`='".$this->SubjectId."' AND `section_id`='".$this->SectionId."' ;";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$res=$objStmt->fetch(PDO::FETCH_ASSOC);
return $res['id'];
}

public function getSectionExams($exam_id,$section_id)
{
$qry="SELECT * FROM ".$this->strTableName." WHERE `examination_id`='".$exam_id."' AND `section_id`='".$section_id."' ;";
GLOBAL $objPDO;
$objStmt=$this->objPDO->prepare($qry);
$objStmt->execute();
$result=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$result[$res['id']]=$res['subject_id'];
}
return $result;
}


};