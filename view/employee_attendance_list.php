<table  border="1" cellspacing="0" style="margin:0px auto">
<tr class="report_list_head">
<td>Date</td>
<td>Attendance</td>
</tr>
<?php
foreach($employee_att as $key=>$value)
{
echo '<tr class="report_list_data">';
echo '<td>'.$value['date'].'</td>';
echo '<td>';
if($value['presence']==1)
{
echo '<img class="attendance_img" title="Present" src="http://localhost/cloud/images/present.png"/>';
}
else if($value['presence']==0)
{
echo '<img class="attendance_img" title="Absent" src="http://localhost/cloud/images/absent.png"/>';
}
echo '</td>';
echo '</tr>';
}
?>
</table>



