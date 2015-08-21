<?php
include('controller.php');
class LeaveController extends Controller
{

protected function index()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/temp_page.php');
}
else if($student->checkTeacher()==true)
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/temp_page.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

};
?>