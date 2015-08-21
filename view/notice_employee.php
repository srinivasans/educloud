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
else
{
include('employee_menu.php');
}
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/employee_notice.png">
<div class="content_description">Employee Notice Board</div>
</div>

<div class="notice_employee">
<?php
if($role=='admin' || $role=='teacher')
{
?>
<div class="create_notice"><a href="http://localhost/cloud/notice/employee_new">Create New Notice</a></div>
<?php
}
?>


<div class="employee_notice_board">

<?php
foreach($headings_array as $key=>$value)
{
?>

<div class="employee_notice_head">
<div class="notice_type"><img class="icon" src="http://localhost/cloud/images/<?php echo $type_img[$value['type']]?>"/></div>
<div class="heading"><a href="http://localhost/cloud/notice/employeeview/<?php echo $value['id']; ?>"><?php echo stripslashes(ucfirst($value['heading'])); ?></a></div>
<div class="time"><?php echo $value['month']; ?><br/><b><?php echo $value['day'];  ?></b></div>
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