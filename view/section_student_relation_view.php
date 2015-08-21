<?php
include_once('controller/utility_class.php');
$val=2;
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
$('#student_list').live('mouseover',function(){
$('.section_student_relations_form').ajaxForm(
{
target:'.error',
success:function(){$('.error').fadeIn();$('.error').fadeOut();}
});
});
});

$('document').ready(function(){
$('.add_btn').live('click',function(){
$(this).fadeOut();
});
});


$('document').ready(function(){
$('#section').live('change',function(){
var datastring="";
$.ajax({
type: "GET",
url: "http://localhost/cloud/studentprofile/stulist/"+$('#section').attr('value'),
data: datastring,
cache: false,
success: function(htmlText)
{
$('#student_list').html(htmlText);
} 
});

});
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
$highlight="miscellaneous";
include('admin_student_menu.php');
?>




<div class="content_heading">
<img class="content_heading_image" src="http://localhost/cloud/images/miscellaneous.png"/>
<div class="content_description">Section Student Relations</div>
</div>

<div class="section_student_relations">
<table class="section_student_relations_form">
<tr>
<td class="label">
<?php
Utility::label("section","Section Code","required");
?>
</td>
<td class="form_input">
<?php
Utility::dropDownList("section","section","section");
?>
</td>
</tr>
</table>

<div class="student_list" id="student_list"></div>



<div class="error" id="error"/>


</div>

</div>
</div>
