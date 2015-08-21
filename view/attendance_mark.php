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
$('#section').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/attendance/mark/"+$('#section').attr('value')+"/"+$('#date').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#attendance_view').html(htmlText);
} 
});

});
});

$('document').ready(function(){
$('#date').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/attendance/mark/"+$('#section').attr('value')+"/"+$('#date').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#attendance_view').html(htmlText);
} 
});

});
});

$('document').ready(function(){
$('#attendance_form').ajaxForm({
target:'#error',
success:function(){$('#error').show();}
})
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
<img class="content_heading_image" src="http://localhost/cloud/images/time_table.png">
<div class="content_description">Mark Attendance</div>
</div>

<form id="attendance_form" name="attendance_form" method="POST" action="http://localhost/cloud/attendance/validate">
<table class="attendance_section">
<tr>
<td class="label">
<?php
Utility::label("section","Section Code","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownList("section","section","section");
?>
</td>
</tr>

<tr>
<td class="label">
<?php
Utility::label("date","Date","required");
?>
</td>
<td class="form_input">
<?php
Utility::datePicker("date","date");
?>
</td>
</tr>
</table>

<div id="attendance_view" class="attendance_view"></div>


<div class="mark_attendence"><?php Utility::submitButton('mark','mark','Mark Attendence'); ?></div>
<div class="error" id="error" style="margin-top:10px;"></div>
</form>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>