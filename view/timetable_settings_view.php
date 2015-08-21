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
$('#hours').live('change',function(){
var slots=$(this).attr('value');
var html="";
for(var i=1;i<=slots;i++)
{
html+="<tr><td>Slot "+i+" :</td><td>";
html+='<?php Utility::inputText('slot_name[]','slot_name[]','Slot Name'); ?>'+'</td></tr>';
}
$('#timetable_slots').html(html);

});
});

$('document').ready(function(){
$('#timetable_settings').ajaxForm({
target:'#error',
success:function(){$('#error').show();}
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
<img class="content_heading_image" src="http://localhost/cloud/images/settings.png">
<div class="content_description">Time Table Settings</div>
</div>

<div class="timetable_settings">
<form id="timetable_settings" action="http://localhost/cloud/timetable/settingssave" method="POST">
<table style="margin:0px auto;text-align:center;">
<tr>
<td>
<?php
Utility::label('hours','Number of Slots Per Day','required');
?>
</td>
<td>
<?php
if($set==true)
{
Utility::dropDownListEditable(count($slots),'hours','hours','numeric_level');
}
else
{
Utility::dropDownList('hours','hours','numeric_level');
}
?>
</td>
</tr>
</table>
<table id="timetable_slots">
<?php
if($set==true)
{
$count=0;
foreach($slots as $key=>$value)
{
$count++;
echo '<tr><td>Slot '.$count.' :</td><td>';
Utility::inputTextEditable($value,'slot_name[]','slot_name[]','Slot Name');
echo '</td></tr>';
}
}
?>
</table>
<div style="margin:0px auto;width:150px;padding:10px;">
<?php
Utility::submitButton('submit','submit','Save Settings');
?>
</div>
</form>

<div class="error" id="error" style="margin-top:25px"></div>
</div>


</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>