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

<script type="text/javascript">
$('document').ready(function(){
$('#to_address').live('mouseover',function(){
$('#to').live('keyup',function(){
$('#ajax_search_load').load('http://localhost/cloud/studentprofile/ajaxsearch/'+$('#to').attr('value'));
$('#ajax_search_load').show();
});
});
});

$('document').ready(function(){
$('#to_address').live('mouseover',function(){
$('#ajax_search_load').live('mouseover',function(){
$('.ajax_search_elem').click(function(){
$mail=$(this).attr('id');
$('#address').attr('value',$mail);
});
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
$highlight='notification';
include('admin_student_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/email_notice.png">
<div class="content_description">Send Email Notification</div>
</div>

<div class="email_notification_new">
<table>
<tr>
<td>
<?php
Utility::label('to_type','Recepient Method');
?>
</td>
<td>
<?php
Utility::dropDownList('to_type','to_type','to_type');
?>
</td>
</tr>
</table>
<div class="to_address" id="to_address">
<?php
Utility::inputText('to','to','To Address Search');
?>
<?php
Utility::inputText('address','address','To: Address');
?>

<div id="ajax_search_load" class="ajax_search_load">
</div>
</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>
