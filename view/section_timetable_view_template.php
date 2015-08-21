<!--Template start-->
<?php
include_once('controller/utility_class.php');
?>

<div class="time_table">
<table class="time_table">
<?php
$row=7;
$column=$num_slots;
$k=0;
echo '<tr><td class="time_table_day"></td>';
foreach($slots as $key=>$value)
{
echo '<td class="time_table_day">'.$value.'</td>';
}
echo '</tr>';
for($i=1;$i<=$row;$i++)
{
echo '<tr><td class="time_table_day">'.Utility::getDay($i).'</td>';
for($j=0;$j<$column;$j++)
{
$html='<td class="time_table" id="'.$k.'">';
if(array_key_exists($k,$timetable))
{
$html.='<div class="timetable_box" id="'.$timetable[$k].'" style="background:'.Utility::getColor(($timetable[$k])%8).'" >'.$subjects[$timetable[$k]].'</div>';
}
$html.='</td>';
echo $html;
$k++;
}
echo '</tr>';
}
?>
</table>
</div>

<div class="timetable_stats">
<table class="timetable_stats">
<?php
foreach($count as $key=>$value)
{
echo '<tr><td>'.$subjects[$key]." : </td><td>".$value." Hours</td></tr>";
}
echo '<tr style="font-weight:bold;"><td>Total : </td><td>'.$total.' Hours</td></tr>';
?>
</table>
</div>




<!--Template end-->