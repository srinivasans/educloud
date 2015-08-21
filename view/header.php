<div class="header">
<div class="header_wrap">
<div class="name"><span class="edu">edu</span>Cloud</div>

<?php
if(isset($headMenu))
{
?>

<script type="text/javascript">
$('document').ready(function(){
$('html').click(function(){
$('#drop_down_wrap').hide();
$('#drop_down_menu').removeClass('menu_active');
$('#drop_down_menu').addClass('menu_inactive');
});
});

function on_box(event)
{
event.stopPropagation();
}

function show_drop(event)
{
event.stopPropagation();
$('#drop_down_wrap').show();
$('#drop_down_menu').removeClass('menu_inactive');
$('#drop_down_menu').addClass('menu_active');
}
</script>
<div class="logged_in_user">
<div class="nameplate">
<?php
echo ucfirst($headMenu['username']);
?>
</div>
<div class="drop_item menu_inactive drop_wrap" id="drop_down_menu" style="width:15px;height:26px;padding-left:10px;" onClick="show_drop(event)">
<div class="drop_down" id="drop_down" >
<div class="drop_down_wrap" id="drop_down_wrap">
<div class="drop_down_box" onClick="on_box(event)">
<ul>
<a href="http://localhost/cloud/profile"><li class="drop_down_item">Profile</li></a>
<a href="http://localhost/cloud/settings"><li class="drop_down_item">Settings</li></a>
<a href="http://localhost/cloud/help"><li class="drop_down_item">Help</li></a>
<a href="http://localhost/cloud/contact"><li class="drop_down_item">Contact</li></a>
<hr/>
<a href="http://localhost/cloud/logout"><li class="drop_down_item">Sign Out</li></a>
</ul>
</div>
</div>
</div>
</div>

</div>
<?php
}
else
{ 
?>
<div class="school_name">Your Schoolname Goes Here</div>

<?php
}
?>
</div>
</div>


