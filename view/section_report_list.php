<table border="1" cellspacing="0">
<tr class="report_list_head">
<td>Roll Number</td>
<td>Name</td>
<td>Present</td>
<td>Absent</td>
<td>% Attendance</td>
<td>Reports</td>
</tr>

<?php
foreach($students as $key=>$value)
{
echo '<tr class="report_list_data">';
echo '<td>'.$value['roll_no'].'</td>';
echo '<td>'.$value['name'].'</td>';
echo '<td>'.$presence[$value['id']].'</td>';
echo '<td>';
if($total_days>0)
{
echo $total_days-$presence[$value['id']];
}
else
{
echo '0';
}
echo '</td>';
echo '<td>'.$percent[$value['id']].'</td>';
echo '<td><a style="color:#0000FF;text-decoration:underline" href="http://localhost/cloud/attendance/report/'.$value['user_id'].'">View Report</a></td>';
echo '</tr>';
}
?>

</table>