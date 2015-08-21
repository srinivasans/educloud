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
<img class="content_heading_image" src="http://localhost/cloud/images/miscellaneous.png">
<div class="content_description">Miscellaneous</div>
</div>

<div class="timetable_menu">
<a href="http://localhost/cloud/section/create">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/misc1.png">
Create Section
</div>
</a>
<a href="http://localhost/cloud/miscellaneous/studentsection">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/misc2.png">
Assign Student Section
</div>
</a>
<a href="http://localhost/cloud/subjectclass/addsubject">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/misc3.png">
Assign Subjects
</div>
</a>
<a href="http://localhost/cloud/subjectclass/addteacher">
<div class="inner_menu" id="mark_attendance">
<img class="inner_menu_img" src="http://localhost/cloud/images/misc4.png">
Assign Teacher
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