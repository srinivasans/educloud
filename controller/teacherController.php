<?php
include_once('controller.php');
include_once('model/teacher_class.php');
class TeacherController extends Controller
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
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employees.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee.php');
}
else
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/student.php');
}

}

protected function addemployee()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/addemployee.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function validate()
{
$required=array("teacher_id"=>"Teacher Id",
			"admission_date"=>"Admission Date",
			"name"=>"Name",
			"subject_id"=>"Subject",
			"date_of_birth"=>"Date of Birth",
			"gender"=>"Gender",
			"mobile"=>"Mobile",
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

if(!is_numeric($_POST['mobile']))
{
echo "Mobile number must be Numeric";
}
else if((isset($_POST['permanent_pincode'])&& $_POST['permanent_pincode']!='') && !is_numeric($_POST['permanent_pincode']) || (isset($_POST['correspondence_pincode']) && $_POST['correspondence_pincode']!='') && !is_numeric($_POST['correspondence_pincode']))
{
echo "Pincode must be Numeric";
}
else
{
echo 'Saving...';
GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$teacher=new Student($objPDO);
$teacherProfile=new Teacher($objPDO);


$temp_pass=substr(md5(microtime()),5,10);
$pass=md5($temp_pass);

$teacher_id=$_POST['teacher_id'];

if($_POST['blood_group']=='select')
unset($_POST['blood_group']);
$acct_type='teacher';
$teacher->setacctType($acct_type);
$teacher->loadByRoll($teacher_id);
$teacher->setRollNo($teacher_id);
$teacher->setPhone($_POST['phone']);
$teacher->setName($_POST['name']);
$teacher->setEmail($_POST['email']);
if($teacher->getPassword()=='' || $teacher->getPassword()==NULL )
{
$teacher->setPassword($pass);
}
$teacher->save();
$id=$teacher->getID();


$teacherProfile->setByArray($_POST);
$teacherProfile->setTempPass($temp_pass);
$teacherProfile->setUserId($id);
$teacherProfile->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/teacher/confirm/'.$teacherProfile->getUserId().'"/>';
}

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function confirm()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
$role="admin";
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);
$eid=$_GET['uid'];
$teacherProfile->loadByUserId($eid);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/confirmaddemployee.php');
}
else if($student->checkTeacher())
{
$role="teacher";
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);
$eid=$student->getID();
$teacherProfile->loadByUserId($eid);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/confirmaddemployee.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function validateconfirm()
{
$required=array("teacher_id"=>"Teacher Id",
			"admission_date"=>"Admission Date",
			"name"=>"Name",
			"subject_id"=>"Subject",
			"date_of_birth"=>"Date of Birth",
			"gender"=>"Gender",
			"mobile"=>"Mobile",
			);
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());

if($user->checkAdmin()==true || $student->checkTeacher()==true)
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

if(!is_numeric($_POST['mobile']))
{
echo "Mobile number must be Numeric";
}
else if((isset($_POST['permanent_pincode'])&& $_POST['permanent_pincode']!='') && !is_numeric($_POST['permanent_pincode']) || (isset($_POST['correspondence_pincode']) && $_POST['correspondence_pincode']!='') && !is_numeric($_POST['correspondence_pincode']))
{
echo "Pincode must be Numeric";
}
else
{
echo 'Saving...';
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);

if($user->checkAdmin()==true)
{
$teacher_id=$_GET['uid'];
}
else
{
$teacher_id=$student->getID();
}

if($_POST['blood_group']=='select')
unset($_POST['blood_group']);

$teacherProfile->loadByUserId($teacher_id);
$teacherProfile->setByArray($_POST);
$teacherProfile->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/teacher/view/'.$teacher_id.'"/>';
}

}

}
else
{
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/teacher/view/"/>';
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
if($user->checkAdmin()==true)
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$teacherProfile=new Teacher($objPDO);
$subject=new Subject($objPDO);
$teacherProfile->loadByUserId($_GET['uid']);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/viewemployee.php');
}
else if($student->checkTeacher()==true)
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$teacherProfile=new Teacher($objPDO);
$subject=new Subject($objPDO);
$teacherProfile->loadByUserId($student->getID());
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_profile.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

public function makepdf()
{
GLOBAL $user;
// Get required files.
require_once 'others/fpdf/fpdf.php';

// Set some document variables
$author = "eduCloud";
$x = 35;
$text = <<<EOT
Hello
EOT;

// Create fpdf object
$pdf = new FPDF('P', 'pt', 'Letter');
// Set base font to start
$pdf->SetFont('Arial', 'B', 16);
// Add a new page to the document
$pdf->addPage();
$pdf->setLeftMargin($x);
//page border
$pdf->Line(35,30,35,750);
$pdf->Line(35,30,575,30);
$pdf->Line(575,30,575,750);
$pdf->Line(575,750,35,750);
//end of page border
// Set the x,y coordinates of the cursor
$pdf->SetXY($x+20,40);
// Write 'Simple PDF' with a line height of 1 at the current position
$pdf->Write(25,'Employee Details');
$pdf->Image($_SERVER['DOCUMENT_ROOT'].'/cloud/images/school_logo.jpg', 500, 35, 50,50, 'JPG');
// Reset the font
// Reset font, color, and coordinates
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->SetLeftMargin($x+50);
$pdf->setXY($x+50,90);
GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$record=new Teacher($objPDO);
if($user->checkAdmin())
{
$eid=$_GET['uid'];
}
else
{
$student=new Student($objPDO,$user->getuserId());
$eid=$student->getID();
}
$record->loadByUserId($eid);
// Write out a long text blurb.
//$array=$record->getAsArray();
//$x=0;

/* TEMPLATE 1 DESIGN*/
$pdf->SetFont('Arial','',8);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Employee Id (reference) : '.$record->getTeacherId(),0,1,'L',true);

$pdf->SetFont('Arial','',12);
$pdf->setFillColor(50,50,50);
$pdf->setTextColor(255,255,255);
$pdf->cell(450,20,'Employee Details',0,1,'C',true);

$pdf->setTextColor(0,0,0);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Employee Name',0,0,'C',true);
$pdf->cell(250,20,$record->getName(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Qualification',0,0,'C',true);
$pdf->cell(250,20,$record->getQualification(),0,1,'C',true);

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$subject_id=new Subject($objPDO);
$subject_id->setID($record->getSubjectId());
$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Subject',0,0,'C',true);
$pdf->cell(250,20,$subject_id->getName(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Date Of Birth',0,0,'C',true);
$pdf->cell(250,20,$record->getDateOfBirth(),0,1,'C',true);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Gender',0,0,'C',true);
$pdf->cell(250,20,ucfirst($record->getGender()),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Blood Group',0,0,'C',true);
$pdf->cell(250,20,$record->getBloodGroup(),0,1,'C',true);


$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'',0,0,'C',true);
$pdf->cell(250,20,'',0,1,'C',true);

$pdf->setFillColor(50,50,50);
$pdf->setTextColor(255,255,255);
$pdf->cell(450,20,'Contact Details',0,1,'C',true);

$pdf->setTextColor(0,0,0);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Correspondence Address',0,0,'C',true);
$pdf->cell(250,20,$record->getCorrespondenceAddressLine1(),0,1,'C',true);
$pdf->cell(200,20,'',0,0,'C',true);
$pdf->cell(250,20,$record->getCorrespondenceAddressLine2(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'City',0,0,'C',true);
$pdf->cell(250,20,$record->getCorrespondenceCity(),0,1,'C',true);
$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'State',0,0,'C',true);
$pdf->cell(250,20,$record->getCorrespondenceState(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Pincode',0,0,'C',true);
$pdf->cell(250,20,$record->getCorrespondencePincode(),0,1,'C',true);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Phone',0,0,'C',true);
$pdf->cell(250,20,$record->getPhone(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Mobile',0,0,'C',true);
$pdf->cell(250,20,$record->getMobile(),0,1,'C',true);
$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Email',0,0,'C',true);
$pdf->cell(250,20,$record->getEmail(),0,1,'C',true);



$pdf->setFillColor(255,255,255);
$pdf->cell(450,20,'',0,1,'C',true);

$pdf->setFillColor(50,50,50);
$pdf->setTextColor(255,255,255);
$pdf->cell(450,20,'Login Details',0,1,'C',true);

$pdf->setTextColor(0,0,0);
$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Employee Id *',0,0,'C',true);
$pdf->cell(250,20,$record->getTeacherId(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Temporary Password **',0,0,'C',true);
$pdf->cell(250,20,$record->getTempPass(),0,1,'C',true);

/* TEMPLATE 1 DESIGN END*/

$pdf->SetFont('Arial','',10);
$pdf->SetXY($x+100,620);
$pdf->write(15,'Employee\'s Signature');

$pdf->SetXY($x+350,620);
$pdf->write(15,'Admin\'s Signature');


$pdf->SetFont('Arial','',8);
$pdf->SetXY($x+20,710);
$pdf->write(15,'* Employee Id may be Temporary , ** Please Change the Password for Security Reasons');

$pdf->SetXY($x+20,720);
$pdf->write(15,'This is a Computer Generated Form. If any Discrepancy Contact Admin : eduCloud Reference Number '.$user->getuserId());

// Close the document and save to the filesystem with the name simple.pdf
$pdf->Output('generated_files/enroll'.$record->getUserId().'.pdf','F');
header('Location:http://localhost/cloud/generated_files/enroll'.$record->getUserId().'.pdf');

}


protected function search()
{

GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/search_teacher.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function searchresult()
{

GLOBAL $user;
GLOBAL $objPDO;
$search=$_POST['search_input'];
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$teacherProfile=new Teacher($objPDO);
if($search!='')
{
$emp_id_match=$teacherProfile->SearchByEmpId($search);
$name_match=$teacherProfile->SearchByName($search);
$subject_match=$teacherProfile->SearchBySubject($search);

echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of roll no search
$i=0;
echo '<div class="emp_id_search">';
for($i=0;$i<count($emp_id_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Employee Id Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Employee Id</td><td>Name</td><td>Subject</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($emp_id_match[$i]['teacher_id'],$search);
$end=$start+strlen($search)-1;
$block=$emp_id_match[$i]['teacher_id'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$highlighted.'</td>';
echo '<td>'.$emp_id_match[$i]['name'].'</td>';
echo '<td>'.$emp_id_match[$i]['subject_id'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/teacher/view/'.$emp_id_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search



//start of name search
$i=0;
echo '<div class="name_search">';
for($i=0;$i<count($name_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Employee Name Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Employee Id</td><td>Name</td><td>Subject</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($name_match[$i]['name'],$search);
$end=$start+strlen($search)-1;
$block=$name_match[$i]['name'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$name_match[$i]['teacher_id'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$name_match[$i]['subject_id'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/teacher/view/'.$name_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of name search

//start of subject search
$i=0;
echo '<div class="subject_search">';
for($i=0;$i<count($subject_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Subject Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Employee Id</td><td>Name</td><td>Subject</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($subject_match[$i]['subject_id'],$search);
$end=$start+strlen($search)-1;
$block=$subject_match[$i]['subject_id'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$subject_match[$i]['teacher_id'].'</td>';
echo '<td>'.$subject_match[$i]['name'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td><a class="link" href="http://localhost/cloud/teacher/view/'.$subject_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of subject search


}

	 




}



}
?>