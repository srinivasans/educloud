<?php
include_once('controller/utility_class.php');
$val=2;
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
$('#subject_relations_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').fadeOut();$('#error').fadeIn();}
});
});

$('document').ready(function(){
var val=$('#add_another_btn').attr('value');
val++;
$('add_another_btn').attr('value',val);
$('#add_another').click(function(){
$('#subject_tab').append('<?php eval("Utility::dropDownList('subject[]','subject[]','subject');");?>');
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
<div class="content_description">Subject-Section-Teacher Relations</div>
</div>

<div class="subject_relations">
<form id="subject_relations_form" name="subject_relations" method="POST" action="http://localhost/cloud/subjectclass/validate">
<table class="subject_relations_form">
<tr>
<td class="label">
<?php
Utility::label("section","Section Code","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownList("section","section","section");
?>
</td>
</tr>
<tr>
<td class="label">
<?php
Utility::label("subject","Subject","required");
?>
</td>
<td class="form_input" id="subject_tab">
<?php
Utility::dropDownList("subject[]","subject[]","subject");
?>
</td>
</tr>
<tr><td>

</td>
<td>
<div class="add_another_btn" value="2" id="add_another_btn">
<?php
Utility::addAnother("add_another","+ Add Another");
?>
</div>
</td>

</tr>
<tr>

<td style="text-align:center">
<?php
Utility::submitButton('submit','submit','Create');
?>
</td>
<td></td>
</tr>
</table>

<div class="error" id="error"/>

</form>
</div>

</div>
</div>
