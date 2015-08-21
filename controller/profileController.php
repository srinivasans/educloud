<?php
include_once('controller.php');
class ProfileController extends Controller
{
protected function index()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
$role=$student->getacctType();
$account_info=$student->getAsArray();
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/profile_view.php');
}

protected function changepassword()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
$role=$student->getacctType();
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/change_pass.php');
}

protected function savepass()
{
$required=array(
			"current"=>"Current Password",
			"new"=>"New Password",
			);

foreach($required as $key=>$value)
{
if(!isset($_POST[$key]) || $_POST[$key]=='' || $_POST[$key]=='select')
{
echo $value.' is Required<br/>';
return;
}
}
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
if(md5($_POST['current'])==$student->getPassword())
{
$student->setPassword(md5($_POST['new']));
$student->save();
}
else
{
echo 'The Current Password is Wrong';
return;
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/profile"/>';
}



};
?>