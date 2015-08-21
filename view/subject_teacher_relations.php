<?php
include_once('controller/utility_class.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->

<script type="text/javascript">
$('document').ready(function(){
$('#subject_teacher_relations_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').fadeOut();$('#error').fadeIn();}
});
});

$('document').ready(function(){
$('#section').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/subjectclass/teasubrel/"+$('#section').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$("#teacher_relations").html('');
eval($(htmlText).find('script').text());
$("#teacher_relations").html(htmlText);
} 
});

/*$('#teacher_relations').load("http://localhost/cloud/subjectclass/teasubrel/"+$('#section').attr('value'));*/


});
});
</script>
<?php
Utility::editableSelectScript('fixed');
?>

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

<div class="subject_teacher_relations">
<form id="subject_teacher_relations_form" name="subject_teacher_relations" method="POST" action="http://localhost/cloud/subjectclass/validaterelation">
<table class="subject_teacher_relations_form">
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
</table>
<div id="teacher_relations"></div>
<div style="margin:10px auto;width:2%;text-align:center;">
<?php
Utility::submitButton('submit','submit','Allot');
?>
</div>



<div class="error" style="margin-top:55px;" id="error"/>

</form>
</div>

</div>
</div>
