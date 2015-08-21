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
$('#exam_timetable_form').ajaxForm({
target:'#error',
success:function(){$('#error').show();}
});
});

$('document').ready(function(){
$('#exam_id').live('change',function(){
$('#exam_timetable').load('http://localhost/cloud/examination/gettimetablecreate/'+$('#exam_id').attr('value'));
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

<div class="exam_timetable">
<form id="exam_timetable_form" action="http://localhost/cloud/examination/savetimetable" method="POST">
<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable">
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
</table>

<div class="exam_timetable" id="exam_timetable">
</div>

<div style="padding:5px">
<?php Utility::submitButton('save_timetable','save_timetable','Save Timetable'); ?></td>
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