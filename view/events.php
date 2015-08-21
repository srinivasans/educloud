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
$('#calendar').load('http://localhost/cloud/notice/getcalendar');
});

$('document').ready(function(){
$('#calendar').live('mouseover',function(){
$('.calendar_date').live('mouseover',function(){
$(this).children().show();
}).live('mouseout',function(){$('.add_event').hide();});
});
});

$('document').ready(function(){
$('#calendar').live('mouseover',function(){
$('#next').live('click',function(){
var month=$('.month').attr('id');
var year=$('.year').attr('id');
if(month==12){month=1;year++;}
else{month++;}
$('#calendar').load('http://localhost/cloud/notice/getcalendar/'+month+'/'+year);
});
});
});

$('document').ready(function(){
$('#calendar').live('mouseover',function(){
$('#prev').live('click',function(){
var month=$('.month').attr('id');
var year=$('.year').attr('id');
if(month==1){month=12;year--;}
else{month--;}
$('#calendar').load('http://localhost/cloud/notice/getcalendar/'+month+'/'+year);
});
});
});


$("document").ready(function() {
$('#calendar').live('mouseover',function(){
$('.calendar_event_display').click(function(){
var id=$(this).attr('id');
event.stopPropagation();
$("#message_box").offset($(this).offset());
$('#message_box').fadeIn();
$('#message_box').load('http://localhost/cloud/notice/geteventmessage/'+id);
});
});
});

$('document').ready(function(){
$('body').click(function()
{
$('#message_box').fadeOut();
});
});

</script>

</head>

<body>

<div id="message_box" class="message_box"></div>

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
else if($role=='employee')
{
include('employee_menu.php');
}
else if($role=='student')
{
include('student_menu.php');
}
?>


<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/events.png">
<div class="content_description">Events and Happenings</div>
</div>

<div id="calendar" class="events_wrapper">
</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>