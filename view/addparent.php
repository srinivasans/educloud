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
$('#form_add_parent').ajaxForm(
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

</head>

<body>
<?php
include('header.php');
?>

<div class="content_wrapper">

<div class="student_menu" id="student_menu">

<?php
$highlight='add_student';
include('admin_student_menu.php');

?>


<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/parent_details.png">
<div class="content_description">Parent Details</div>
</div>

<div class="add_parent_form">
<form name="add_parent" action=<?php echo "http://localhost/cloud/parent/validate/".$_GET['uid']?> method="POST" id="form_add_parent" >

<!-- Reference Details -->
<div class="table_heading">Reference Details</div>

<table class="add_parent_form">
<tr>
<td class="label">
<?php
Utility::label("admission_number","Admission No","required");
?>
</td>
<td class="form_input">
<?php
echo $studentProfile->getAdmissionNumber();
?>
</td>
<td class="label">
<?php
Utility::label("ref_user_id","Reference Identity","required");
?>
</td>
<td class="form_input">
<?php
echo $studentProfile->getUserId();
?>
</td>
</tr>
</table>
<!--End of Reference Details -->

<!--Personal Info-->
<div class="table_heading" >Personal Info.</div>
<table class="add_parent_form">

<tr>
<td class="label">
<?php
Utility::label("father_name","Father's Name");
?>
</td>
<td class="form_input">
<?php
Utility::inputText("father_name","father_name","Father's Name");
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
Utility::inputText("father_qualification","father_qualification","Father's Qualification");
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
Utility::inputText("father_occupation","father_occupation","Father's Occupation");
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
Utility::inputText("mother_name","mother_name","Mother's Name");
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
Utility::inputText("mother_qualification","mother_qualification","Mother's Qualification");
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
Utility::inputText("mother_occupation","mother_occupation","Mother's Occupation");
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
Utility::inputText("annual_income","annual_income","Annual Parental Income");
?>
</td>
</tr>


</table>

<!--End of Personal Info-->
<!--Contact Details -->
<div class="table_heading">Contact Details</div>
<table class="add_parent_form">

<tr>
<td class="label">
<?php
Utility::label("parent_email","E-mail");
?>
</td>
<td class="form_input">
<?php
Utility::inputText("parent_email","parent_email","E-mail");
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
Utility::inputText("parent_phone","parent_phone","Phone");
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
Utility::inputText("parent_mobile","parent_mobile","Mobile");
?>
</td>
</tr>


</table>
<!--End of Contact Details -->

<div class="submit_button">
<?php
Utility::submitButton("add_parent","add_parent","Save");
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