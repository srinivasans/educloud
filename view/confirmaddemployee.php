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
$('#form_confirm_add_employee').ajaxForm(
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
$highlight="manage_employee";
include('admin_employee_menu.php');
}
else
{
$highlight="manage_employee";
include('employee_menu.php');
}
?>


<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/manage_employee.png">
<div class="content_description">Confirm Employee</div>
</div>

<div class="confirm_add_employee_form">
<form name="confirm_add_employee" action="http://localhost/cloud/teacher/validateconfirm/<?php echo $eid;?>" method="POST" id="form_confirm_add_employee" >

<!-- Reference Details -->
<div class="table_heading">Reference Details</div>

<table class="add_employee_form">
<tr>
<td class="label">
<?php
Utility::label("teacher_id","Employee Id","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getTeacherId(),"teacher_id","teacher_id","Employee Id");
?>
</td>
<td class="label">
<?php
Utility::label("datepicker","Join Date","required");
?>
</td>
<td class="form_input">
<?php
Utility::datePickerEditable($teacherProfile->getAdmissionDate(),"admission_date","admission_date");
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
Utility::inputTextEditable($teacherProfile->getName(),"name","name","Name");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("qualification","Qualification");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getQualification(),"qualification","qualification","Qualification");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("subject_id","Subject","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownListEditable($teacherProfile->getSubjectId(),"subject_id","subject_id","subject");
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
Utility::datePickerEditable($teacherProfile->getDateOfBirth(),"date_of_birth","date_of_birth");
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
Utility::radioButtonEditable($teacherProfile->getGender(),"gender","gender","gender");
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
Utility::dropDownListEditable($teacherProfile->getBloodGroup(),"blood_group","blood_group","blood_group");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("experience_info","Experience Info");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextAreaEditable($teacherProfile->getExperienceInfo(),"experience_info","experience_info","Experience Info");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("experience_time","Experience Time");
?>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getExperienceTime(),"experience_time","experience_time","Experience Time");
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
Utility::inputTextEditable($teacherProfile->getCorrespondenceAddressLine1(),"correspondence_address_line_1","correspondence_address_line_1","Line 1");
?>
</td>
</tr>

<tr>
<td>
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getCorrespondenceAddressLine2(),"correspondence_address_line_2","correspondence_address_line_2","Line 2");
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
Utility::inputTextEditable($teacherProfile->getCorrespondenceCity(),"correspondence_city","correspondence_city","City");
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
Utility::inputTextEditable($teacherProfile->getCorrespondenceState(),"correspondence_state","correspondence_state","State");
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
Utility::inputTextEditable($teacherProfile->getCorrespondencePincode(),"correspondence_pincode","correspondence_pincode","Pincode");
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
Utility::checkBox("same_as_above","same_as_above","same_as_above");
?>
</td>
</tr>

<tr>
<td class="label">
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getPermanentAddressLine1(),"permanent_address_line_1","permanent_address_line_1","Line 1");
?>
</td>
</tr>

<tr>
<td class="label">
</td>
<td class="form_input">
<?php
Utility::inputTextEditable($teacherProfile->getPermanentAddressLine2(),"permanent_address_line_2","permanent_address_line_2","Line 2");
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
Utility::inputTextEditable($teacherProfile->getPermanentCity(),"permanent_city","permanent_city","City");
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
Utility::inputTextEditable($teacherProfile->getPermanentState(),"permanent_state","permanent_state","State");
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
Utility::inputTextEditable($teacherProfile->getPermanentPincode(),"permanent_pincode","permanent_pincode","Pincode");
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
Utility::inputTextEditable($teacherProfile->getCountry(),"country","country","Country");
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
Utility::inputTextEditable($teacherProfile->getPhone(),"phone","phone","Phone");
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
Utility::inputTextEditable($teacherProfile->getMobile(),"mobile","mobile","Mobile");
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
Utility::inputEmailEditable($teacherProfile->getEmail(),"email","email","E-mail");
?>
</td>
</tr>

</table>
<!--End of Contact Details -->

<div class="submit_button">
<?php
Utility::submitButton("confirm_employee","confirm_employee","Confirm Appointment");
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