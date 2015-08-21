<?php
require_once('model_class.php');
class Student extends Model
{
protected $Name;
protected $Email;
protected $RollNo;
protected $Phone;
protected $Password;
protected $acctType;

protected $LastLoginTime;
protected $CreateAccountTime;

protected function defineTableName()
{
return('student');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"name"=>"Name",
			"email"=>"Email",
			"roll_no"=>"RollNo",
			"phone"=>"Phone",
			"password"=>"Password",
			"last_login_time"=>"LastLoginTime",
			"create_account_time"=>"CreateAccountTime",
			"acct_type"=>"acctType",
));
}

function checkAdmin()
{
if(!$this->blisLoaded)
$this->load();
if($this->acctType=='admin')
return true;

return false;
}

function checkTeacher()
{
if(!$this->blisLoaded)
$this->load();

if($this->acctType=='teacher')
return true;

return false;
}

function checkStudent()
{
if(!$this->blisLoaded)
$this->load();

if($this->acctType=='student')
return true;

return false;
}


public function loadByRoll($roll)
{
$strQuery="SELECT * FROM student WHERE `roll_no` = :roll;"; 
unset($objStatement);
$objStatement=$this->objPDO->prepare($strQuery);
$objStatement->bindParam(':roll',$roll,PDO::PARAM_STR);
$objStatement->execute();
$arRow=$objStatement->fetch(PDO::FETCH_ASSOC);
if(isset($arRow['id']))
{
$this->ID=$arRow['id'];
return true;
}
else
{
return false;
}
}


};

?>