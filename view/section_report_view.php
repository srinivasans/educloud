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
url: "http://localhost/cloud/attendance/getsectionreport/"+$('#section').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#section_report_view').html(htmlText);
} 
});

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
<img class="content_heading_image" src="http://localhost/cloud/images/section_report.png">
<div class="content_description">Section wise Attendance Report</div>
</div>

<div class="section_report">
<?php
Utility::label('section','Section','required');
Utility::dropDownList('section','section','section');
?>
<div id="section_report_view" class="section_report_view"></div>
</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>