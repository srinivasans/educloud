<?php
require_once('model_class.php');
class Events extends Model
{
protected $Event;
protected $Description;
protected $Date;
protected $Type;

protected function defineTableName()
{
return('events');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"event"=>"Event",
			"description"=>"Description",
			"date"=>"Date",
			"type"=>"Type",
));
}

public function getByDateLike($datePattern)
{
$qry="SELECT * FROM ".$this->defineTableName()." WHERE `date` LIKE '%".$datePattern."';";
$objStmt=$this->objPDO->prepare($qry);
$heads=array();
$objStmt->execute();
$events=array();
while($event=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$events[]=array('id'=>$event['id'],'type'=>$event['type'],'event'=>$event['event'],'description'=>$event['description'],'date'=>$event['date']);
}
return $events;
}


};

?>