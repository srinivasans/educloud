<?php
require_once('model_class.php');
class TimetableSettings extends Model
{
protected $SlotName;

protected function defineTableName()
{
return('timetable_settings');
}

protected function defineRelationMap()
{
return (array(
			"slot"=>"ID",
			"slot_name"=>"SlotName",
));
}

public function deleteAll()
{
$qry="DELETE FROM `".$this->defineTableName()."` ;";
$objStmt=$this->objPDO->prepare($qry);
$res=$objStmt->execute();
if($res)
{
return true;
}
return false;
}

public function getAllSlots()
{

$qry="SELECT * FROM `".$this->defineTableName()."` ;";
$objStmt=$this->objPDO->prepare($qry);
$res=$objStmt->execute();
$slots=array();
while($slot=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$slots[]=$slot['slot_name'];
}
if(isset($slots))
{
return $slots;
}
else
{
return false;
}
}

};