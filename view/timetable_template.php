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
$('#time_table_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').show();}
}
)
});

$('document').ready(function(){
$('#time_table_view').live('mouseenter',
function() {
		$(".drag" ).draggable({
		revert:"invalid",
			appendTo: "body",
			helper: "clone",
			cursor: "move"
		});
		$( "td.time_table" ).droppable({
			activeClass: "ui-state-default",
			hoverClass: "ui-state-hover",
			accept: "#drag",
			drop: function( event, ui ) {
				$(this).html( ui.draggable.html());
				var inp=$(this).find('input');
				inp.attr('value',inp.attr('value')+'-'+$(this).attr('id'));
			}
			});});
			
			
});


$('document').ready(function(){
$('#section').change(function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/timetable/newtime/"+$('#section').attr('value'),
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
<div class="content_description">Create Time Table</div>
</div>

<form id="time_table_form" name="time_table_form" method="POST" action="http://localhost/cloud/timetable/validate">
<table class="time_table_section">
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
</table>

<div id="time_table_view"></div>

<div class="timetable_submit">
<?php
Utility::submitButton('save','save','Save');
?>
</div>
</form>

<div class="error" id="error"></div>
</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>