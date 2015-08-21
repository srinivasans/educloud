<?php
include_once('controller/utility_class.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


<script type="text/javascript">
$('document').ready(function(){
$('#menu').css('height',$('.content_wrapper').innerHeight()+100);
});
</script>



</head>

<body>
<?php
include('header.php');
?>

<div class="content_wrapper">

<div class="student_menu" id="student_menu">

<?php
if($role=='admin')
{
$highlight='search_student';
include('admin_student_menu.php');
}
else if($role=='teacher')
{
$highlight='search_student';
include('employee_menu.php');
}
else if($role=='student')
{
$highlight='student_profile';
include('student_menu.php');
}
?>


<div class="content_heading" style="width:400px;">
<img class="content_heading_image" src="http://localhost/cloud/images/confirm_student.png">
<div class="content_description" >Student Details</div>
</div>

<div class="student_details">
<table class="student_details">

<tr>
<td class="heading student_details" colspan="2">
Student Info.
</td>
</tr>

<tr>
<td class="student_details">
Name :
</td>
<td class="student_details">
<?php
echo $studentProfile->getName();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Admission Number :
</td>
<td class="student_details">
<?php
echo $studentProfile->getAdmissionNumber();
?>
</td>
</tr>

<tr>
<td class="student_details">
Roll Number :
</td>
<td class="student_details">
<?php
echo $studentProfile->getRollNo();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Class :
</td>
<td class="student_details">
<?php
echo $studentProfile->getClassLevel();
?>
</td>
</tr>

<tr>
<td class="student_details">
Date Of Birth :
</td>
<td class="student_details">
<?php
echo $studentProfile->getDateOfBirth();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Gender :
</td>
<td class="student_details">
<?php
echo ucfirst($studentProfile->getGender());
?>
</td>
</tr>


<tr>
<td class="student_details">
Blood Group :
</td>
<td class="student_details">
<?php
echo ucfirst($studentProfile->getBloodGroup());
?>
</td>
</tr>

<tr  class="highlight">
<td class="student_details">
Religion :
</td>
<td class="student_details">
<?php
echo ucfirst($studentProfile->getReligion());
?>
</td>
</tr>

<tr>
<td class="student_details">
Category :
</td>
<td class="student_details">
<?php
echo ucfirst($studentProfile->getCategory());
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Mother Tongue :
</td>
<td class="student_details">
<?php
echo ucfirst($studentProfile->getMotherTongue());
?>
</td>
</tr>

</table>

<table class="student_details">

<tr>
<td class="heading student_details" colspan="2">
Contact Details
</td>
</tr>

<tr>
<td class="student_details">
Correspondence Address :
</td>
<td class="student_details">
<?php
echo $studentProfile->getCorrespondenceAddressLine1();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
</td>
<td class="student_details">
<?php
echo $studentProfile->getCorrespondenceAddressLine2();
?>
</td>
</tr>

<tr>
<td class="student_details">
City :
</td>
<td class="student_details">
<?php
echo $studentProfile->getCorrespondenceCity();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
State :
</td>
<td class="student_details">
<?php
echo $studentProfile->getCorrespondenceState();
?>
</td>
</tr>

<tr>
<td class="student_details">
Pincode :
</td>
<td class="student_details">
<?php
echo $studentProfile->getCorrespondencePincode();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Permanent Address :
</td>
<td class="student_details">
<?php
echo $studentProfile->getPermanentAddressLine1();
?>
</td>
</tr>


<tr>
<td class="student_details">
</td>
<td class="student_details">
<?php
echo $studentProfile->getPermanentAddressLine2();
?>
</td>
</tr>

<tr  class="highlight">
<td class="student_details">
City :
</td>
<td class="student_details">
<?php
echo $studentProfile->getPermanentCity();
?>
</td>
</tr>

<tr>
<td class="student_details">
State :
</td>
<td class="student_details">
<?php
echo $studentProfile->getPermanentState();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Pincode :
</td>
<td class="student_details">
<?php
echo $studentProfile->getPermanentPincode();
?>
</td>
</tr>

<tr>
<td class="student_details">
Phone :
</td>
<td class="student_details">
<?php
echo $studentProfile->getPhone();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Mobile :
</td>
<td class="student_details">
<?php
echo $studentProfile->getMobile();
?>
</td>
</tr>

<tr>
<td class="student_details">
E-mail :
</td>
<td class="student_details">
<?php
echo $studentProfile->getEmail();
?>
</td>
</tr>

</table>

<table class="student_details">

<tr>
<td class="heading student_details" colspan="2">
Parent Details
</td>
</tr>

<tr>
<td class="student_details">
Father's Name :
</td>
<td class="student_details">
<?php
echo $parent->getFatherName();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Father's Qualification :
</td>
<td class="student_details">
<?php
echo $parent->getFatherQualification();
?>
</td>
</tr>

<tr>
<td class="student_details">
Father's Occupation :
</td>
<td class="student_details">
<?php
echo $parent->getFatherOccupation();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Mother's Name :
</td>
<td class="student_details">
<?php
echo $parent->getMotherName();
?>
</td>
</tr>

<tr>
<td class="student_details">
Mother Qualification :
</td>
<td class="student_details">
<?php
echo $parent->getMotherQualification();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Mother's Occupation :
</td>
<td class="student_details">
<?php
echo $parent->getMotherOccupation();
?>
</td>
</tr>


<tr>
<td class="student_details">
Annual Parental Income :
</td>
<td class="student_details">
<?php
echo $parent->getAnnualIncome();
?>
</td>
</tr>


</table>

<table class="student_details">

<tr>
<td class="heading student_details" colspan="2">
Parent Contact Details
</td>
</tr>

<tr>
<td class="student_details">
E-mail :
</td>
<td class="student_details">
<?php
echo $parent->getEmail();
?>
</td>
</tr>

<tr class="highlight">
<td class="student_details">
Phone :
</td>
<td class="student_details">
<?php
echo $parent->getPhone();
?>
</td>
</tr>

<tr>
<td class="student_details">
Emergency Contact Number :
</td>
<td class="student_details">
<?php
echo $parent->getMobile();
?>
</td>
</tr>

</table>

<a href="http://localhost/cloud/studentprofile/confirm/<?php echo $studentProfile->getUserId(); ?>"><button class="yellow_btn">Edit</button></a>
<a href="http://localhost/cloud/studentprofile/makepdf/<?php echo $studentProfile->getUserId(); ?>"><button class="submit_btn">Generate Enrollment Form</button></a>
</div>


</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>