<?php
include_once('controller/utility_class.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.masonry.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>
<script type="text/javascript">
$(function(){
  $('#student_notice_board').masonry({
    itemSelector : '.student_notice',
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

<div class="student_menu">

<?php
$highlight='notification';
if($role=='admin')
{
include('admin_student_menu.php');
}
else if($role=='teacher')
{
include('employee_menu.php');
}
else if($role=='student')
{
include('student_menu.php');
}
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/student_notice.png">
<div class="content_description">Student Notice Board</div>
</div>

<div class="notice_internal">
<?php
if($create==true)
{
?>
<div class="create_notice"><a href="http://localhost/cloud/notice/student_new">Create New Notice</a></div>
<?php
}
?>


<div id="student_notice_board" class="student_notice_board">

<?php
foreach($headings_array as $key=>$value)
{
?>

<div class="student_notice">
<a href="http://localhost/cloud/notice/studentview/<?php echo $value['id']; ?>">
<div class="student_notice_head">
<div id="student_notice_type" class="student_notice_head_elems">
<img class="icon" style="width:20px;" src="http://localhost/cloud/images/<?php echo $type_img[$value['type']] ; ?>"/>
</div>
<div id="student_notice_heading" class="student_notice_head_elems">
<?php
echo ucfirst(stripslashes($value['heading']));
?>

</div>
<div class="student_notice_head_elems" id="student_notice_date">
<?php echo $value['month']; ?>-<b><?php echo $value['day'];  ?></b>
</div>
</div>
<div class="student_notice_info">
<?php echo stripslashes($value['info']); ?>
</div>
</a>
</div>




<?php
}
?>
</div>

</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>