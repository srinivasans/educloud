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
$('#employee_view').load('http://localhost/cloud/attendance/empviewshow/'+$('#date').attr('value'));
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
$highlight='attendance';
include('admin_student_menu.php');

?>

<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/attendance.png">
<div class="content_description">Employee Attendance</div>
</div>

<div class="employee_att_view">

<table class="employee_att_view">
<tr>
<td><?php Utility::label('date','Date','Required'); ?></td>
<td><?php Utility::datePicker('date','date'); ?></td>
</tr>
</table>

<div id="employee_view" class="employee_view">
</div>

</div>


</div>

</div>

</div>

<?php
include('footer.php');
?>
</body>

</html>