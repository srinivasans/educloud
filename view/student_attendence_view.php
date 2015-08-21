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
Presence
</td>
</tr>

<?php
foreach($students as $key=>$value)
{
?>
<tr id="<?php echo $value['id'] ;?>" class="student_list">
<td><?php echo $value['roll_no']; ?></td>
<td><?php echo $value['name'] ; Utility::inputHidden('students[]','students[]',$value['id'])?></td>
<td><?php if(isset($marked[$value['id']]) && $marked[$value['id']]==1){Utility::checkBox($value['id'],$value['id'],'presence',1);}else{Utility::checkBox($value['id'],$value['id'],'presence');}?></td>
</tr>

<?php
}

?>

</div>