<?php
include_once('controller.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
class ParentController extends Controller
{

protected function addparent()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true && isset($_GET['uid']))
{
GLOBAL $objPDO;
$studentProfile=new StudentProfile($objPDO);
$studentProfile->loadByUserId($_GET['uid']);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/addparent.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function validate()
{
GLOBAL $user;
if($user->checkAdmin())
{
echo 'Saving...';
GLOBAL $objPDO;
$parent=new StudentParent($objPDO);
$parent->loadByStudentId($_GET['uid']);
$parent->setByArray($_POST);

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/studentprofile/confirm/'.$_GET['uid'].'"/>';
}
else
{
header('Location:http://localhost/cloud/');
}

}


}

?>