<?php
include_once('controller/utility_class.php');
?>
<table cellspacing="0" cellpadding="5" border="1" class="exam_timetable">
<?php
$slot=0;
Utility::inputHidden('check','check',1);
echo '<tr class="report_list_head">';
echo '<td></td>';
foreach($days as $n => $day)
{
echo '<td colspan="'.$slots.'">'.$day.'</td>';
}
echo '</tr>';
foreach($section_array as $key=>$value)
{
echo '<tr>';
echo '<td class="report_list_data">';
echo $section_name[$key];
echo '</td>';
for($i=0;$i<$slots*$numDays;$i++)
{
echo '<td>';
$id=$days[$i/$slots].'_'.($i%$slots).'_'.$key;
Utility::dropDownList($id,$id,"","text",$subject_array[$key]);
echo '</td>';
$slot++;
} 
echo '</tr>';
}

?>
</table>