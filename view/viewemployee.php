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
$highlight='search_employee';
include('admin_employee_menu.php');
?>


<div class="content_heading" style="width:400px;">
<img class="content_heading_image" src="http://localhost/cloud/images/confirm_student.png">
<div class="content_description" >Employee Details</div>
</div>

<div class="employee_details">
<table class="employee_details">

<tr>
<td class="heading employee_details" colspan="2">
Employee Info.
</td>
</tr>

<tr>
<td class="employee_details">
Name :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getName();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
Teacher Id :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getTeacherId();
?>
</td>
</tr>


<tr>
<td class="employee_details">
Subject :
</td>
<td class="employee_details">
<?php
$subject->setID($teacherProfile->getSubjectId());
echo $subject->getName();
?>
</td>
</tr>

<tr  class="highlight">
<td class="employee_details">
Date Of Birth :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getDateOfBirth();
?>
</td>
</tr>

<tr>
<td class="employee_details">
Gender :
</td>
<td class="employee_details">
<?php
echo ucfirst($teacherProfile->getGender());
?>
</td>
</tr>


<tr  class="highlight">
<td class="employee_details">
Blood Group :
</td>
<td class="employee_details">
<?php
echo ucfirst($teacherProfile->getBloodGroup());
?>
</td>
</tr>

<tr >
<td class="employee_details">
Qualification :
</td>
<td class="employee_details">
<?php
echo ucfirst($teacherProfile->getQualification());
?>
</td>
</tr>


<tr class="highlight">
<td class="employee_details">
Experience Info :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getExperienceInfo();
?>
</td>
</tr>

<tr>
<td class="employee_details">
Experience Time :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getExperienceTime();
?>
</td>
</tr>

</table>

<table class="employee_details">

<tr>
<td class="heading employee_details" colspan="2">
Contact Details
</td>
</tr>

<tr>
<td class="employee_details">
Correspondence Address :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getCorrespondenceAddressLine1();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getCorrespondenceAddressLine2();
?>
</td>
</tr>

<tr>
<td class="employee_details">
City :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getCorrespondenceCity();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
State :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getCorrespondenceState();
?>
</td>
</tr>

<tr>
<td class="employee_details">
Pincode :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getCorrespondencePincode();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
Permanent Address :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPermanentAddressLine1();
?>
</td>
</tr>


<tr>
<td class="employee_details">
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPermanentAddressLine2();
?>
</td>
</tr>

<tr  class="highlight">
<td class="employee_details">
City :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPermanentCity();
?>
</td>
</tr>

<tr>
<td class="employee_details">
State :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPermanentState();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
Pincode :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPermanentPincode();
?>
</td>
</tr>

<tr>
<td class="employee_details">
Phone :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getPhone();
?>
</td>
</tr>

<tr class="highlight">
<td class="employee_details">
Mobile :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getMobile();
?>
</td>
</tr>

<tr>
<td class="employee_details">
E-mail :
</td>
<td class="employee_details">
<?php
echo $teacherProfile->getEmail();
?>
</td>
</tr>

</table>

<a href="http://localhost/cloud/teacher/confirm/<?php echo $teacherProfile->getUserId(); ?>"><button class="yellow_btn">Edit</button></a>
<a href="http://localhost/cloud/teacher/makepdf/<?php echo $teacherProfile->getUserId(); ?>"><button class="submit_btn">Generate Appointment Order</button></a>
</div>


</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>