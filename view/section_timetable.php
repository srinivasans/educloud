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
$html.='<div class="drag_cover" id="'.$timetable[$k].'" style="background:'.Utility::getColor(($timetable[$k])%8).'" >'.$subjects[$timetable[$k]].'</div>';
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

<div class="subject_teachers">
<?php
$html='';$i=0;

foreach($subjects as $key=>$value)
{
$i++;
if($key)
{
$html.='<div class="drag" id="drag"><div class="drag_cover" id="'.$key.'" style="background:'.Utility::getColor($i).'" >'.$value.'<input type="hidden" name="time_table[]" id="time_table" value="'.$key.'" /></div></div>';
}
}

$html.='<div class="drag" id="drag"><div class="drag_cover" style="background:#FFFFFF"> - <input type="hidden" name="time_table[]" id="time_table" value="0" /></div></div>';
echo $html;
?>
</div>


<!--Template end-->