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
$('#exam_marking_form').ajaxForm({
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
<div class="content_description">Examination</div>
</div>

<div class="exam_marking">
<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable">
<tr style="background:#ABCDEF">
<td>
Examination
</td>
<td>
<?php
echo $exam_id;
?>
</td>
</tr>
<tr style="background:#ABCDEF">
<td>
Section
</td>
<td id="section_list">
<?php
echo $section_id;
?>
</td>
</tr>
<tr style="background:#ABCDEF">
<td>
Subject
</td>
<td id="subject_list">
<?php
echo $subject_id;
?>
</td>
</tr>
</table>
<form id="exam_marking_form" action="http://localhost/cloud/examination/savemarks" method="POST">
<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable">
<tr style="background:rgba(0,0,0,0.2)">
<td>Roll Number</td>
<td>Name</td>
<?php
foreach($split_ups as $k=>$v)
{
echo '<td>';
echo $v['split_up_name'].'('.$v['split_up_value'].')';
echo '</td>';
}
echo '<td>';
echo 'Total Marks('.$total_marks.')';
echo '</td>';
?>
<td>Grade</td>
<td>Report</td>
</tr>
<?php
foreach($students as $key=>$value)
{
echo '<tr>';
echo '<td>';
echo $roll_numbers[$key];
echo '</td>';
echo '<td>';
echo $value;
echo '</td>';
foreach($split_ups as $k=>$v)
{
if(array_key_exists($key,$mark_list))
{
echo '<td>';
echo $mark_list[$key]['split'][$v['id']];
echo '</td>';
}
else
{
echo '<td>';
echo 'N/A';
echo '</td>';
}
}

if(array_key_exists($key,$mark_list))
{
echo '<td>';
echo $mark_list[$key]['total_marks'];
echo '</td>';
echo '<td>';
echo $mark_list[$key]['grade'];
echo '</td>';
}
else
{
echo '<td>';
echo 'N/A';
echo '</td>';
echo '<td>';
echo 'N/A';
echo '</td>';
}
if(array_key_exists($key,$mark_list))
{
echo '<td><a href="http://localhost/cloud/examination/studentreport/'.$mark_list[$key]['id'].'">View</a></td>';
}
else
{
echo '<td></td>';
}
echo '</tr>';
}
?>
</table>

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