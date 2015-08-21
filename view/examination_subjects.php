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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

<script type="text/javascript">
$('document').ready(function(){
$('#exam_subjects_form').ajaxForm({
target:'#error',
success:function(){$('#error').show();}
});
});
</script>

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

<div class="student_menu">

<?php
$highlight='examination';
include('admin_student_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/examination.png">
<div class="content_description">Examination</div>
</div>

<div class="exam_subjects">
<form id="exam_subjects_form" action="http://localhost/cloud/examination/subjectssave" method="POST">
<table cellspacing="0" cellpadding="5" border="1" class="exam_subjects_table">
<tr>
<td style="background:#ABCDEF" colspan="2">
Examination Subjects
</td>
</tr>
<tr>
<td style="background:#ABCDEF">
<?php
Utility::label('exam','Select Examination','required');
?>
</td>
<td style="background:#ABCDEF">
<?php
Utility::dropDownList('exam_id','exam_id','exams');
?>
</td>
</tr>
<?php
foreach($sections as $key =>$value)
{
echo '<tr>';
echo '<td>'.$value.'</td>';
echo '<td>';
echo '<table>';
foreach($subjects[$key] as $k=>$v)
{
echo "<tr><td>".$subject_name[$v]." : </td><td>";
$id=$key."-".$v;
Utility::checkBox($id,$id);
echo '</td>';
}
echo '</table>';
echo '</td>';
echo '</tr>';
}
?>

</table>

<div style="padding:5px">
<?php Utility::submitButton('save_subjects','save_subjects','Save Subjects'); ?></td>
</div>
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
