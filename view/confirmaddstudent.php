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
$('#form_add_student').ajaxForm(
{
target:'#error',
success:function(){$('#error').fadeOut();$('#error').fadeIn();}
});
});
</script>


<script type="text/javascript">
$('document').ready(function(){
$('#menu').css('height',$('.content_wrapper').innerHeight()+100);
});
</script>

<script type="text/javascript">
$('document').ready(function(){
$('#same_as_above').change(function(){
if($('#same_as_above').attr('checked')=="checked")
{
$('#permanent_address_line_1').attr('value',$('#correspondence_address_line_1').attr('value'));
$('#permanent_address_line_2').attr('value',$('#correspondence_address_line_2').attr('value'));
$('#permanent_city').attr('value',$('#correspondence_city').attr('value'));
$('#permanent_state').attr('value',$('#correspondence_state').attr('value'));
$('#permanent_pincode').attr('value',$('#correspondence_pincode').attr('value'));
}
else
{
$('#permanent_address_line_1').attr('value',"");
$('#permanent_address_line_2').attr('value',"");
$('#permanent_city').attr('value',"");
$('#permanent_state').attr('value',"");
$('#permanent_pincode').attr('value',"");
}

});


$('.text').change(function(){
if($('#same_as_above').attr('checked')=="checked")
{
$('#permanent_address_line_1').attr('value',$('#correspondence_address_line_1').attr('value'));
$('#permanent_address_line_2').attr('value',$('#correspondence_address_line_2').attr('value'));
$('#permanent_city').attr('value',$('#correspondence_city').attr('value'));
$('#permanent_state').attr('value',$('#correspondence_state').attr('value'));
$('#permanent_pincode').attr('value',$('#correspondence_pincode').attr('value'));
}
else
{
$('#permanent_address_line_1').attr('value',"");
$('#permanent_address_line_2').attr('value',"");
$('#permanent_city').attr('value',"");
$('#permanent_state').attr('value',"");
$('#permanent_pincode').attr('value',"");
}

});
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


<div class="content_heading" style="width:200px;">
<img class="content_heading_image" src="http://localhost/cloud/images/confirm_student.png">
<div class="content_description" >Confirm Details</div>
</div>

<div class="add_student_form">
<form name="add_student" action="http://localhost/cloud/studentprofile/validateconfirm/<?php echo $_GET['uid'];?>" method="POST" id="form_add_student" >

<!-- Reference Details -->
<div class="table_heading">Reference Details</div>

<table class="add_student_form">
<tr>
<td class="label">
<?php
Utility::label("admission_number","Admission No","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getAdmissionNumber(),"admission_number","admission_number","Admission No");
?>
</td>
<td class="label">
<?php
Utility::label("datepicker","Admission Date","required");
?>
</td>
<td class="form_input">
<?php
Utility::datePickerEditable($studentProfile->getAdmissionDate(),"admission_date","admission_date");
?>
</td>
</tr>
</table>
<!--End of Reference Details -->

<!--Personal Info-->
<div class="table_heading" >Personal Info.</div>
<table class="add_student_form">

<tr>
<td class="label">
<?php
Utility::label("name","Name","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getName(),"name","name","Name");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("roll_no","Roll Number");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getRollNo(),"roll_no","roll_no","Roll Number");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("class_level","Class","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownListEditable($studentProfile->getClassLevel(),"class_level","class_level","numeric_level");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("date_of_birth","Date of Birth","required");
?>
</td>
<td class="form_input">
<?php
Utility::datePickerEditable($studentProfile->getDateOfBirth(),"date_of_birth","date_of_birth");
?>
</tr>

<tr>
<td class="label">
<?php
Utility::label("gender","Gender","required");
?>
</td>
<td class="form_input">
<?php
Utility::radioButtonEditable($studentProfile->getGender(),"gender","gender","gender");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("blood_group","Blood Group");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownListEditable($studentProfile->getBloodGroup(),"blood_group","blood_group","blood_group");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("religion","Religion");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getReligion(),"religion","religion","Religion");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("category","Category");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownListEditable($studentProfile->getCategory(),"category","category","category");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("mother_tongue","Mother Tongue");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getMotherTongue(),"mother_tongue","mother_tongue","Mother Tongue");
?>
</td>
</tr>


</table>

<!--End of Personal Info-->
<!--Contact Details -->
<div class="table_heading">Contact Details</div>
<table class="add_student_form">

<tr>
<td class="label">
<?php
Utility::label("correspondence_address_line_1","Correspondence Address");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCorrespondenceAddressLine1(),"correspondence_address_line_1","correspondence_address_line_1","Line 1");
?>
</td>
</tr>

<tr>
<td>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCorrespondenceAddressLine2(),"correspondence_address_line_2","correspondence_address_line_2","Line 2");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("correspondence_city","City");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCorrespondenceCity(),"correspondence_city","correspondence_city","City");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("correspondence_state","State");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCorrespondenceState(),"correspondence_state","correspondence_state","State");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("correspondence_pincode","Pincode");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCorrespondencePincode(),"correspondence_pincode","correspondence_pincode","Pincode");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("permanent_address","Permanent Address");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPermanentAddressLine1(),"permanent_address_line_1","permanent_address_line_1","Line 1");
?>
</td>
</tr>

<tr>
<td class="label">
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPermanentAddressLine2(),"permanent_address_line_2","permanent_address_line_2","Line 2");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("permanent_city","Permanent City");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPermanentCity(),"permanent_city","permanent_city","City");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("permanent_state","Permanent State");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPermanentState(),"permanent_state","permanent_state","State");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("permanent_pincode","Pincode");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPermanentPincode(),"permanent_pincode","permanent_pincode","Pincode");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("country","Country");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getCountry(),"country","country","Country");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("phone","Phone");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getPhone(),"phone","phone","Phone");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("mobile","Mobile","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($studentProfile->getMobile(),"mobile","mobile","Mobile");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("email","E-mail");
?>
</td>
<td class="form_input">
<?php
Utility::inputEmailEditable($studentProfile->getEmail(),"email","email","E-mail");
?>
</td>
</tr>

</table>
<!--End of Contact Details -->
<!--Parent Personal Info-->
<div class="table_heading" >Parent Details</div>
<table class="add_parent_form">

<tr>
<td class="label">
<?php
Utility::label("father_name","Father's Name");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getFatherName(),"father_name","father_name","Father's Name");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("father_qualification","Father's Qualification");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getFatherQualification(),"father_qualification","father_qualification","Father's Qualification");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("father_occupation","Father's Occupation");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getFatherOccupation(),"father_occupation","father_occupation","Father's Occupation");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("mother_name","Mother's Name");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getMotherName(),"mother_name","mother_name","Mother's Name");
?>
</tr>

<tr>
<td class="label">
<?php
Utility::label("mother_qualification","Mother's Qualification");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getMotherQualification(),"mother_qualification","mother_qualification","Mother's Qualification");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("mother_occupation","Mother's Occupation");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getMotherOccupation(),"mother_occupation","mother_occupation","Mother's Occupation");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("annual_income","Annual Parental Income");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getAnnualIncome(),"annual_income","annual_income","Annual Parental Income");
?>
</td>
</tr>


</table>

<!--End of Parent Personal Info-->
<!--Parent Contact Details -->
<div class="table_heading">Parent Contact Details</div>
<table class="add_parent_form">

<tr>
<td class="label">
<?php
Utility::label("parent_email","E-mail");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getEmail(),"parent_email","parent_email","E-mail");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("parent_phone","Phone");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getPhone(),"parent_phone","parent_phone","Phone");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("parent_mobile","Emergency Contact Number");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($parent->getMobile(),"parent_mobile","parent_mobile","Mobile");
?>
</td>
</tr>


</table>
<!--End of Parent Contact Details -->


<div class="submit_button">
<?php
Utility::submitButton("confirm_student","confirm_student","Confirm");
?>
</div>

<div class="error" id="error"></div>

</form>

</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>