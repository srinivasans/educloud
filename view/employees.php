<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/style.css"/>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
</head>

<body>
<?php
include('header.php');
?>

<div class="content_wrapper">

<div class="student_menu">

<?php
$highlight='';
include('admin_employee_menu.php');

?>


<div class="temp_welcome" style="width:200px;margin:50px auto;font-family:tahoma;font-size:20px;">Welcome Admin !!</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>