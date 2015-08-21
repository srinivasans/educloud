<?php
include('controller.php');
class TimetableController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_home.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_employee_home.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function create()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_template.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function settings()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$setting=new TimetableSettings($objPDO);
$slots=$setting->getAllSlots();
$set=false;
if($slots)
{
$set=true;
}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_settings_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function settingssave()
{
$required=array(
			"hours"=>"Number of Slots",
			"slot_name"=>"Slot Names",
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

GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$setting=new TimetableSettings($objPDO);
$setting->deleteAll();
echo 'Saving...';
for($i=0;$i<$_POST['hours'];$i++)
{
if(!array_key_exists($i,$_POST['slot_name']) || $_POST['slot_name'][$i]=="" )
{
$_POST['slot_name'][$i]="Slot ".($i+1);
}
}

foreach($_POST['slot_name'] as $key=>$value)
{
$setting=new TimetableSettings($objPDO);
$setting->setSlotName($value);
$setting->save();
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/timetable"/>';
}
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function view()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_section_view.php');
}
else if($student->checkStudent())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
$role=$student->getacctType();
$stu_pro=new StudentProfile($objPDO);
$stu_pro->loadByUserId($student->getID());
$sec=new StudentSection($objPDO);
$s=new Section($objPDO);
$section_array=$s->getSectionArray();
$section_id=$sec->getByStudentId($stu_pro->getID());
$section=$section_array[$section_id];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_student_view.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function empview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/timetable_employee_view.php');
}
else if($student->checkTeacher())
{
$eid=$student->getID();
$emp_name=$student->getName();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_timetable.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function teacherview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
if($user->checkAdmin())
{
$teacher=$_GET['uid'];
}
else
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);
$teacherProfile->loadByUserId($student->getID());
$teacher=$teacherProfile->getID();
}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$sett=new TimetableSettings($objPDO);
$slots=$sett->getAllSlots();
if(!isset($slots))
{
$num_slots=0;
}
else
{
$num_slots=count($slots);
}

include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');

$tt=new Timetable($objPDO);
$sec=new Section($objPDO);
$timetable=$tt->getByTeacherId($teacher);
$subject=$tt->getTeacherSubject($teacher);
$section=$sec->getSectionArray();

$total=0;
$count=array();
foreach($timetable as $key=>$value)
{
$total++;
if(array_key_exists($value,$count))
{
$count[$value]++;
}
else
{
$count[$value]=1;
}
}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/teacher_timetable_view_template.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function sectionview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
if($student->checkStudent())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$role=$student->getacctType();
$stu_pro=new StudentProfile($objPDO);
$stu_pro->loadByUserId($student->getID());
$sec=new StudentSection($objPDO);
$class=$sec->getByStudentId($stu_pro->getID());
}
else
{
$class=$_GET['uid'];
}
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher() || $student->checkStudent())
{

include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$sett=new TimetableSettings($objPDO);
$slots=$sett->getAllSlots();
if(!isset($slots))
{
$num_slots=0;
}
else
{
$num_slots=count($slots);
}

include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_class.php');
$rel=new SectionTeacherSubjectRelations($objPDO);
$teasubrel=$rel->getByClass($class);
$subjects=array();
for($i=0;$i<count($teasubrel);$i++)
{
$subjects[$teasubrel[$i]['subject_id']]=Subject::getSubjectName($teasubrel[$i]['subject_id']);
}
$tt=new Timetable($objPDO);
$timetable=$tt->getBySection($class);
$total=0;
$count=array();
foreach($timetable as $key=>$value)
{
$total++;
if(array_key_exists($value,$count))
{
$count[$value]++;
}
else
{
$count[$value]=1;
}
}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_timetable_view_template.php');
}
else
{
header('Location:http://localhost/cloud');
}
}



protected function newtime()
{
$class=$_GET['uid'];
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$sett=new TimetableSettings($objPDO);
$slots=$sett->getAllSlots();
if(!isset($slots))
{
$num_slots=0;
}
else
{
$num_slots=count($slots);
}

include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_class.php');
$rel=new SectionTeacherSubjectRelations($objPDO);
$teasubrel=$rel->getByClass($class);
$subjects=array();
for($i=0;$i<count($teasubrel);$i++)
{
$subjects[$teasubrel[$i]['subject_id']]=Subject::getSubjectName($teasubrel[$i]['subject_id']);
}
$tt=new Timetable($objPDO);
$timetable=$tt->getBySection($class);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_timetable.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function validate()
{
$required=array(
			"section"=>"Section",
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



GLOBAL $objPDO;

include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_settings_class.php');
$sett=new TimetableSettings($objPDO);
$slots=$sett->getAllSlots();
if(!isset($slots))
{
$num_slots=0;
}
else
{
$num_slots=count($slots);
}

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/timetable_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/utility_class.php');
for($i=0;$i<count($_POST['time_table']);$i++)
{
$spl=array();
$spl=explode("-",$_POST['time_table'][$i]);
if(isset($spl[1]))
{
$ttab=new Timetable($objPDO);
$ttab->setSectionId($_POST['section']);
$ttab->setSlot($spl[1]);
$ttab->getBySecSlot();
if($spl[0]!='0')
{
$rel=new SectionTeacherSubjectRelations($objPDO);
$tid=$rel->getByClassSubject($_POST['section'],$spl[0]);

if($ttab->checkTeacherSlot($spl[1],$tid,$_POST['section']))
{
$ttab->setSubjectId($spl[0]);
$ttab->setTeacherId($tid);
}
else
{
$ttab->markForDeletion();
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$sub=new Subject($objPDO,$spl[0]);
$day=floor($spl[1]/$num_slots);
$slot=$spl[1]%$num_slots;
echo "Teacher Slot Unavailable for ".$sub->getName()." at ".Utility::getDay($day+1)." ".$slots[$slot]."<br/>";
return;
$label=false;
}
}
else if($spl[0]=='0')
{
$ttab->markForDeletion();
}
if(!isset($label) || $label!=false)
{

}
$ttab->save();
}

}
echo 'Saving...';
if(!isset($label) || $label!=false)
{
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/timetable"/>';
}

}

}
else
{
header('Location:http://localhost/cloud');
}

}



}
 

?>