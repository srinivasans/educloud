<?php
include_once('controller.php');
include_once('model/teacher_class.php');
include_once('model/section_class.php');
include_once('model/timetable_class.php');
class MiscellaneousController extends Controller
{
protected function index()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/admin_miscellaneous.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_miscellaneous.php');
}
else
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/student_miscellaneous.php');
}

}

protected function studentsection()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_student_relation_view.php');
}
else if($student->checkTeacher())
{

}
else
{

}
}


protected function sectionstudentvalidate()
{
$required=array(
			"section"=>"Section",
			"student_id"=>"Student",
			);
GLOBAL $user;
if($user->checkAdmin()==true)
{
if(isset($_POST))
{
foreach($required as $key=>$value)
{
if(!isset($_POST[$key]) || $_POST[$key]=='' || $_POST[$key]=='select')
{
echo $value.' is Required<br/>';
return;
}
}


echo 'Saving...';
GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
$section=new Studentsection($objPDO);
$section->setSectionId($_POST['section']);
$section->setStudentId($_POST['student_id']);
$section->save();


}

}
else
{
header('Location:http://localhost/cloud');
}

}


}





?>