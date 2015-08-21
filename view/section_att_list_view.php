<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/utility_class.php');
?>


<div class="student_list">
<table class="student_section_select_list">
<tr>
<td class="tab_head">
Roll Number
</td>
<td class="tab_head">
Name
</td>
<td class="tab_head">
Attendance
</td>
</tr>

<?php
$present=0;
$absent=0;
foreach($students as $key=>$value)
{
?>
<tr id="<?php echo $value['id'] ;?>" class="student_list">
<td><?php echo $value['roll_no']; ?></td>
<td><?php echo $value['name'] ;?></td>
<td><?php if(isset($marked[$value['id']]) && $marked[$value['id']]==1){$present++;echo '<img class="attendance_img" title="Present" src="http://localhost/cloud/images/present.png"/>';}else if(isset($marked[$value['id']]) && $marked[$value['id']]==0){$absent++;echo '<img class="attendance_img" title="Absent" src="http://localhost/cloud/images/absent.png"/>';}else{echo '<img class="attendance_img" title="Not Marked" src="http://localhost/cloud/images/not_marked.png"/>';}?></td>
</tr>

<?php
}

?>
</table>
<div class="report">

<table class="attendance_report">
<tr id="att_rep_head" class="att_rep_bold">
<td colspan="2">Section Attendance Report</td>
</tr>
<tr id="date">
<td>Date :</td>
<td><?php echo $date; ?></td>
</tr>
<tr id="no_students"  class="att_rep">
<td>Number of Students :</td>
<td><?php echo count($students); ?></td>
</tr>
<tr id="present_students">
<td>Number Present :</td>
<td><?php echo $present; ?></td>
</tr>
<tr id="absent_students"  class="att_rep">
<td>Number Absent :</td>
<td><?php echo $absent; ?></td>
</tr>
</table>

</div>
</div>