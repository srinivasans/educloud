<?php
require_once('model_class.php');
class Examination extends Model
{
protected $StartDate;
protected $EndDate;
protected $FnAn;
protected $Name;

protected function defineTableName()
{
return('examination');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"name"=>"Name",
			"start_date"=>"StartDate",
			"end_date"=>"EndDate",
			"fn_an"=>"FnAn",
));
}

public function getExaminationArray()
{
$qry="SELECT * FROM ".$this->strTableName.";";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$exams=array();
$objStmt->execute();
while($exam=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$exams[$exam['id']]=$exam['name'];
}
return $exams;
}

};