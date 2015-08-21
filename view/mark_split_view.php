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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

<script type="text/javascript">
$('document').ready(function(){
$('#mark_split_form').ajaxForm({
target:'#error',
success:function(){$('#error').show();}
});
});

$('document').ready(function(){
var val=$('#add_another_btn').attr('value');
val++;
$('add_another_btn').attr('value',val);
$('#add_another').click(function(){
$('#subject_tab').append('<tr><td><?php eval("Utility::inputText('split[]','split[]','Weightage (Marks Split)');");?></td><td><?php eval("Utility::inputText('split_name[]','split_name[]','Split Name');");?></td></tr>');
});
});
</script>

</head>

<body>
<?php
include('header.php');
?>

<div class="content_wrapper">

<div class="student_menu">

<?php
$highlight='examination';
include('admin_student_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/examination.png">
<div class="content_description">Examination Timetable</div>
</div>

<div class="exam_timetable_view">
<form id="mark_split_form" action="http://localhost/cloud/examination/savesplitup" method="POST">
<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable" id="subject_tab">
<tr style="background:#ABCDEF">
<td>
<?php
Utility::label('exam_id','Select Examination');
?>
</td>
<td>
<?php
Utility::dropDownList('exam_id','exam_id','exams');
?>
</td>
<tr style="background:#ABCDEF">
<td>
<?php
Utility::label('section','Select Section');
?>
</td>
<td>
<?php
Utility::dropDownList('section','section','section');
?>
</td>
<tr style="background:#ABCDEF">
<td>
<?php
Utility::label('subject','Select Subject');
?>
</td>
<td>
<?php
Utility::dropDownList('subject','subject','subject');
?>
</td>
<tr>
<td class="label" >
<?php
Utility::inputText("split[]","split[]","Weightage (Marks Split)");
?>
</td>
<td class="form_input" >
<?php
Utility::inputText('split_name[]','split_name[]','Split Name');
?>
</td>
</tr>
</table>
<div class="add_another_btn" value="2" id="add_another_btn">
<?php
Utility::addAnother("add_another","+ Add Another");
?>
</div>

<div style="padding:5px">
<?php Utility::submitButton('save_splitup','save_splitup','Save Splitup'); ?></td>
</div>
</form>


<div class="error" id="error"></div>


</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>