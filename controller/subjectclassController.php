<?php
include_once('controller.php');
include_once('model/subject_class.php');
include_once('model/section_class.php');
include_once('model/teacher_class.php');
class SubjectclassController extends Controller
{
protected function index()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subjectclassteacher.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subjectclassteacher.php');
}
else
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subjectclassteacher.php');
}

}


protected function addsubject()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subject_relations.php');
}

}

protected function addteacher()
{
GLOBAL $objPDO;
GLOBAL $user;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subject_teacher_relations.php');
}
}

protected function teasubrel()
{
$class=$_GET['uid'];
GLOBAL $objPDO;
$subject=array();
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_relations_class.php');
$sec=new SubjectRelations($objPDO);
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$subject_array=array();
$teacher_id=array();
$teacher=array();
$subject=$sec->getByClassId($class);
for($i=0;$i<count($subject);$i++)
{
$subject_array[$subject[$i]]=Subject::getSubjectName($subject[$i]);
if($val=$this->getteasubrel($class,$subject[$i]))
{
$teacher_id[$subject[$i]]=$val;
$teacher_profile=new Teacher($objPDO,$teacher_id[$subject[$i]]);
$teacher[$teacher_id[$subject[$i]]]= $teacher_profile->getName($teacher_id[$subject[$i]]);
}
}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/teacher_relation_template.php');
}


public function getteasubrel($class,$subject)
{
GLOBAL $objPDO;
$teacher=array();
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
$rel=new SectionTeacherSubjectRelations($objPDO);
$teacher=$rel->getByClassSubject($class,$subject);
if($teacher)
return $teacher;
else
return false;
}



protected function validate()
{
$required=array(
			"section"=>"Section",
			"subject"=>"Subject",
			);
GLOBAL $user;
if($user->checkAdmin()==true)
{
if(isset($_POST))
{
foreach($required as $key=>$value)
{
if(!isset($_POST[$key]) || $_POST[$key]=='' || $_POST[$key]=='select')
{
echo $value.' is Required<br/>';
return;
}
}


echo 'Saving...';

GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_relations_class.php');
$arr=$_POST['subject'];
$subRel=new SubjectRelations($objPDO);
$teaRel=new SectionTeacherSubjectRelations($objPDO);
$teaRel->deleteByClassId($_POST['section']); 
$subRel->deleteByClassId($_POST['section']);
for($i=0;$i<count($arr);$i++)
{
$subRel=new SubjectRelations($objPDO);
$subRel->setClassId($_POST['section']);
$subRel->setSubjectId(intval($arr[$i]));
$subRel->save();
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/miscellaneous"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function validaterelation()
{
$required=array(
			"section"=>"Section",
			"subject"=>"Subject",
			"teacher"=>"Teacher",
			);
GLOBAL $user;
if($user->checkAdmin()==true)
{
if(isset($_POST))
{
foreach($required as $key=>$value)
{
if(!isset($_POST[$key]) || $_POST[$key]=='' || $_POST[$key]=='select')
{
echo $value.' is Required<br/>';
return;
}
}


echo 'Saving...';

GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_teacher_subject_class.php');
$arr_sub=$_POST['subject'];
$arr_teacher=$_POST['teacher'];
for($i=0;$i<count($arr_sub);$i++)
{
$subRel=new SectionTeacherSubjectRelations($objPDO);
$subRel->setSectionId($_POST['section']);
$subRel->setSubjectId(intval($arr_sub[$i]));
$subRel->loadByClassSubject();
$subRel->setTeacherId(intval($arr_teacher[$i]));
$subRel->save();
}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/miscellaneous"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


}


?>