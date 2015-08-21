<?php
include('controller.php');
class LoginController extends Controller
{
public function __construct()
{
$this->arNoAuthenticate['index']='1';
$this->arNoAuthenticate['validate']='1';
}

protected function index()
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/index.php');
}

protected function encrypt($pass)
{
return(md5($pass));
}

protected function validate()
{
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_class.php');
GLOBAL $objPDO;
$student=new Student($objPDO);
$roll=$_POST['roll'];
$pass=$_POST['pwd'];
if(!isset($roll) || $roll=='' )
{
echo 'Enter your Roll No';
}
else if(!isset($pass) || $pass=='')
{
echo 'Enter your Password';
}
else if(!$student->loadByRoll($roll))
{
echo 'Incorrect Rollno';
}
else if($student->getPassword()!=$this->encrypt($pass))
{
echo 'Incorrect Password';
}
else if($student->getRollNo()==$roll && $student->getPassword()==$this->encrypt($pass))
{
GLOBAL $user;
$user->login($student->getID());
echo '<META HTTP-EQUIV="Refresh" Content="0;url=http://localhost/cloud">';
}


}
};

?>