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
$('#section').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/timetable/sectionview/"+$('#section').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#time_table_view').html(htmlText);
} 
});
//$('#time_table_view').load('http://localhost/cloud/timetable/newtime/'+$('#section').attr('value'));

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
$highlight='attendance';
include('employee_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/attendance.png">
<div class="content_description">Attendance</div>
</div>


<div class="timetable_menu">
<a href="http://localhost/cloud/attendance/create">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/mark_section_attendance.png">
Mark Section Attendance
</div>
</a>
<a href="http://localhost/cloud/attendance/view">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/section_attendance_view.png">
Section Attendance View
</div>
</a>
<a href="http://localhost/cloud/attendance/stuview">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/student_attendance_view.png">
Student Attendance View
</div>
</a>
<a href="http://localhost/cloud/attendance/sectionreport">
<div class="inner_menu" id="section_report">
<img class="inner_menu_img" src="http://localhost/cloud/images/section_report.png">
Section Wise Report
</div>
</a>

<a href="http://localhost/cloud/attendance/employeereport">
<div class="inner_menu" id="employee_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/employee_search_attendance.png">
Personal Report
</div>
</a>

</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>