<?php
require_once('model_class.php');

class StudentProfile extends Model
{
	protected  	$RollNo;	
	protected   $UserId;
	protected	$Name;
	protected 	$AdmissionNumber;	
	protected 	$ClassLevel;
	protected 	$DateOfBirth;
	protected 	$Phone;
	protected 	$Mobile;	
	protected 	$BloodGroup;	
	protected 	$Email;
	protected 	$Category;	
	protected 	$Gender;	
	protected 	$Religion;	 
	protected 	$MotherTongue;	
	protected 	$PermanentAddressLine1;	
	protected 	$PermanentAddressLine2;	
	protected 	$PermanentCity;
	protected 	$PermanentState;		 
	protected 	$PermanentPincode;
	protected 	$CorrespondenceAddressLine1;	
	protected 	$CorrespondenceAddressLine2;	
	protected 	$CorrespondenceCity;	
	protected 	$CorrespondenceState;	
	protected	$CorrespondencePincode;	
	protected 	$Country;
	protected	$AdmissionDate;
	protected   $TempPass;
	 	
	 
	 
	 protected function defineRelationMap()
	 {
	 return (array(
		'id'=>'ID',
		'user_id'=>'UserId',
		'name'=>'Name',
	  	'roll_no'=>'RollNo',		
	 	'admission_number'=>'AdmissionNumber',	
	 	'class_level'=>'ClassLevel',	
	 	'date_of_birth'=>'DateOfBirth',
	 	'phone'=>'Phone',	
	 	'mobile'=>'Mobile',	
	 	'blood_group'=>'BloodGroup',	
	 	'email'=>'Email',	 
	 	'category'=>'Category',	
	 	'gender'=>'Gender',	
	 	'religion'=>'Religion',	 
	 	'mother_tongue'=>'MotherTongue',	
	 	'permanent_address_line_1'=>'PermanentAddressLine1',	
	 	'permanent_address_line_2'=>'PermanentAddressLine2',	
	 	'permanent_city'=>'PermanentCity',	
	 	'permanent_state'=>'PermanentState',		 
	 	'permanent_pincode'=>'PermanentPincode',
	 	'correspondence_address_line_1'=>'CorrespondenceAddressLine1',	
	 	'correspondence_address_line_2'=>'CorrespondenceAddressLine2',	
	 	'correspondence_city'=>'CorrespondenceCity',	
	 	'correspondence_state'=>'CorrespondenceState',	
		'correspondence_pincode'=>'CorrespondencePincode',	
	 	'country'=>'Country',	
		'admission_date'=>'AdmissionDate',
		'temp_password'=>'TempPass',
	 ));
	 }
	 
	 
	 protected function defineTableName()
	 {
	 return 'student_profile';
	 }
	 
	 
	 public function setByarray($array)
	 {
	 foreach($array as $key=>$value)
	 {
	 if(array_key_exists($key,$this->defineRelationMap()))
	 {
	 eval('$this->set'.$this->arRelationMap[$key].'("'.$value.'");');
	 }
	 }
	 
	 }
	 
	 
	 public function loadByUserId($userId)
	 {
	$this->setUserID($userId);
	$strQuery="SELECT * FROM `".$this->strTableName."` WHERE user_id = '".$userId."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$arRow=$objStatement->fetch(PDO::FETCH_ASSOC);
	$this->setID($arRow['id']);
	 }
	 
	 public function searchByRollNo($roll,$page=NULL)
	 {
	 $roll=mysql_real_escape_string($roll);
	 if($page!=NULL)
	 {
	 $start=($page-1)*5;
	 
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `roll_no` LIKE '%".$roll."%' LIMIT ".$start.",5;";
	 }
	 else
	 {
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `roll_no` LIKE '%".$roll."%';";
	 }
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	  public function searchByAdmissionNumber($admissionNo,$page=NULL)
	 {
	 $admissionNo=mysql_real_escape_string($admissionNo);
	 if($page!=NULL)
	 {
	 $start=($page-1)*5;
	 
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `admission_number` LIKE '%".$admissionNo."%' LIMIT ".$start.",5;";
	 }
	 else
	 {
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `admission_number` LIKE '%".$admissionNo."%' ;";
	 }
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	 public function countRollMatch($search)
	 {
	 $search=mysql_real_escape_string($search);
	 $strQuery="SELECT count(*) as num FROM `".$this->defineTableName()."` WHERE `roll_no` LIKE '%".$search."%' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$arr=$objStatement->fetch(PDO::FETCH_ASSOC);
	$num_rows=$arr['num'];
	return $num_rows;
	 }
	 
	  public function countNameMatch($search)
	 {
	 $search=mysql_real_escape_string($search);
	 $strQuery="SELECT count(*) as num FROM `".$this->defineTableName()."` WHERE `name` LIKE '%".$search."%' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$arr=$objStatement->fetch(PDO::FETCH_ASSOC);
	$num_rows=$arr['num'];
	return $num_rows;
	 }
	 
	  public function searchByName($name,$page=NULL)
	 {
	 $name=mysql_real_escape_string($name);
	 if($page!=NULL)
	 {
	 $start=($page-1)*5;
	 
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `name` LIKE '%".$name."%' LIMIT ".$start.",5;";
	 }
	 else
	 {
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `name` LIKE '%".$name."%';";
	 }
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	  public function searchByClass($class,$page=NULL)
	 {
	 $class=mysql_real_escape_string($class);
	 if($page!=NULL)
	 {
	 $start=($page-1)*5;
	 
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `class_level` LIKE '%".$class."%' LIMIT ".$start.",5;";
	 }
	 else
	 {
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `class_level` LIKE '%".$class."%' ;";
	 }
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	  public function getByClass($class)
	 {
	 $strQuery="SELECT * FROM `".$this->defineTableName()."` WHERE `class_level`='".$class."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	
	 
	 

};

?>