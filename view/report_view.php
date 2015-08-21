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
$highlight='attendance';
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

<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/attendance.png">
<div class="content_description">Student Attendance Report</div>
</div>

<div class="attendance_report_frame">
<div class="attendance_student_details">
<table class="attendance_student_details">
<tr>
<td>
Roll Number :
</td>
<td>
<?php
echo $roll_number;
 ?>
</td>
<td>
Name :
</td>
<td>
<?php
echo $name;
 ?>
</td>
</tr>
</table>
</div>

<div class="attendance_graph">
<?php
if($present==0 && $absent==0)
{
echo 'No Data Available';
}
else
{
echo '<img src="http://localhost/cloud/images/attendance_piechart.php?present='.$present.'&absent='.$absent.'"/>';

}
?>
</div>

<div class="attendance_stats">
<table>
<tr>
<td>Working Days :</td>
<td><?php echo $present+$absent; ?></td>
<td>Total Present :</td>
<td><?php echo $present;?></td>
<td>Total Absent :</td>
<td><?php echo $absent;?></td>
</tr>
</table>
</div>

<div class="complete_report">
<table class="att_report_table">
<tr>
<td>Date</td>
<td>Presence</td>
</tr>
<?php
foreach($attendance as $key=>$value)
{
?>
<tr id="<?php echo $value['id'] ;?>" class="student_list">
<td><?php echo $value['date']; ?></td>
<td>
<?php if($value['presence']==1){echo '<img class="attendance_img" title="Present" src="http://localhost/cloud/images/present.png"/>';}else{echo '<img class="attendance_img" title="Absent" src="http://localhost/cloud/images/absent.png"/>';} ?> 
</td>
</tr>

<?php
}

?>
</table>
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