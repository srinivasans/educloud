<?php
include_once('model_class.php');

class StudentParent extends Model
{

protected $StudentId;
protected $FatherName;
protected $MotherName;
protected $FatherQualification;
protected $MotherQualification;
protected $FatherOccupation;
protected $MotherOccupation;
protected $AnnualIncome;
protected $Phone;
protected $Mobile;
protected $Email;

protected function defineTableName()
{
return('parent');
}

protected function defineRelationMap()
{

return(array(
'id'=>'ID',
'student_id'=>'StudentId',
'father_name'=>'FatherName',
'mother_name'=>'MotherName',
'father_qualification'=>'FatherQualification',
'mother_qualification'=>'MotherQualification',
'father_occupation'=>'FatherOccupation',
'mother_occupation'=>'MotherOccupation',
'annual_income'=>'AnnualIncome',
'parent_phone'=>'Phone',
'parent_mobile'=>'Mobile',
'parent_email'=>'Email',
));

}


public function setByArray($array)
{

foreach($this->arRelationMap as $key => $value)
{
if(isset($array[$key]) && $array[$key]!='')
{
eval('$this->set'.$value.'("'.$array[$key].'");');
}
}
$this->save();

}


public function loadBystudentId($studentId)
{
$this->setStudentId($studentId);
	$strQuery="SELECT * FROM `".$this->strTableName."` WHERE student_id = '".$studentId."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$arRow=$objStatement->fetch(PDO::FETCH_ASSOC);
	if($arRow)
	{
	$this->setID($arRow['id']);
	}
}


};

?>