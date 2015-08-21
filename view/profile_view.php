<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/cloud/styles/style.css"/>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.js"></script>
<script type="text/javascript" src="http://localhost/cloud/scripts/jquery.form.js"></script>
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
<div class="content_description" >Account Info.</div>
</div>

<div class="student_details">
<table class="student_details">
<tr class="highlight">
<td class="student_details">
LOGIN ID
</td>
<td class="student_details">
<?php
echo $account_info['roll_no'];
?>
</td>
</tr>
<tr>
<td class="student_details">
PASSWORD
</td>
<td class="student_details">
***** (<a href="http://localhost/cloud/profile/changepassword">Change Password</a>)
</td>
</tr>
</tr>
<tr class="highlight">
<td class="student_details">
ACCOUNT TYPE
</td>
<td class="student_details">
<?php
echo ucfirst($account_info['acct_type']);
?>
</td>
</tr>
</table>
</div>



</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>