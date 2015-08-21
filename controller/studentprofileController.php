<?php
include('controller.php');
class StudentprofileController extends Controller
{

public $label=array(
		'id'=>'Reference Id',
		'user_id'=>'User Id',
		'name'=>'Name',
	  	'roll_no'=>'Roll Number',		
	 	'admission_number'=>'Admission Number',	
	 	'class_level'=>'Class',	
	 	'date_of_birth'=>'Date Of Birth',
	 	'phone'=>'Phone',	
	 	'mobile'=>'Mobile',	
	 	'blood_group'=>'Blood Group',	
	 	'email'=>'Email',	 
	 	'category'=>'Category',	
	 	'gender'=>'Gender',	
	 	'religion'=>'Religion',	 
	 	'mother_tongue'=>'Mother Tongue',	
	 	'permanent_address_line_1'=>'Permanent Address',	
	 	'permanent_address_line_2'=>'',	
	 	'permanent_city'=>'City',	
	 	'permanent_state'=>'State',		 
	 	'permanent_pincode'=>'Pincode',
	 	'correspondence_address_line_1'=>'Correspondence Address',	
	 	'correspondence_address_line_2'=>'',	
	 	'correspondence_city'=>'City',	
	 	'correspondence_state'=>'State',	
		'correspondence_pincode'=>'Pincode',	
	 	'country'=>'Country',	
		'admission_date'=>'Admission Date',
		'temp_password'=>'Temporary Password',
		);

protected function addstudent()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/addstudent.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function validate()
{
$required=array("admission_number"=>"Admission Number",
			"admission_date"=>"Admission Date",
			"name"=>"Name",
			"class_level"=>"Class",
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
$student=new Student($objPDO);
$studentProfile=new StudentProfile($objPDO);
if(!isset($_POST['roll_no']) ||$_POST['roll_no']=='')
{
$roll_no=rand(1000,9999);
}
else
{
$roll_no=$_POST['roll_no'];
}
$temp_pass=substr(md5(microtime()),5,10);
$pass=md5($temp_pass);

if($_POST['category']=='select')
unset($_POST['category']);
if($_POST['blood_group']=='select')
unset($_POST['blood_group']);
$acct_type='student';
$student->setRollNo($roll_no);
$student->setPhone($_POST['phone']);
$student->setName($_POST['name']);
$student->setEmail($_POST['email']);
$student->setacctType($acct_type);
$student->loadByRoll($roll_no);
if($student->getPassword()=='' || $student->getPassword()==NULL )
{
$student->setPassword($pass);
}
$student->save();
$id=$student->getID();


$studentProfile->setByArray($_POST);
$studentProfile->setRollNo($roll_no);
$studentProfile->setTempPass($temp_pass);
$studentProfile->setUserId($id);
$studentProfile->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/parent/addparent/'.$studentProfile->getUserId().'"/>';
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
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);
$parent->loadByStudentId($_GET['uid']);
$studentProfile->loadByUserId($_GET['uid']);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/confirmaddstudent.php');
}
else if($student->checkStudent())
{
$role=$student->getacctType();
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$student_id=$student->getID();
$parent=new StudentParent($objPDO);
$parent->loadByStudentId($student_id);
$studentProfile->loadByUserId($student_id);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/confirmaddstudent.php');

}
else
{
header('Location:http://localhost/cloud');
}

}

protected function edit()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/edit_student.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

public function validateconfirm()
{
$required=array("admission_number"=>"Admission Number",
			"admission_date"=>"Admission Date",
			"name"=>"Name",
			"class_level"=>"Class",
			"date_of_birth"=>"Date of Birth",
			"gender"=>"Gender",
			"mobile"=>"Mobile",
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

if(!is_numeric($_POST['mobile']) || !is_numeric($_POST['parent_mobile']))
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);

if($_POST['category']=='select')
unset($_POST['category']);
if($_POST['blood_group']=='select')
unset($_POST['blood_group']);
$parent->loadByStudentId($_GET['uid']);
$studentProfile->setByArray($_POST);
$parent->setByArray($_POST);
$studentProfile->loadByUserId($_GET['uid']);
$studentProfile->save();
$parent->save();

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/studentprofile/view/'.$studentProfile->getUserId().'"/>';
}

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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);
$parent->loadByStudentId($_GET['uid']);
$studentProfile->loadByUserId($_GET['uid']);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/viewstudent.php');
}
else if($student->checkStudent())
{
$role=$student->getacctType();
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);
$student_id=$student->getID();
$parent->loadByStudentId($student_id);
$studentProfile->loadByUserId($student_id);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/viewstudent.php');
}
else
{
header('Location:http://localhost/cloud');
}
}


protected function search()
{

GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher()==true)
{
if($user->checkAdmin())
{
$role='admin';
}
else
{
$role='teacher';
}
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$parent=new StudentParent($objPDO);
$spec=NULL;
if(isset($_GET['uid']))
{
$spec=$_GET['uid'];
}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/search_student.php');
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
$pdf->Write(25,'Enrollment Form');
$pdf->Image($_SERVER['DOCUMENT_ROOT'].'/cloud/images/school_logo.jpg', 500, 35, 50,50, 'JPG');
// Reset the font
// Reset font, color, and coordinates
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->SetLeftMargin($x+50);
$pdf->setXY($x+50,90);
GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$record=new StudentProfile($objPDO);
$record->loadByUserId($_GET['uid']);
// Write out a long text blurb.
//$array=$record->getAsArray();
//$x=0;

/* TEMPLATE 1 DESIGN*/
$pdf->SetFont('Arial','',8);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Admission Number (reference) : '.$record->getAdmissionNumber(),0,1,'L',true);

$pdf->SetFont('Arial','',12);
$pdf->setFillColor(50,50,50);
$pdf->setTextColor(255,255,255);
$pdf->cell(450,20,'Student Details',0,1,'C',true);

$pdf->setTextColor(0,0,0);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Student Name',0,0,'C',true);
$pdf->cell(250,20,$record->getName(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Roll Number *',0,0,'C',true);
$pdf->cell(250,20,$record->getRollNo(),0,1,'C',true);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Class',0,0,'C',true);
$pdf->cell(250,20,$record->getClassLevel(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Date Of Birth',0,0,'C',true);
$pdf->cell(250,20,$record->getDateOfBirth(),0,1,'C',true);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Gender',0,0,'C',true);
$pdf->cell(250,20,ucfirst($record->getGender()),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Blood Group',0,0,'C',true);
$pdf->cell(250,20,$record->getBloodGroup(),0,1,'C',true);

$pdf->setFillColor(221,221,221);
$pdf->cell(200,20,'Category',0,0,'C',true);
$pdf->cell(250,20,$record->getCategory(),0,1,'C',true);

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
$pdf->cell(200,20,'Roll Number *',0,0,'C',true);
$pdf->cell(250,20,$record->getRollNo(),0,1,'C',true);
$pdf->setFillColor(255,255,255);
$pdf->cell(200,20,'Temporary Password **',0,0,'C',true);
$pdf->cell(250,20,$record->getTempPass(),0,1,'C',true);

/* TEMPLATE 1 DESIGN END*/

$pdf->SetFont('Arial','',10);
$pdf->SetXY($x+100,620);
$pdf->write(15,'Student\'s Signature');

$pdf->SetXY($x+350,620);
$pdf->write(15,'Parent\'s Signature');

$pdf->SetXY($x+230,680);
$pdf->write(15,'Admin\'s Signature');

$pdf->SetFont('Arial','',8);
$pdf->SetXY($x+20,710);
$pdf->write(15,'* Roll Number may be Temporary , ** Please Change the Password for Security Reasons');

$pdf->SetXY($x+20,720);
$pdf->write(15,'This is a Computer Generated Form. If any Discrepancy Contact Admin : eduCloud Reference Number '.$user->getuserId());

// Close the document and save to the filesystem with the name simple.pdf
$pdf->Output('generated_files/enroll'.$record->getUserId().'.pdf','F');
header('Location:http://localhost/cloud/generated_files/enroll'.$record->getUserId().'.pdf');

}


protected function searchresult()
{

GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
$search=$_POST['search_input'];
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
$spec=NULL;
if(isset($_GET['uid']))
{
$spec=$_GET['uid'];
}
else if($search!='' && $search[0]=='#')
{
$search=substr($search,1);
$spec='roll';
}
else if($search!='' && $search[0]=='@')
{
$search=substr($search,1);
$spec='name';
}
else if($search!='' && $search[0]=='^')
{
$search=substr($search,1);
$spec='admission';
}
else if($search!='' && $search[0]=='*')
{
$search=substr($search,1);
$spec='class';
}
if($search!='' && $spec==NULL && ($user->checkAdmin()||$student->checkTeacher()) )
{
$roll_match=$studentProfile->SearchByRollNo($search,1);
$admission_match=$studentProfile->SearchByAdmissionNumber($search,1);
$name_match=$studentProfile->SearchByName($search,1);
$class_match=$studentProfile->SearchByClass($search,1);

echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of roll no search
$i=0;
echo '<div class="roll_search">';
for($i=0;$i<count($roll_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Roll Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($roll_match[$i]['roll_no'],$search);
$end=$start+strlen($search)-1;
$block=$roll_match[$i]['roll_no'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$roll_match[$i]['admission_number'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$roll_match[$i]['name'].'</td>';
echo '<td>'.$roll_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$roll_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search

//start of admission no search
$i=0;
echo '<div class="admission_search">';
for($i=0;$i<count($admission_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Admission Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($admission_match[$i]['admission_number'],$search);
$end=$start+strlen($search)-1;
$block=$admission_match[$i]['admission_number'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$highlighted.'</td>';
echo '<td>'.$admission_match[$i]['roll_no'].'</td>';
echo '<td>'.$admission_match[$i]['name'].'</td>';
echo '<td>'.$admission_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$admission_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of admission no search


//start of name search
$i=0;
echo '<div class="name_search">';
for($i=0;$i<count($name_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Student Name Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
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


echo '<td>'.$name_match[$i]['admission_number'].'</td>';
echo '<td>'.$name_match[$i]['roll_no'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$name_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$name_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of name search

//start of class search
$i=0;
echo '<div class="class_search">';
for($i=0;$i<count($class_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Class Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($class_match[$i]['class_level'],$search);
$end=$start+strlen($search)-1;
$block=$class_match[$i]['class_level'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$class_match[$i]['admission_number'].'</td>';
echo '<td>'.$class_match[$i]['roll_no'].'</td>';
echo '<td>'.$class_match[$i]['name'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$class_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search


}
else if($spec=='roll' && $search!='')
{
$roll_match=$studentProfile->SearchByRollNo($search);
echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of roll no search
$i=0;
echo '<div class="roll_search">';
for($i=0;$i<count($roll_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Roll Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($roll_match[$i]['roll_no'],$search);
$end=$start+strlen($search)-1;
$block=$roll_match[$i]['roll_no'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$roll_match[$i]['admission_number'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$roll_match[$i]['name'].'</td>';
echo '<td>'.$roll_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$roll_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search
}
else if($search!="" && $spec=='name')
{
$name_match=$studentProfile->SearchByName($search);
echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';
//start of name search
$i=0;
echo '<div class="name_search">';
for($i=0;$i<count($name_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Student Name Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
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


echo '<td>'.$name_match[$i]['admission_number'].'</td>';
echo '<td>'.$name_match[$i]['roll_no'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$name_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$name_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of name search
}
else if($search!="" && $spec=='admission')
{
$admission_match=$studentProfile->SearchByAdmissionNumber($search);
echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';
//start of admission no search
$i=0;
echo '<div class="admission_search">';
for($i=0;$i<count($admission_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Admission Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($admission_match[$i]['admission_number'],$search);
$end=$start+strlen($search)-1;
$block=$admission_match[$i]['admission_number'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$highlighted.'</td>';
echo '<td>'.$admission_match[$i]['roll_no'].'</td>';
echo '<td>'.$admission_match[$i]['name'].'</td>';
echo '<td>'.$admission_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$admission_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of admission no search
}
else if($search!="" && $spec=='class')
{
$class_match=$studentProfile->SearchByClass($search);
echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of class search
$i=0;
echo '<div class="class_search">';
for($i=0;$i<count($class_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Class Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($class_match[$i]['class_level'],$search);
$end=$start+strlen($search)-1;
$block=$class_match[$i]['class_level'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$class_match[$i]['admission_number'].'</td>';
echo '<td>'.$class_match[$i]['roll_no'].'</td>';
echo '<td>'.$class_match[$i]['name'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/view/'.$class_match[$i]['user_id'].'">View Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of class search
}

}


protected function searchresultedit()
{

GLOBAL $user;
GLOBAL $objPDO;
$search=$_POST['search_input'];
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/parent_class.php');
$studentProfile=new StudentProfile($objPDO);
if($search!='')
{
$roll_match=$studentProfile->SearchByRollNo($search);
$admission_match=$studentProfile->SearchByAdmissionNumber($search);
$name_match=$studentProfile->SearchByName($search);
$class_match=$studentProfile->SearchByClass($search);

echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of roll no search
$i=0;
echo '<div class="roll_search">';
for($i=0;$i<count($roll_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Roll Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($roll_match[$i]['roll_no'],$search);
$end=$start+strlen($search)-1;
$block=$roll_match[$i]['roll_no'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$roll_match[$i]['admission_number'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$roll_match[$i]['name'].'</td>';
echo '<td>'.$roll_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/confirm/'.$roll_match[$i]['user_id'].'">Edit Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search

//start of admission no search
$i=0;
echo '<div class="admission_search">';
for($i=0;$i<count($admission_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Admission Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($admission_match[$i]['admission_number'],$search);
$end=$start+strlen($search)-1;
$block=$admission_match[$i]['admission_number'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$highlighted.'</td>';
echo '<td>'.$admission_match[$i]['roll_no'].'</td>';
echo '<td>'.$admission_match[$i]['name'].'</td>';
echo '<td>'.$admission_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/confirm/'.$admission_match[$i]['user_id'].'">Edit Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of admission no search


//start of name search
$i=0;
echo '<div class="name_search">';
for($i=0;$i<count($name_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Student Name Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
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


echo '<td>'.$name_match[$i]['admission_number'].'</td>';
echo '<td>'.$name_match[$i]['roll_no'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$name_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/confirm/'.$name_match[$i]['user_id'].'">Edit Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of name search

//start of class search
$i=0;
echo '<div class="class_search">';
for($i=0;$i<count($class_match);$i++)
{
if($i==0)
{
echo '<div class="search_heading">Class Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Admission Number</td><td>Roll Number</td><td>Name</td><td>Class</td><td>View</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($class_match[$i]['class_level'],$search);
$end=$start+strlen($search)-1;
$block=$class_match[$i]['class_level'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$class_match[$i]['admission_number'].'</td>';
echo '<td>'.$class_match[$i]['roll_no'].'</td>';
echo '<td>'.$class_match[$i]['name'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/confirm/'.$class_match[$i]['user_id'].'">Edit Profile</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search


}

}


protected function stulist()
{
GLOBAL $objPDO;
$sec=$_GET['uid'];
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$section=new Section($objPDO,$sec);
$class=$section->getClass();
$stu=new StudentProfile($objPDO);

$result=$stu->getByClass($class);
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/view/stu_sec_list_view.php');
}

protected function ajaxsearch()
{
GLOBAL $objPDO;
$search=NULL;
if(isset($_GET['uid']))
{
$search=$_GET['uid'];
}
if($search==NULL)
{
return false;
}
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$stu=new StudentProfile($objPDO);
$res1=array();
$res2=array();
$res1=$stu->searchByRollNo($search);
$res2=$stu->searchByName($search);
foreach($res1 as $key=>$value)
{
echo '<div class="ajax_search_elem" id="<'.$value['email'].'>">'.$value['roll_no'].'</div>';
}
foreach($res2 as $key=>$value)
{
echo '<div class="ajax_search_elem" id="<'.$value['email'].'>">'.$value['name'].'</div>';
}

}
	 




}


?>