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
$('#form_search_teacher').ajaxForm(
{
target:'#search_results',
success:function(){$('#search_results').hide();$('#search_results').show();}
});
});

$('document').ready(function(){
$('#search_input').keyup(function(){
$('#form_search_teacher').submit();
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

<div class="student_menu" id="student_menu">

<?php
$highlight='search_employee';
include('admin_employee_menu.php');

?>

<div class="content_heading" style="width:200px;">
<img class="content_heading_image" style="width:80px;" src="http://localhost/cloud/images/search_employee.png">
<div class="content_description">Search Employee</div>
</div>

<div class="search_student_form">
<form name="search_student" action=<?php echo "http://localhost/cloud/teacher/searchresult/"?> method="POST" id="form_search_teacher" >

<div class="search_input">
<?php
Utility::inputText("search_input","search_input","Search");
?>
</div>

<div class="submit_button">
<?php
//Utility::submitButton("search_student","search_student","Search");
?>
</div>

<div class="search_results" id="search_results">



</div>

</form>

</div>

</div>

</div>
</div>

<?php
include('footer.php');
?>
</body>

</html>