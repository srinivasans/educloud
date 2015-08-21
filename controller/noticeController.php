<?php
include('controller.php');
class NoticeController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notice_home.php');
}
else if($student->checkTeacher()==true)
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notice_home.php');
}
else if($student->checkStudent())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/student_notice_home.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

/*to be edited*/
protected function sendemail()
{
GLOBAL $objPDO;
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/email_communication_class.php');
$email=new EmailCommunication();
$email->addRecipient('srini2351994@gmail.com');
$email->addRecipient('geethu2351994@gmail.com','Srinivasan');
$email->setMessageBody("This is a Test Message for Sending Mail");
$email->setSubject('This is also a test Head');
$email->setSender('siva@gmail.com');
$email->send();
echo $email->getErrorMessage();
}
/*to be edited*/


protected function notify()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notify_home.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function events()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/events.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function getcalendar()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/calendar_class.php');
$calendar=new Calendar();
$month=$calendar->getmonth();
$year=$calendar->getyear();
if(isset($_GET['uid']) && isset($_GET['ref']))
{
$month=$_GET['uid'];
$year=$_GET['ref'];
$calendar->setmonth($month);
$calendar->setyear($year);
}
$calendar->create();
$week=$calendar->getweek();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/events_class.php');
$event=new Events($objPDO);
$datePattern="-".$calendar->getmonth()."-".$calendar->getyear();
$events_array=$event->getByDateLike($datePattern);
$day_events=array();
foreach($events_array as $key=>$value)
{
$day_events[$value['date']][]=$key;
}
$events_type=array('1'=>'holiday.png','2'=>'fees.png','3'=>'function.png','4'=>'test.png');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/events_calendar.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function geteventmessage()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/events_class.php');
$id=1;
if(isset($_GET['uid']))
{
$id=$_GET['uid'];
}
$event=new Events($objPDO,$id);
$event_info['name']=$event->getEvent();
$event_info['description']=$event->getDescription();
$event_info['date']=$event->getDate();
$event_info['type']=$event->getType();

$events_type=array('1'=>'holiday.png','2'=>'fees.png','3'=>'function.png','4'=>'test.png');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/events_info.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function internal()
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
$create=true;
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/internal_notice_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_class.php');
$author=new Student($objPDO);
$notice=new InternalNotice($objPDO);
$headings_array=$notice->getHeadingArray();
for($i=0;$i<count($headings_array);$i++)
{
$author->setID($headings_array[$i]['user_id']);
$author->load();
$headings_array[$i]['author_name']=$author->getName();
$time=strtotime($headings_array[$i]['date']);
$headings_array[$i]['day']=date('d',$time);
$headings_array[$i]['month']=date('M',$time);
}
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notice_internal.php');
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
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
$create=true;
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_notice_class.php');
$notice=new EmployeeNotice($objPDO);
$headings_array=$notice->getHeadingArray();
for($i=0;$i<count($headings_array);$i++)
{
$time=strtotime($headings_array[$i]['date']);
$headings_array[$i]['day']=date('d',$time);
$headings_array[$i]['month']=date('M',$time);
}
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notice_employee.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function internal_new()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/new_notice_internal.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function student_new()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/new_notice_student.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function employee_new()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/new_notice_employee.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function internalview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher() || $student->checkStudent()) && isset($_GET['uid']))
{
$role=$student->getacctType();
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
$id=$_GET['uid'];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/internal_notice_class.php');
$notice=new InternalNotice($objPDO,$id);
$elems=$notice->getAsArray();
$time=strtotime($elems['date']);
$elems['day']=date('d',$time);
$elems['month']=date('M',$time);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/view_notice_internal.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function studentview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher() || $student->checkStudent()) && isset($_GET['uid']))
{
$role=$student->getacctType();
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
$id=$_GET['uid'];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_notice_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_class.php');
$notice=new StudentNotice($objPDO,$id);
$elems=$notice->getAsArray();
$stu=new Student($objPDO,$elems['student_id']);
$elems['author_name']=$stu->getName();
$time=strtotime($elems['date']);
$elems['day']=date('d',$time);
$elems['month']=date('M',$time);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/view_notice_student.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function employeeview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher()) && isset($_GET['uid']))
{
$role=$student->getacctType();
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
$id=$_GET['uid'];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_notice_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_class.php');
$notice=new EmployeeNotice($objPDO,$id);
$elems=$notice->getAsArray();
$stu=new Student($objPDO,$elems['user_id']);
$elems['author_name']=$stu->getName();
$time=strtotime($elems['date']);
$elems['day']=date('d',$time);
$elems['month']=date('M',$time);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/view_notice_employee.php');
}
else
{
header('Location:http://localhost/cloud');
}
}



protected function student()
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
$create=true;
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_notice_class.php');
$notice=new StudentNotice($objPDO);
$headings_array=$notice->getHeadingArray();
for($i=0;$i<count($headings_array);$i++)
{
$time=strtotime($headings_array[$i]['date']);
$headings_array[$i]['day']=date('d',$time);
$headings_array[$i]['month']=date('M',$time);
}
$type_img=array('1'=>'important.png','2'=>'announcement.png','3'=>'reminder.png','4'=>'others.png');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/notice_student.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function emailnotification()
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/new_email_notification.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function create_internal()
{
$required=array(
			"heading"=>"Heading",
			"content"=>"Content",
			"importance"=>"Notice Type",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/internal_notice_class.php');
$allowed_tags="<div><span><p><img><br><br/><a><b><u><i><style><audio><video><embed><iframe><tr><td><table><sup><sub><title>";


$info=$_POST['content'];
$info=preg_replace('/&lt;script\b[^>]*>(.*?)\/script&gt;/i', '', $info);
$info=preg_replace('/<script\b[^>]*>(.*?)\/script>/i', '', $info);
$head=mysql_real_escape_string(addslashes(strip_tags($_POST['heading'])));
$info=mysql_real_escape_string(addslashes(strip_tags($info,$allowed_tags)));

$importance=$_POST['importance'];
$user_id=$user->getuserId();

$notice=new InternalNotice($objPDO);

$notice->setHeading($head);
$notice->setInfo($info);
$notice->setImportance($importance);
$notice->setUserId($user_id);

$notice->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/notice/internal"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}
}

protected function create_employee()
{
$required=array(
			"heading"=>"Heading",
			"content"=>"Content",
			"importance"=>"Notice Type",
			);
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
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

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/employee_notice_class.php');
$allowed_tags="<div><span><p><img><br><br/><a><b><u><i><style><audio><video><embed><iframe><tr><td><table><sup><sub><title>";


$info=$_POST['content'];
$info=preg_replace('/&lt;script\b[^>]*>(.*?)\/script&gt;/i', '', $info);
$info=preg_replace('/<script\b[^>]*>(.*?)\/script>/i', '', $info);
$head=mysql_real_escape_string(addslashes(strip_tags($_POST['heading'])));
$info=mysql_real_escape_string(addslashes(strip_tags($info,$allowed_tags)));

$importance=$_POST['importance'];
$user_id=$user->getuserId();

$notice=new EmployeeNotice($objPDO);

$notice->setHeading($head);
$notice->setInfo($info);
$notice->setType($importance);
$notice->setUserId($user_id);

$notice->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/notice/employee"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}
}


protected function addevent()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true && isset($_GET['uid']))
{
$date=$_GET['uid'];
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/add_event.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function createevent()
{
$required=array(
			"event_name"=>"Event Name",
			"event_description"=>"Event Description",
			"date"=>"Date",
			"event_type"=>"Event Type"
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/events_class.php');

$name=mysql_real_escape_string(addslashes(strip_tags($_POST['event_name'])));
$desc=mysql_real_escape_string(addslashes(strip_tags($_POST['event_description'])));

$type=$_POST['event_type'];
$date=$_POST['date'];
$event=new Events($objPDO);

$event->setEvent($name);
$event->setDescription($desc);
$event->setType($type);
$event->setDate($date);

$event->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/notice/events"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}

protected function create_student()
{
$required=array(
			"heading"=>"Heading",
			"content"=>"Content",
			"importance"=>"Notice Type",
			);
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
if($user->checkAdmin()==true || $student->checkTeacher() || $student->checkStudent())
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

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_notice_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$allowed_tags="<div><span><p><img><br><br/><a><b><u><i><style><audio><video><embed><iframe><tr><td><table><sup><sub><title>";


$info=$_POST['content'];
$info=preg_replace('/&lt;script\b[^>]*>(.*?)\/script&gt;/i', '', $info);
$info=preg_replace('/<script\b[^>]*>(.*?)\/script>/i', '', $info);
$head=mysql_real_escape_string(addslashes(strip_tags($_POST['heading'])));
$info=mysql_real_escape_string(addslashes(strip_tags($info,$allowed_tags)));

$type=$_POST['importance'];
$stu=new StudentProfile($objPDO);
$user_id=$user->getuserId();

$notice=new StudentNotice($objPDO);

$notice->setHeading($head);
$notice->setInfo($info);
$notice->setType($type);
$notice->setStudentId($user_id);

$notice->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/notice/student"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}
}

};
?>