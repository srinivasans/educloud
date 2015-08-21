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
$('#exam_id').live('change',function(){
$('#section_list').load('http://localhost/cloud/examination/getsectionlist/'+$('#exam_id').attr('value'));
});
});

$('document').ready(function(){
$('#section').live('change',function(){
$('#subject_list').load('http://localhost/cloud/examination/getsubjectlist/'+$('#exam_id').attr('value')+'/'+$('#section').attr('value'));
$('#submit_btn').show();
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
if($role=='admin')
{
include('admin_student_menu.php');
}
else
{
include('employee_menu.php');
}
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/examination.png">
<div class="content_description">Examination Timetable</div>
</div>

<div class="exam_marking">
<form id="exam_timetable_form" action="http://localhost/cloud/examination/markinglist" method="POST">
<table cellspacing="0" cellpadding="5" border="1" class="exam_marking">
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
</tr>
<tr style="background:#ABCDEF">
<td>
<?php
Utility::label('section','Select Section');
?>
</td>
<td id="section_list">

</td>
</tr>
<tr style="background:#ABCDEF">
<td>
<?php
Utility::label('subject','Select Subject');
?>
</td>
<td id="subject_list">

</td>
</tr>
</table>

<div id="submit_btn" style="display:none;padding:5px">
<?php Utility::submitButton('allot_marks','allot_marks','Allot Marks'); ?></td>
</div>
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