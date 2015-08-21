<?php
include_once('controller.php');
include_once('model/student_class.php');
class HomeController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/admin.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee.php');
}
else if($student->checkStudent())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/student.php');
}

}
}
?>