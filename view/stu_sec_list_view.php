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
Confirm
</td>
</tr>

<?php
foreach($result as $key=>$value)
{
echo '<form class="section_student_relations_form" id="'.$value['id'].'"name="section_student_relations[]" method="POST" action="http://localhost/cloud/miscellaneous/sectionstudentvalidate">';
?>
<tr id="<?php echo $value['id'] ?>" class="student_list">
<td><?php echo $value['roll_no'] ?></td>
<td><?php echo $value['name'] ?></td>
<td><?php Utility::inputHidden('section','section',$sec); Utility::inputHidden('student_id','student_id',$value['id']);if(Utility::getStudentSec($value['id'])==false){Utility::submitButton($value['id'],'add','Add','add_btn');} ?></td>
</tr>

<?php
echo '</form>';
}
?>

</div>