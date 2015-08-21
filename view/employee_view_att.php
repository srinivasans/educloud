<?php
include_once('controller/utility_class.php');
?>
<table class="employee_mark">
<tr>
<td class="tab_head">
Employee Id
</td>
<td class="tab_head">
Name
</td>
<td class="tab_head">
Presence
</td>
</tr>
<?php
foreach($employees as $key=>$value)
{
?>
<tr id="<?php echo $key ;?>" class="employee_list">
<td><?php echo $key; ?></td>
<td><?php echo $value ; Utility::inputHidden('employees[]','employees[]',$key)?></td>
<td><?php if(isset($marked[$key]) && $marked[$key]==1){echo '<img class="attendance_img" title="Present" src="http://localhost/cloud/images/present.png"/>';}else if(isset($marked[$key]) && $marked[$key]==0){echo '<img class="attendance_img" title="Absent" src="http://localhost/cloud/images/absent.png"/>';}else{echo '<img class="attendance_img" title="Not Marked" src="http://localhost/cloud/images/not_marked.png"/>';}?></td>
</tr>
<?php
}
?>
</table>
