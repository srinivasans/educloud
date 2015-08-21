<?php
require_once('model_class.php');
class StudentNotice extends Model
{
protected $Heading;
protected $Info;
protected $Type;
protected $StudentId;
protected $Date;

protected function defineTableName()
{
return('student_notice');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"heading"=>"Heading",
			"info"=>"Info",
			"student_id"=>"StudentId",
			"date"=>"Date",
			"type"=>"Type",
));
}

public function getHeadingArray()
{
$qry="SELECT * FROM ".$this->defineTableName()." ORDER BY date DESC;";
$objStmt=$this->objPDO->prepare($qry);
$heads=array();
$objStmt->execute();
while($head=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$heads[]=array('id'=>$head['id'],'info'=>$head['info'],'heading'=>$head['heading'],'date'=>$head['date'],'type'=>$head['type'],'student_id'=>$head['student_id']);
}
return $heads;
}


};

?>