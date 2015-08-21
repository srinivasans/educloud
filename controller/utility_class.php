<?php

class Utility
{

public static function getColor($input)
{
$color='#FFFFFF';
switch($input)
{
case '1':$color='#F8B0DB';
break;
case '2':$color='#D3B6FA';
break;
case '3':$color='#B6C9FA';
break;
case '4':$color='#B6FAD3';
break;
case '5':$color='#DCFAB6';
break;
case '6':$color='#FAEBB6';
break;
case '7':$color='#FACCB6';
break;
}

return $color;
} 


public static function getDay($input)
{
$day='';
switch($input)
{
case '1':$day='Mon';
break;
case '2':$day='Tue';
break;
case '3':$day='Wed';
break;
case '4':$day='Thu';
break;
case '5':$day='Fri';
break;
case '6':$day='Sat';
break;
case '7':$day='Sun';
break;
}
return $day;
}

public static function inputEmailEditable($value,$id,$name,$placeholder,$class=NULL)
{
Utility::editableTextScript($id);
if($class==NULL)
{
$class="text_editable";
}
$html='<input type="email" readonly="readonly" value="'.$value.'" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'"/>';
echo $html;
}

public static function datePickerEditable($value,$id,$name,$class=NULL)
{
Utility::editableTextScript($id);
Utility::includeDateScriptEditable($id);
if($class==NULL)
{
$class="text_editable";
}

$html='<input type="text" value="'.$value.'" readonly="readonly" id="'.$id.'" class="'.$class.'" name="'.$name.'" value=""/>';
echo $html;
}


public static function inputEmail($id,$name,$placeholder,$class=NULL)
{
if($class==NULL)
{
$class="text";
}
$html='<input type="email" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'"/>';
echo $html;
}

public static function inputText($id,$name,$placeholder,$class=NULL)
{
if($class==NULL)
{
$class="text";
}
$html='<input type="text" value="" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'"/>';
echo $html;
}

public static function inputPassword($id,$name,$placeholder,$class=NULL)
{
if($class==NULL)
{
$class="text";
}
$html='<input type="password" value="" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'"/>';
echo $html;
}

public static function inputHidden($id,$name,$value,$class=NULL)
{
if($class==NULL)
{
$class="text";
}
$html='<input type="hidden" name="'.$name.'" id="'.$id.'" value="'.$value.'" class="'.$class.'"/>';
echo $html;
}

public static function inputTextArea($id,$name,$placeholder,$class=NULL)
{
if($class==NULL)
{
$class="text";
}
$html='<textarea name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'" style="resize:none;width:250px;" /></textarea>';
echo $html;
}

public static function label($for,$value,$required=NULL)
{
if($required=="required")
{
$value.='<span style="color:#FF0000"> *</span>';
}
$html='<label style="cursor:pointer" for="'.$for.'">'.$value.' : </label>';

echo $html;
}

public static function datePicker($name,$id,$class=NULL)
{

Utility::includeDateScript($id);
if($class==NULL)
{
$class="text";
}

$html='<input type="text" id="'.$id.'" class="'.$class.'" name="'.$name.'" value=""/>';
echo $html;
}


public static function dropDownList($id,$name,$type,$class=NULL,$input=NULL)
{
GLOBAL $objPDO;
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_class.php');
$sec=new Section($objPDO);
$section=$sec->getSectionArray();
if($input!=NULL && !is_array($input))
{
$tea=new Teacher($objPDO);
$teacher=$tea->getTeacherArray($input);
}
$sub=new Subject($objPDO);
$subject=$sub->getSubjectArray();
$ex=new Examination($objPDO);
$exams=$ex->getExaminationArray();
$importance_array=array("select"=>"--Notice Type--","1"=>"Important","2"=>"Announcement","3"=>"Reminder","4"=>"Others");
$numeric_level=array("select"=>"--Select--","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12");
$months=array("1"=>"January","2"=>"February","3"=>"March","4"=>"April","5"=>"May","6"=>"June","7"=>"July","8"=>"August","9"=>"September","10"=>"October","11"=>"November","12"=>"December");
$blood_group=array("select"=>"--Select--","A+"=>"A+","B+"=>"B+","O+"=>"O+","AB+"=>"AB+","A-"=>"A-","B-"=>"B-","O-"=>"O-","AB-"=>"AB-");
$category=array("select"=>"--Select--","OC"=>"General(OC)","SC"=>"SC","ST"=>"ST","OBC"=>"OBC","NRI"=>"NRI","Defence"=>"Defence");
$to_type=array("1"=>"Individual","2"=>"Section Wise","3"=>"All Parents","4"=>"Individual Parents","5"=>"Everyone");
$event_type=array("select"=>"--Event Type--","1"=>"Holiday","2"=>"Fee Payment","3"=>"School Event","4"=>"Examination");
$fn_an=array('1'=>'ForeNoon','2'=>'AfterNoon','3'=>'ForeNoon and AfterNoon');

if($class==NULL)
{
$class="text";
}
$list=array();
if($type=="exams")
{
$list=$exams;
}
if($type=="fn_an")
{
$list=$fn_an;
}
else if($type=="event_type")
{
$list=$event_type;
}
else if($type=="months")
{
$list=$months;
}
else if($type=="to_type")
{
$list=$to_type;
}
else if($type=="importance")
{
$list=$importance_array;
}
else if($type=="numeric_level")
{
$list=$numeric_level;
}
else if($type=="blood_group")
{
$list=$blood_group;
}
else if($type=="category")
{
$list=$category;
}
else if($type=="subject")
{
$list=$subject;
}
else if($type=="section")
{
$list=$section;
}
else if($type=="teacher")
{
$list=$teacher;
}
else if(is_array($input))
{
$list=$input;
}
$html='<select id="'.$id.'" class="'.$class.'" name="'.$name.'" >';
foreach($list as $key=>$value)
{
if($key==$input)
{
$html.='<option selected="selected" value="'.$key.'">'.$value.'</option>'; 
}
else
{
$html.='<option value="'.$key.'">'.$value.'</option>'; 
}
}
$html.='</select>';
echo $html;
}

public static function getStudentSec($stu)
{
GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
$section=new Studentsection($objPDO);
if($section->getByStudentId($stu)==true)
return true;
else
return false;

} 



public static function includeDateScript($id)
{
$script='

  <script type="text/javascript">

  $(document).ready(function() {
  $("#'.$id.'").datepicker();
  $( "#'.$id.'" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  });

  </script>';

  echo $script;
}


public static function dropDownListEditable($val,$id,$name,$type,$class=NULL,$input=NULL,$textVal=NULL,$class_select=NULL)
{
Utility::editableSelectScript($id);
GLOBAL $objPDO;
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/teacher_class.php');
$sec=new Section($objPDO);
$section=$sec->getSectionArray();
$tea=new Teacher($objPDO);
$teacher=$tea->getTeacherArray($input);
$sub=new Subject($objPDO);
$subject=$sub->getSubjectArray();
$numeric_level=array("select"=>"--Select--","0"=>"0","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12");
$blood_group=array("select"=>"--Select--","A+"=>"A+","B+"=>"B+","O+"=>"O+","AB+"=>"AB+","A-"=>"A-","B-"=>"B-","O-"=>"O-","AB-"=>"AB-");
$category=array("select"=>"--Select--","OC"=>"General(OC)","SC"=>"SC","ST"=>"ST","OBC"=>"OBC","NRI"=>"NRI","Defence"=>"Defence");

if($class==NULL)
{
$class="text_editable";
}
$list=array();
if($type=="numeric_level")
{
$list=$numeric_level;
}
else if($type=="blood_group")
{
$list=$blood_group;
}
else if($type=="category")
{
$list=$category;
}
else if($type=="subject")
{
$list=$subject;
}
else if($type=="section")
{
$list=$section;
}
else if($type=="teacher")
{
$list=$teacher;
}
$textVal="";
if(array_key_exists($val,$list))
{
$textVal=$list[$val];
}
$html='<input type="text" readonly="readonly" id="'.$id.'" class="'.$class.'" value="'.$textVal.'"/>';
$html.='<select class="'.$class_select.'" style="display:none" id="'.$id.'"  name="'.$name.'" >';
foreach($list as $key=>$value)
{
if($key==$val)
{
$html.='<option class="'.$class_select.'" selected="selected" value="'.$key.'">'.$value.'</option>'; 
}
else
{
$html.='<option value="'.$key.'">'.$value.'</option>'; 
}
}
$html.='</select>';
echo $html;

}


public static function includeDateScriptEditable($id)
{
$script='

  <script type="text/javascript">

  $(document).ready(function() {
  $("#'.$id.'").dblclick(function(){
  $("#'.$id.'").datepicker();
  $( "#'.$id.'" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  });
  });

  </script>';

  echo $script;
}


public static function radioButton($id,$name,$type,$class=NULL)
{
if($class=NULL)
$class="text";
$gender=array("male"=>"Male","female"=>"Female");
if($type=="gender")
{
$list=$gender;
}
$html="";
foreach($list as $key=>$value)
{
$html.='<span>&nbsp;&nbsp;'.$value.'&nbsp;&nbsp;</span>';
$html.='<input type="radio" name="'.$name.'" id="'.$id.'" class="'.$class.'" value="'.$key.'" />';
}

echo $html;

}

public static function radioButtonEditable($val,$id,$name,$type,$class=NULL)
{
Utility::editableRadioScript($id);
if($class==NULL)
$class="text_editable";
$gender=array("male"=>"Male","female"=>"Female");
if($type=="gender")
{
$list=$gender;
}
$html="";
$html.='<input type="text" id="'.$id.'" value="'.$val.'" class="'.$class.'" />';
foreach($list as $key=>$value)
{
$html.='<span id="'.$id.'" style="display:none">&nbsp;&nbsp;'.$value.'&nbsp;&nbsp;</span>';
if($key==$val)
{
$html.='<input type="radio" style="display:none" checked="checked" name="'.$name.'" id="'.$id.'" value="'.$key.'" />';
}
else
{
$html.='<input type="radio" style="display:none" name="'.$name.'" id="'.$id.'"  value="'.$key.'" />';
}
}

echo $html;

}

public static function checkBox($id,$name,$type=NULL,$checked=NULL)
{
$presence=array('present'=>'');
$same_as_above=array("same"=>"Same as Above");
$list=array("");
if($type=="same_as_above")
{
$list=$same_as_above;
}
else if($type=="presence")
{
$list=$presence;
}
$html="";
foreach($list as $key=>$value)
{
$html.='<span>&nbsp;&nbsp;'.$value.'&nbsp;&nbsp;</span>';
$html.='<input type="checkbox" id="'.$id.'" name="'.$name.'" ';
if($checked==1)
{
$html.='checked="checked"';
}
$html.=' value="'.$key.'" />';
}

echo $html;
}

public static function submitButton($id,$name,$value,$class=NULL)
{
if($class==NULL)
{
$class="submit_btn";
}

$html='<input type="submit" name="'.$name.'" id="'.$id.'" value="'.$value.'" class="'.$class.'" />';

echo $html;

}


public static function editableTextScript($id)
{
$script='<script type="text/javascript">';
$script.="$('document').ready(function(){
$('#".$id."').dblclick(function(){
$('#".$id."').attr('readonly',false);
$('#".$id."').removeClass('text_editable');
$('#".$id."').addClass('text');
});
});";

$script.="</script>";
echo $script;
}

public static function editableSelectScript($id)
{
$script='<script type="text/javascript">';
$script.="$('document').ready(function(){
$('input#".$id."').dblclick(function(){
$('select#".$id."').show();
$('input#".$id."').hide();
$('#".$id."').removeClass('text_editable');
$('#".$id."').addClass('text');
});
});";

$script.="</script>";
echo $script;
}

public static function editableRadioScript($id)
{
$script='<script type="text/javascript">';
$script.="$('document').ready(function(){
$('input#".$id."').dblclick(function(){
$('input#".$id."').show();
$('span#".$id."').show();
$('input[type=text]#".$id."').hide();
$('#".$id."').removeClass('text_editable');
});
});";

$script.="</script>";
echo $script;
}


public static function inputTextEditable($value,$id,$name,$placeholder,$class=NULL)
{
Utility::editableTextScript($id);
if($class==NULL)
{
$class="text_editable";
}
$html='<input type="text" readonly="readonly" value="'.$value.'" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" class="'.$class.'"/>';
echo $html;
}


public static function inputTextAreaEditable($value,$id,$name,$placeholder,$class=NULL)
{
Utility::editableTextScript($id);
if($class==NULL)
{
$class="text_editable";
}
$html='<textarea name="'.$name.'"  id="'.$id.'" value="'.$value.'" placeholder="'.$placeholder.'" class="'.$class.'" style="resize:none;width:250px;" />'.$value.'</textarea>';
echo $html;
}

public static function addAnother($id,$value,$class=NULL)
{
if($class==NULL)
{
$class="simple_button";
}
$html='<div style="margin-left:10px;font-family:tahoma;font-size:12px;color:#334499;cursor:pointer" id="'.$id.'" class="'.$class.'" value="2" >'.$value.'</button>';
echo $html;

}

};

?>