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
$('#menu').css('height',$('.content_wrapper').innerHeight()+100);
});

$('document').ready(function(){
$('#date').live('change',function(){
$('#employee_mark').load('http://localhost/cloud/attendance/employeemarkview/'+$('#date').attr('value'));
});
});

$('document').ready(function(){
$('#employee_mark_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').show();}
}
);
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
$highlight='attendance';
include('admin_student_menu.php');

?>

<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/attendance.png">
<div class="content_description">Employee Attendance</div>
</div>

<div class="employee_att_mark">
<form id="employee_mark_form" class="employee_mark" action="http://localhost/cloud/attendance/employeemark" method="POST">
<table class="employee_att_mark">
<tr>
<td><?php Utility::label('date','Date','Required'); ?></td>
<td><?php Utility::datePicker('date','date'); ?></td>
</tr>
</table>

<div id="employee_mark" class="employee_mark">
</div>

<div style="width:100px;margin:0px auto;text-align:center">
<?php
Utility::submitButton('submit','submit','Submit');
?>
</div>

<div style="width:80%;margin:50px auto;text-align:center;"><div class="error" id="error"></div>
</div>

</div>

</form>

</div>

</div>

</div>

<?php
include('footer.php');
?>
</body>

</html>