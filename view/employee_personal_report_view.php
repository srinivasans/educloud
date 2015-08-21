<?php
include_once('controller/utility_class.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

<script type="text/javascript">
$('document').ready(function(){
$('#teacher').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/attendance/employeelist/"+$('#teacher').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#employee_report_view').html(htmlText);
} 
});

});

$('#employee_report_view').load('http://localhost/cloud/attendance/employeelist');
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
$highlight='attendance';
include('employee_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/employee_search_attendance.png">
<div class="content_description">Employee Attendance Report</div>
</div>

<div class="employee_report">
<?php
Utility::label('employee','Employee Name');
echo $employee_name;
?>
<div id="employee_report_view" class="employee_report_view"></div>
</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>