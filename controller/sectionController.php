<?php
include_once('controller.php');
include_once('model/teacher_class.php');
include_once('model/section_class.php');
class SectionController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/sections.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/sections.php');
}
else
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/sections.php');
}

}


protected function create()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/create_section.php');
}

}



protected function validate()
{
$required=array(
			"class_level"=>"Class",
			"section"=>"Section",
			"code"=>"Code",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
$section=new Section($objPDO);
$section->setClass($_POST['class_level']);
$section->setSection($_POST['section']);
$section->setCode($_POST['code']);
$section->save();
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/miscellaneous"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}

}


?>