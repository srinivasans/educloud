<?php
include('controller.php');
class AttendanceController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/attendance_home.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/attendance_employee_home.php');
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
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/attendance_mark.php');
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
			"date"=>"Date",
			"students"=>"Students",
			);
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
if($user->checkAdmin()==true || $student->checkTeacher())
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
$arr=$_POST['students'];
$attRel=new Attendence($objPDO);
$attRel->deleteBySectionDate($_POST['section'],$_POST['date']);
for($i=0;$i<count($arr);$i++)
{
$attRel=new Attendence($objPDO);
$attRel->setSectionId(intval($_POST['section']));
$attRel->setDate($_POST['date']);
$attRel->setStudentId(intval($arr[$i]));
if(isset($_POST[$arr[$i]]))
{
$attRel->setPresence(1);
}
else
{
$attRel->setPresence(0);
}
$attRel->save();
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/attendance/create"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function stuview()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/search_attendance_view.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function getstudent()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
$search="";
if(isset($_POST['search']))
$search=$_POST['search'];
else if(isset($_GET['uid']))
$search=$_GET['uid'];
$page=NULL;
if(isset($_GET['ref']))
{
$page=$_GET['ref'];
}

if($search!="")
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
$stu=new StudentProfile($objPDO);
$att=new Attendence($objPDO);
$roll_match=$stu->searchByRollNo($search,$page);
$name_match=$stu->searchByName($search,$page);
$num_result=count($name_match)>count($roll_match)?count($name_match):count($roll_match);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/search_student_attendance_view.php');
}
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function paginate()
{
$search=NULL;
if(isset($_GET['uid']))
$search=$_GET['uid'];
if($search!=NULL)
{
GLOBAL $objPDO;
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$stu=new StudentProfile($objPDO);
$count_roll=$stu->countRollMatch($search);
$count_name=$stu->countNameMatch($search);
$num_result=$count_roll>$count_name?$count_roll:$count_name;
$pages=ceil($num_result/5);
for($i=1;$i<=$pages;$i++)
{
echo '<div class="paginate_elem" id="'.$i.'">'.$i.'</div>|';
}
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_attendance_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function sectionreport()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_report_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function employeelist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true && isset($_GET['uid'])) || $student->checkTeacher())
{
if($user->checkAdmin())
{
$emp_id=$_GET['uid'];
}
else
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacher=new Teacher($objPDO);
$teacher->loadByUserId($student->getID());
$emp_id=$teacher->getID();
}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_attendance_class.php');
$att=new EmployeeAttendence($objPDO);
$employee_att=$att->getByEmployeeId($emp_id);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_attendance_list.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function employeereport()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_report_view.php');
}
else if($student->checkTeacher())
{
$employee_name=$student->getName();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_personal_report_view.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function getsectionreport()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher()) && isset($_GET['uid']))
{
$section=$_GET['uid'];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
$stusec=new Studentsection($objPDO);
$stupro=new StudentProfile($objPDO);
$att=new Attendence($objPDO);
$stu=$stusec->getBySectionId($section);
$students=array();
$presence=array();
$total_days=$att->getBySectionId($section);
foreach($stu as $key=>$value)
{
$stupro->setID($value['student_id']);
$stupro->load();
$students[]=$stupro->getAsArray();
$stu_att=$att->getByStudentId($value['student_id']);
$presence[$value['student_id']]=0;
foreach($stu_att as $k=>$v)
{
if($v['presence']==1)
{
$presence[$value['student_id']]++;
}
}
if($total_days>0)
{
$percent[$value['student_id']]=round(($presence[$value['student_id']]/$total_days)*100,1);
}
else
{
$percent[$value['student_id']]="No Data Available";
}

}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_report_list.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function getsecattend()
{
$section=$_GET['uid'];
$date=NULL;
if(isset($_GET['ref']))
{
$date=$_GET['ref'];
}
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
$stusec=new Studentsection($objPDO);
$stupro=new StudentProfile($objPDO);
$att=new Attendence($objPDO);
$stu=$stusec->getBySectionId($section);
$students=array();

foreach($stu as $key=>$value)
{
$stupro->setID($value['student_id']);
$stupro->load();
$students[]=$stupro->getAsArray();
}

$marked=$att->getBySectionDateArray($section,$date);
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_att_list_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function mark()
{
$section=$_GET['uid'];
$date=NULL;
if(isset($_GET['ref']))
{
$date=$_GET['ref'];
}
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
$stusec=new Studentsection($objPDO);
$stupro=new StudentProfile($objPDO);
$att=new Attendence($objPDO);
$stu=$stusec->getBySectionId($section);
$students=array();

foreach($stu as $key=>$value)
{
$stupro->setID($value['student_id']);
$stupro->load();
$students[]=$stupro->getAsArray();
}

$marked=$att->getBySectionDateArray($section,$date);
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/student_attendence_view.php');

}
else
{
header('Location:http://localhost/cloud');
}
}

protected function employeemark()
{
$required=array(
			"date"=>"Date",
			"employees"=>"Employees",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_attendance_class.php');
$arr=$_POST['employees'];
$attRel=new EmployeeAttendence($objPDO);
$attRel->deleteByDate($_POST['date']);
for($i=0;$i<count($arr);$i++)
{
$attRel=new EmployeeAttendence($objPDO);
$attRel->setDate($_POST['date']);
$attRel->setEmployeeId(intval($arr[$i]));
if(isset($_POST[$arr[$i]]))
{
$attRel->setPresence(1);
}
else
{
$attRel->setPresence(0);
}
$attRel->save();
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/attendance/employee"/>';

}

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
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$emp=new Teacher($objPDO);
$employees=$emp->getTeacherArray(0);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_attendance_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function empviewshow()
{
$date=$_GET['uid'];
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_attendance_class.php');
$emp=new Teacher($objPDO);
$att=new EmployeeAttendence($objPDO);
$employees=array();
$employees=$emp->getTeacherArray(0);
$marked=$att->getByDate($date);
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_view_att.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function employeemarkview()
{
$date=$_GET['uid'];
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_attendance_class.php');
$emp=new Teacher($objPDO);
$att=new EmployeeAttendence($objPDO);
$employees=array();
$employees=$emp->getTeacherArray(0);
$marked=$att->getByDate($date);
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_mark_att.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function employee()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$emp=new Teacher($objPDO);
$employees=$emp->getTeacherArray(0);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_attendance.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

public static function makepie($data)
{
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/piechart.php');
}

protected function report()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher() || $student->checkStudent())
{
$role=$student->getacctType();
$sid=NULL;
if($student->checkStudent())
{
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$sid=$student->getID();
}
else if(isset($_GET['uid']))
{
$sid=$_GET['uid'];
}

if($sid)
{
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/attendence_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
$stu=new StudentProfile($objPDO);
$stu->loadByUserId($sid);
$roll_number=$stu->getRollNo();
$name=$stu->getName();
$section=new StudentSection($objPDO);
$section_id=$section->getByStudentId($sid);
$sec=new Section($objPDO,$section_id);
$section_name=$sec->getCode();
$att=new Attendence($objPDO);
$total_days=$att->getBySectionId($section_id);
$attendance=$att->getByStudentId($stu->getID());
$present=0;
$absent=0;
foreach($attendance as $key=>$value)
{
if($value['presence']==1)
{
$present++;
}
else if($value['presence']==0)
{
$absent++;
}
}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/report_view.php');
}
else
{
echo 'error';
}
}
else
{
header('Location:http://localhost/cloud');
}

}


};

?>