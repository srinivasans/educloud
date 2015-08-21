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
$highlight='notification';
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
<img class="content_heading_image" src="http://localhost/cloud/images/notification.png">
<div class="content_description">News Room</div>
</div>


<div class="timetable_menu">
<a href="http://localhost/cloud/notice/internal">
<div class="inner_menu" id="internal_notice">
<img class="inner_menu_img" src="http://localhost/cloud/images/internal_notice.png">
Internal Notice Board
</div>
</a>
<a href="http://localhost/cloud/notice/student">
<div class="inner_menu" id="student_notice">
<img class="inner_menu_img" src="http://localhost/cloud/images/student_notice.png">
Student Notice Board
</div>
</a>
<a href="http://localhost/cloud/notice/employee">
<div class="inner_menu" id="employee_notice">
<img class="inner_menu_img" src="http://localhost/cloud/images/employee_notice.png">
Employee Notice Board
</div>
</a>
<a href="http://localhost/cloud/notice/notify">
<div class="inner_menu" id="notifications">
<img class="inner_menu_img" src="http://localhost/cloud/images/notify.png">
Notifications
</div>
</a>
<a href="http://localhost/cloud/notice/events">
<div class="inner_menu" id="events">
<img class="inner_menu_img" src="http://localhost/cloud/images/events.png">
Events & Happenings
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