<?php
include_once('controller/utility_class.php');
?>

<div class="teacher_section_relation">
<table class="teacher_section_relation">
<?php
$html="";
foreach($subject_array as $key=>$value)
{
$html.="<tr>";
$html.='<td class="form_input" id="'.$key.'">'.$value;
echo $html;
Utility::inputHidden($key,"subject[]",$key);
$html='</td>';
$html.='<td class="form_input" id="'.$key.'">';
echo $html;
if(array_key_exists($key,$teacher_id))
{
Utility::dropDownListEditable($teacher_id[$key],'fixed','teacher[]','teacher',NULL,$key,$teacher[$teacher_id[$key]],'teacher_select');
}
else
{
Utility::dropDownList($key,'teacher[]','teacher','teacher_select',$key);
}
$html='</td>';
$html.="</tr>";
}
echo $html;
?>
</table>
</div>