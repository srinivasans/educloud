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
});

$('#time_table_view').load('http://localhost/cloud/timetable/sectionview/');
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
include('student_menu.php');

?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/time_table.png">
<div class="content_description">Section Time Table</div>
</div>

<form id="time_table_form" name="time_table_form" method="POST" action="http://localhost/cloud/timetable/validate">
<table class="time_table_section">
<tr>
<td class="label">
<?php
Utility::label("section","Section","required");
?>
</td>
<td class="form_input">
<?php
if($section)
echo $section;
else
echo 'Section not Set "Misc."';
?>
</td>
</table>

<div id="time_table_view"></div>

</form>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>