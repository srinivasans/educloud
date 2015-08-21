<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/style.css"/>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" >
$('document').ready(function(){
$('#login_form').ajaxForm({
target:'#error',
success:function(){}
});

});

</script>
</head>
<body class="cloud">
<?php
include('header.php');
?>

<div class="content_wrap">
<div class="login">
<div class="signin">Sign In Here !</div>
<table class="login_table" id="login_table">
<form id="login_form" name="login_form" method="POST" action="login/validate">
<tr>
<td>
<input type="text" name="roll" id="roll" placeholder="Roll Number" class="text_input"/>
</td>
<tr>
<td style="padding-top:20px">
<input type="password" name="pwd" id="pwd" placeholder="Password" class="text_input"/>
</td>
</tr>

<tr>
<td style="padding-top:20px">
<div class="forgotpass">Forgot Password ?</div>
<input type="submit" name="submit" id="submit" value="Sign in" class="login_btn"/>
</td>
</tr>

</form> 
</table>
<div class="error" id="error"></div>
</div>
</div>

<?php
include('footer.php');
?>
</body>
</html>