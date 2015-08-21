<?php
include_once('controller/utility_class.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>

<script type="text/javascript">
$('document').ready(function(){
$('#change_password').ajaxForm({
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
$highlight='';
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


<div class="content_heading" style="width:400px;">
<img class="content_heading_image" src="http://localhost/cloud/images/account.png">
<div class="content_description" >Change Password</div>
</div>

<div class="student_details">
<form id="change_password" action="http://localhost/cloud/profile/savepass" method="POST">
<table class="student_details">
<tr class="highlight">
<td class="student_details">
Current Password
</td>
<td class="student_details">
<?php
Utility::inputPassword('current','current','Current Password');
?>
</td>
</tr>
<tr>
<td class="student_details">
New Password
</td>
<td class="student_details">
<?php
Utility::inputPassword('new','new','New Password');
?>
</td>
</tr>
</tr>
</table>

<?php
Utility::submitButton('change_pass','change_pass','Change Password');
?>

</form>


<div class="error" id="error"></div>
</div>



</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>