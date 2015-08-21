<?php
require_once('model_class.php');
class InternalNotice extends Model
{
protected $Heading;
protected $Info;
protected $Importance;
protected $UserId;
protected $Date;

protected function defineTableName()
{
return('internal_notice');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"heading"=>"Heading",
			"info"=>"Info",
			"user_id"=>"UserId",
			"date"=>"Date",
			"importance"=>"Importance",
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
$heads[]=array('id'=>$head['id'],'heading'=>$head['heading'],'date'=>$head['date'],'importance'=>$head['importance'],'user_id'=>$head['user_id']);
}
return $heads;
}


};

?>