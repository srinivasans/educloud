<?php
require_once('model_class.php');

class Teacher extends Model
{	
	protected   $UserId;
	protected   $TeacherId;
	protected	$Name;	
	protected 	$Qualification;
	protected 	$DateOfBirth;
	protected 	$Phone;
	protected 	$Mobile;	
	protected 	$BloodGroup;	
	protected 	$Email;	
	protected 	$Gender;	
	protected   $SubjectId;
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
	protected   $ExperienceInfo;
	protected   $ExperienceTime;
	 	
	 
	 
	 protected function defineRelationMap()
	 {
	 return (array(
		'id'=>'ID',
		'user_id'=>'UserId',
		'name'=>'Name',
	  	'teacher_id'=>'TeacherId',		
	 	'qualification'=>'Qualification',		
	 	'date_of_birth'=>'DateOfBirth',
	 	'phone'=>'Phone',	
	 	'mobile'=>'Mobile',	
	 	'blood_group'=>'BloodGroup',	
	 	'email'=>'Email',	 
	 	'gender'=>'Gender',	
		'subject_id'=>'SubjectId',
		'experience_info'=>'ExperienceInfo',
		'experience_time'=>'ExperienceTime',
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
	 return 'teacher';
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
	 
	 public function searchByEmpId($roll)
	 {
	 include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `teacher_id` LIKE '%".$roll."%' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$sub_name=Subject::getSubjectName($arRow['subject_id']);
	$arRow['subject_id']=$sub_name;
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	 
	  public function searchByName($name)
	 {
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `name` LIKE '%".$name."%' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$sub_name=Subject::getSubjectName($arRow['subject_id']);
	$arRow['subject_id']=$sub_name;
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	  public function searchBySubject($subject)
	 {
	 $subject_id=Subject::getSubjectNameLike($subject);
	 $strQuery="SELECT * FROM `".$this->strTableName."` WHERE `subject_id`='".$subject_id."' ;";
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$sub_name=Subject::getSubjectName($arRow['subject_id']);
	$arRow['subject_id']=$sub_name;
	$search_res[]=$arRow;
	}
	
	return $search_res;
	 }
	 
	 
	 public function loadByTeacherId($tid)
	{
	$strQuery="SELECT * FROM teacher WHERE `teacher_id` = :tid;"; 
	unset($objStatement);
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->bindParam(':tid',$tid,PDO::PARAM_STR);
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
	
	public function getTeacherArray($subject_id)
	{
	if($subject_id==0)
	{
	$strQuery="SELECT * FROM `".$this->strTableName."`;";
	}
	else
	{
	$strQuery="SELECT * FROM `".$this->strTableName."` WHERE `subject_id`='".$subject_id."' ;";
	}
	$objStatement=$this->objPDO->prepare($strQuery);
	$objStatement->execute();
	$search_res=array();
	while($arRow=$objStatement->fetch(PDO::FETCH_ASSOC))
	{
	$search_res[$arRow['id']]=$arRow['name'];
	}
	
	return $search_res;
	}
	
	

	 
	
	 
	 

};

?>