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
<div class="content_description">Examination</div>
</div>


<div class="timetable_menu">
<a href="http://localhost/cloud/examination/create">
<div class="inner_menu" id="create_examination">
<img class="inner_menu_img" src="http://localhost/cloud/images/exam_settings.png">
Create Examination
</div>
</a>
<a href="http://localhost/cloud/examination/timetable">
<div class="inner_menu" id="timetable">
<img class="inner_menu_img" src="http://localhost/cloud/images/section_attendance_view.png">
Examination Timetable
</div>
</a>
<a href="http://localhost/cloud/examination/marking">
<div class="inner_menu" id="marking">
<img class="inner_menu_img" src="http://localhost/cloud/images/employee_attendance_view.png">
Allot Examination Marks
</div>
</a>
<a href="http://localhost/cloud/examination/reports">
<div class="inner_menu" id="reports">
<img class="inner_menu_img" src="http://localhost/cloud/images/employee_attendance_view.png">
Examination Reports
</div>
</a>
<a href="http://localhost/cloud/attendance/stuview">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/student_attendance_view.png">
Allot Examination Rooms
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