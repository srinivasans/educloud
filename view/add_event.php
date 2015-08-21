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

<script type="text/javascript">
$('document').ready(function(){
$('#create_event_form').ajaxForm(
{
target:'#error',
success:function(){$('#error').hide();$('#error').show();}
});
});


</script>


<script type="text/javascript">
$('document').ready(function(){
$('#menu').css('height',$('.content_wrapper').innerHeight()+100);
});
</script>

</head>

<body>
<?php
include('header.php');
?>

<div class="content_wrapper">

<div class="student_menu" id="student_menu">

<?php
$highlight='notification';
include('admin_student_menu.php');

?>

<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/events.png">
<div class="content_description">Create Event</div>
</div>

<div class="create_event">
<form class="create_event_form" id="create_event_form" action="http://localhost/cloud/notice/createevent" method="POST">
<div class="event_date">
<?php
Utility::label('date','Event Date','required');
Utility::datePickerEditable($date,'date','date');
?>
</div>

<div class="event_name">
<?php
Utility::inputText('event_name','event_name','Event');
?>
</div>

<div class="event_description">
<?php
Utility::inputText('event_description','event_description','Event Description');
?>
</div>

<div class="event_type">
<?php
Utility::dropDownList('event_type','event_type','event_type');
?>
</div>

<div class="submit" style="margin:0px auto;width:14%;">
<?php
Utility::submitButton('submit','submit','Create Event');
?>
</div>

</div>
</form>

<div class="error" style="margin-top:5%" id="error"></div>


</div>
</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>