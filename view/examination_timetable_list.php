<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable">
<?php
if(count($dates)==0)
{
echo 'Not Applicable';
}
else
{
foreach($dates as $key=>$value)
{
echo '<tr>';
echo '<td>'.$value.'</td>';
echo '<td>'.$sub_names[$sub_exam_id[$key]].'</td>';
echo '</tr>';
}
}
?>
</table>