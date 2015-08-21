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
$highlight='time_table';
include('admin_student_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/time_table.png">
<div class="content_description">Time Table</div>
</div>


<div class="timetable_menu">
<a class="inner_menu" href="http://localhost/cloud/timetable/create">
<div class="inner_menu" id="create_timetable">
<img class="inner_menu_img" src="http://localhost/cloud/images/create_timetable.png"/>
Create Timetable
</div>
</a>
<a class="inner_menu" href="http://localhost/cloud/timetable/view">
<div class="inner_menu" id="student_timetable_view">
<img class="inner_menu_img" src="http://localhost/cloud/images/student_timetable_view.png"/>
Section Timetable View
</div>
</a>
<a class="inner_menu" href="http://localhost/cloud/timetable/empview">
<div class="inner_menu" id="teacher_timetable_view">
<img class="inner_menu_img" src="http://localhost/cloud/images/teacher_timetable_view.png"/>
Teacher Timetable View
</div>
</a>

<a class="inner_menu" href="http://localhost/cloud/timetable/settings">
<div class="inner_menu" id="teacher_timetable_view">
<img class="inner_menu_img" src="http://localhost/cloud/images/settings.png"/>
Timetable Settings
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