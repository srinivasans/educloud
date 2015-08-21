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
$('#create_section_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').fadeOut();$('#error').fadeIn();}
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
$highlight="miscellaneous";
include('admin_student_menu.php');
?>



<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/miscellaneous.png"/>
<div class="content_description">Create Section</div>
</div>

<div class="create_section">
<form id="create_section_form" name="create_section" method="POST" action="http://localhost/cloud/section/validate">
<table class="create_section_form">
<tr>
<td class="label">
<?php
Utility::label("class_level","Class/Standard","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownList("class_level","class_level","numeric_level");
?>
</td>
</tr>
<tr>
<td class="label">
<?php
Utility::label("section","Section","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputText("section","section","Section");
?>
</td>
</tr>
<tr>
<td class="label">
<?php
Utility::label("code","Section Code","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputText("code","code","Section Code");
?>
</td>
</tr>
<tr>
<td></td>
<td style="text-align:center">
<?php
Utility::submitButton('submit','submit','Create');
?>
</td>
</tr>
</table>

<div class="error" id="error"/>

</form>
</div>

</div>
</div>
