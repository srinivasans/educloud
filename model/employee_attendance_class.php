<?php
require_once('model_class.php');
class EmployeeAttendence extends Model
{
protected $EmployeeId;
protected $Date;
protected $Presence;

protected function defineTableName()
{
return('employee_attendance');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"employee_id"=>"EmployeeId",
			"date"=>"Date",
			"presence"=>"Presence",
));
}

public function getByDate($date)
{
$qry="SELECT * FROM ".$this->defineTableName()." WHERE `date`='".$date."';";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$att=array();
$objStmt->execute();
while($attend=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$att[$attend['employee_id']]=$attend['presence'];
}
return $att;
}

public function deleteByDate($date)
{
$qry="DELETE FROM ".$this->defineTableName()." WHERE `date`='".$date."';";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
}


public function getByEmployeeId($employee_id)
{
$qry="SELECT * FROM ".$this->defineTableName()." WHERE `employee_id`=".$employee_id." ORDER BY `date` ;";
GLOBAL $objPDO;
$objStmt=$objPDO->prepare($qry);
$objStmt->execute();
$employee_att=array();
while($res=$objStmt->fetch(PDO::FETCH_ASSOC))
{
$employee_att[]=$res;
}
return $employee_att;
}



};

?>