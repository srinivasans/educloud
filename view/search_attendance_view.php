<?php
include_once('controller/utility_class.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

<script type="text/javascript">

$('document').ready(function(){
$('#attendance_search_view').live('mouseenter',function(){
$('.paginate_elem').click(function(){
var page=$(this).attr('id');
var search=$('#search').attr('value');

$('#attendance_search_view').load('http://localhost/cloud/attendance/getstudent/'+search+'/'+page);
});
});
});

$('document').ready(function(){
$('#search').keyup(function(){
$('#student_view').submit();
});
});


$('document').ready(function(){

$('#student_view').ajaxForm({
target:'#attendance_search_view',
success:function(){var search=$('#search').attr('value');$('#paginate').load('http://localhost/cloud/attendance/paginate/'+search);}
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
if($role=='admin')
{
include('admin_student_menu.php');
}
else if($role=='teacher')
{
include('employee_menu.php');
}
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/attendance.png">
<div class="content_description">View Attendance</div>
</div>


<table class="attendance_search">
<form id="student_view" action="http://localhost/cloud/attendance/getstudent" method="POST">
<tr>
<td class="label">
<?php
Utility::label("search","Search Student","required");
?>
</td>
<td class="form_input">
<?php
Utility::inputText("search","search","Search Student");
?>
</td>
</tr>
</form>
</table>

<div id="attendance_search_view" class="attendance_search_view"></div>
<div class="paginate" id="paginate"></div>




</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>