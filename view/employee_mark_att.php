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
<td><?php if(isset($marked[$key]) && $marked[$key]==1){Utility::checkBox($key,$key,'presence',1);}else{Utility::checkBox($key,$key,'presence');}?></td>
</tr>
<?php
}
?>
</table>
