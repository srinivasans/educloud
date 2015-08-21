<script type="text/javascript">
$('document').ready(function()
{
$('#<?php if(isset($highlight)){echo $highlight;} ?>').addClass('menu_item_selected');
});

</script>

<div class="menu" id="menu">

<div class="menu_item" id="add_employee">
<a href="http://localhost/cloud/teacher/addemployee">
<img class="menu_image" src="http://localhost/cloud/images/add_employee.png"/>
<div class="hover_raiser">Add Employee</div>
</a>
</div>

<div class="menu_item" id="search_employee">
<a href="http://localhost/cloud/teacher/search">
<img class="menu_image" src="http://localhost/cloud/images/search_employee.png"/>
<div class="hover_raiser">Search Employees</div>
</a>
</div>

<div class="menu_item" id="manage_employee">
<a href="http://localhost/cloud/teacher/search">
<img class="menu_image" src="http://localhost/cloud/images/manage_employee.png"/>
<div class="hover_raiser">Edit Employee Info</div>
</a>
</div>

<div class="menu_item" id="time_table">
<a href="http://localhost/cloud/timetable">
<img class="menu_image" src="http://localhost/cloud/images/time_table.png"/>
<div class="hover_raiser">Time Table</div>
</a>
</div>

<div class="menu_item" id="holidays">
<a href="http://localhost/cloud/leave">
<img class="menu_image" src="http://localhost/cloud/images/holidays.png"/>
<div class="hover_raiser">Leaves and Holidays</div>
</a>
</div>

<div class="menu_item" id="question_bank">
<a href="http://localhost/cloud/questions">
<img class="menu_image" src="http://localhost/cloud/images/question_bank.png"/>
<div class="hover_raiser">Question Bank</div>
</a>
</div>

<div class="menu_item" id="library">
<a href="http://localhost/cloud/library">
<img class="menu_image" src="http://localhost/cloud/images/library.png"/>
<div class="hover_raiser">Library</div>
</a>
</div>

<div class="menu_item" id="notification">
<a href="http://localhost/cloud/notify">
<img class="menu_image" src="http://localhost/cloud/images/notification.png"/>
<div class="hover_raiser">Notice Board</div>
</a>
</div>

<div class="menu_item" id="transport">
<a href="http://localhost/cloud/transportation">
<img class="menu_image" src="http://localhost/cloud/images/transport.png"/>
<div class="hover_raiser">Transportation</div>
</a>
</div>

<div class="menu_item" id="miscellaneous">
<a href="http://localhost/cloud/miscellaneous">
<img class="menu_image" src="http://localhost/cloud/images/miscellaneous.png"/>
<div class="hover_raiser">Miscellaneous</div>
</a>
</div>

</div>

<div class="content">
<div class="select_menu">
<a href="http://localhost/cloud"><div class="select_menu_item">Students</div></a>
<a href="http://localhost/cloud/teacher"><div class="select_menu_item">Employees</div></a>
<div class="select_menu_item">Finance</div>
</div>