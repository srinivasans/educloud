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
$('#create_exam_form').ajaxForm({
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
$highlight='examination';
include('admin_student_menu.php');
?>

<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/examination.png">
<div class="content_description">Examination</div>
</div>

<div class="create_exam">
<form id="create_exam_form" action="http://localhost/cloud/examination/createexam" method="POST">
<table cellspacing="0" cellpadding="5" class="create_exam_table">
<tr>
<td style="background:#ABCDEF" colspan="2">
Examination Settings
</td>
</tr>
<tr>
<td><?php Utility::label('name','Examination Set Name','required'); ?></td>
<td><?php Utility::inputText('name','name','Examination Name'); ?></td>
</tr>
<tr>
<td><?php Utility::label('start_date','Start Date','required'); ?></td>
<td><?php Utility::datePicker('start_date','start_date') ?></td>
</tr>
<tr>
<td><?php Utility::label('end_date','End Date','required'); ?></td>
<td><?php Utility::datePicker('end_date','end_date'); ?></td>
</tr>
<tr>
<td><?php Utility::label('fn_an','Sessions','required'); ?></td>
<td><?php Utility::dropDownList('fn_an','fn_an','fn_an'); ?></td>
</tr>

</table>
<div style="padding:5px">
<?php Utility::submitButton('create_exam','create_exam','Create Examination'); ?></td>
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