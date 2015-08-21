<?php
require_once('model_class.php');
class Section extends Model
{
protected $Class;
protected $Section;
protected $Code;

protected function defineTableName()
{
return('section');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"class_level"=>"Class",
			"section"=>"Section",
			"code"=>"Code",
));
}

public function getSectionArray()
{
$qry="SELECT * FROM ".$this->defineTableName().";";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$sec=array();
$objStmt->execute();
while($section=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$sec[$section['id']]=$section['code'];
}
return $sec;
}




};

?>