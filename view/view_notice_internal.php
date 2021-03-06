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
<img class="content_heading_image" src="http://localhost/cloud/images/internal_notice.png">
<div class="content_description">Internal Notice Board</div>
</div>


<div class="internal_notice_board" style="border:1px solid #B8B8B8;border-radius:3px;">
<div class="internal_view_head">
<div class="notice_type_view"><img class="icon" style="width:20px" src="http://localhost/cloud/images/<?php echo $type_img[$elems['importance']]?>"/></div>
<div class="heading_view"><?php echo ucfirst(stripslashes($elems['heading'])); ?></div>
<div class="time_view"><?php echo $elems['month']; ?> <b><?php echo $elems['day'];  ?></b></div>
</div>
<div class="internal_notice_info">
<?php
echo stripslashes($elems['info']);
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