<?php
include('controller.php');
class ExaminationController extends Controller
{

protected function index()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_home.php');
}
else if($student->checkTeacher())
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/employee_examination_home.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function marksplit()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/mark_split_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function savesplitup()
{
$required=array(
			"exam_id"=>"Examination Name",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/marks_splitup_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_POST['exam_id'];
$section_id=$_POST['section'];
$subject_id=$_POST['subject'];
$rel->setExaminationId($exam_id);
$rel->setSectionId($section_id);
$rel->setSubjectId($subject_id);
$sub_exam_id=$rel->getIDByElems();
foreach($_POST['split'] as $key=>$value)
{
$split=new MarksSplitUp($objPDO);
$split->setExamSubjectId($sub_exam_id);
$split->setSplitUpValue($value);
$split->setSplitUpName($_POST['split_name'][$key]);
$split->save();
}

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/examination/selectsubjects"/>';
}
}
else
{
header('Location:http://localhost/cloud');
}
}



protected function timetableview()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_timetable_view.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function marking()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');


include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_marking.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function getsectionlist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher())&& isset($_GET['uid']))
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_GET['uid'];
$sec_sub=$rel->getByExamId($exam_id);
$sections=array();
$sec=new Section($objPDO);
$section_name=$sec->getSectionArray();
foreach($sec_sub as $key=>$value)
{
$sections[$key]=$section_name[$key];
}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_section_subject_lists.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function getsubjectlist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true|| $student->checkTeacher()) && isset($_GET['uid'])&& isset($_GET['ref']))
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/utility_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_GET['uid'];
$section_id=$_GET['ref'];
$sec_sub=$rel->getSectionExams($exam_id,$section_id);
$sub=new Subject($objPDO);
$subject_name=$sub->getSubjectArray();
$subjects=array();
foreach($sec_sub as $key=>$value)
{
$subjects[$value]=$subject_name[$value];
}
Utility::dropDownList('subject','subject','','text',$subjects);
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function markinglist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher())&& isset($_POST['exam_id'])&& isset($_POST['section']) && isset($_POST['subject']) )
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/marks_splitup_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_POST['exam_id'];
$section_id=$_POST['section'];
$subject_id=$_POST['subject'];
$rel->setExaminationId($exam_id);
$rel->setSectionId($section_id);
$rel->setSubjectId($subject_id);
$id=$rel->getIDByElems();
$rel->setID($id);
$rel->load();
$total_marks=$rel->getTotalMarks();
$sec=new StudentSection($objPDO);
$student=array();
$student=$sec->getBySectionId($section_id);
$students=array();
$stupro=new StudentProfile($objPDO);
$roll_numbers=array();
foreach($student as $key=>$value)
{
$stupro->setID($value['student_id']);
$stupro->load();
$students[$value['student_id']]=$stupro->getName();
$roll_numbers[$value['student_id']]=$stupro->getRollNo();
}
$split=new MarksSplitup($objPDO);
$split_ups=$split->getByExamSubjectId($id);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/marking_list_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function savemarks()
{
$required=array(
			"exam_subject_id"=>"Examination",
			"student"=>"Student Id",
			"total_marks"=>"Total Marks",
			);
GLOBAL $user;
GLOBAL $objPDO;
$student=new Student($objPDO,$user->getuserId());
if($user->checkAdmin()==true || $student->checkTeacher())
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

$flag=true;
foreach($_POST['student'] as $key=>$value)
{
if(!isset($_POST['total_marks'][$key]) || !is_numeric($_POST['total_marks'][$key]))
{
$flag=false;
}
}
if($flag==false)
{
echo 'Enter All Students Marks (you may use -1 for not attended)';
return;
}
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/marks_splitup_class.php');
$split_ups=new MarksSplitup($objPDO);
$split=$split_ups->getByExamSubjectId($_POST['exam_subject_id']);
$split_marks=array();
foreach($split as $key=>$value)
{
if(!isset($_POST[$value['id']]))
{
echo 'Marks Split Up Required (If Not Needed Change Marks Split Up Settings)';
return;
}
else
{
foreach($_POST[$value['id']] as $k=>$v)
{
if($v=="" || !is_numeric($v))
{
echo 'Marks Split Up Required (If Not Needed Change Marks Split Up Settings)';
return;
}
else
{
$split_marks[$k][$value['id']]=$v;
}
}
}
}

echo 'Saving...';

require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/exam_marks_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/splitup_marks_class.php');
$total_marks=$_POST['total_marks'];
$student=$_POST['student'];
foreach($student as $key=>$value)
{
$exam=new ExamMarks($objPDO);
$exam->setExamSubjectId($_POST['exam_subject_id']);
$exam->setStudentId($value);
$exam->setByExamStudentID($_POST['exam_subject_id'],$value);
$exam->setMarks($total_marks[$key]);
$exam->autoGrade();
$exam->save();
$exam_marks_id=$exam->getID();
if($split_marks)
{
foreach($split_marks[$key] as $k=>$v)
{
$split=new SplitupMarks($objPDO);
$split->setExamMarksId($exam_marks_id);
$split->setSplitUpId($k);
$split->setMarks($v);
$split->save();
}
}

}

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/examination"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function subjectreport()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true || $student->checkTeacher())
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/subject_report.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function subjectreportlist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher()) && isset($_POST['exam_id'])&& isset($_POST['section']) && isset($_POST['subject']) )
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/marks_splitup_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/student_profile_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/exam_marks_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_POST['exam_id'];
$section_id=$_POST['section'];
$subject_id=$_POST['subject'];
$rel->setExaminationId($exam_id);
$rel->setSectionId($section_id);
$rel->setSubjectId($subject_id);
$id=$rel->getIDByElems();
$mark=new ExamMarks($objPDO);
$mark_list=$mark->getByExamSubjectId($id);
$rel->setID($id);
$rel->load();
$total_marks=$rel->getTotalMarks();
$sec=new StudentSection($objPDO);
$student=array();
$student=$sec->getBySectionId($section_id);
$students=array();
$stupro=new StudentProfile($objPDO);
$roll_numbers=array();
foreach($student as $key=>$value)
{
$stupro->setID($value['student_id']);
$stupro->load();
$students[$value['student_id']]=$stupro->getName();
$roll_numbers[$value['student_id']]=$stupro->getRollNo();
}
$split=new MarksSplitup($objPDO);
$split_ups=$split->getByExamSubjectId($id);
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/section_subject_report_view.php');
}
else
{
header('Location:http://localhost/cloud');
}

}


protected function getmarkinglist()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true && isset($_GET['uid'])&& isset($_GET['ref']))
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/utility_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$rel=new ExaminationSectionSubject($objPDO);
$exam_id=$_GET['uid'];
$section_id=$_GET['ref'];
$sec_sub=$rel->getSectionExams($exam_id,$section_id);
$sub=new Subject($objPDO);
$subject_name=$sub->getSubjectArray();
$subjects=array();
foreach($sec_sub as $key=>$value)
{
$subjects[$value]=$subject_name[$value];
}
Utility::dropDownList('subject','subject','','text',$subjects);
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function gettimetable()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if(($user->checkAdmin()==true || $student->checkTeacher()) && isset($_GET['uid']) && isset($_GET['ref']))
{
$role=$student->getacctType();
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/exam_timetable_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$sub=new Subject($objPDO);
$sub_names=$sub->getSubjectArray();
$section_id=$_GET['ref'];
$exam_id=$_GET['uid'];
$rel=new ExaminationSectionSubject($objPDO);
$sub_exam_id=$rel->getSectionExams($exam_id,$section_id);
$tt=new ExamTimetable($objPDO);
$dates=array();
$slots=array();
foreach($sub_exam_id as $key=>$value)
{
$res=$tt->getByExamSubjectId($key);
$date=$res['date'];
if($date!=NULL)
{
$dates[$key]=date('d-m-Y',strtotime($date));
}
else
{
$dates[$key]='N/A';
}
$slots[$key]=$res['slot'];
}

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_timetable_list.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function selectsubjects()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_relations_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$sec=new Section($objPDO);
$sections=$sec->getSectionArray();
$rel=new SubjectRelations($objPDO);
$subjects=array();
foreach($sections as $key=>$value)
{
$subjects[$key]=$rel->getByClassId($key);
}

$sub=new Subject($objPDO);
$subject_name=$sub->getSubjectArray();

include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_subjects.php');
}
else
{
header('Location:http://localhost/cloud');
}
}

protected function timetable()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_timetable.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function gettimetablecreate()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true && isset($_GET['uid']))
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
include($_SERVER['DOCUMENT_ROOT'].'/cloud/model/subject_class.php');
$exam_id=$_GET['uid'];
$exam=new Examination($objPDO,$exam_id);
$slots=$exam->getFnAn();
if($slots==2)
{
$slots=1;
}
else if($slots==3)
{
$slots=2;
}
else
{
$slots=1;
}


$startTime=strtotime($exam->getStartDate());
$endTime=strtotime($exam->getEndDate());
$day = 86400;
$format = 'd-m-Y';
$numDays = round(($endTime - $startTime) / $day) + 1;
$days = array();
for ($i = 0; $i < $numDays; $i++) 
{
$days[] = date($format, ($startTime + ($i * $day)));
}
$rel=new ExaminationSectionSubject($objPDO);
$section_array=$rel->getByExamId($exam_id);
$section_name=array();
$subject_array=array();
$section=new Section($objPDO);
$subject=new Subject($objPDO);
foreach($section_array as $key=>$value)
{
$section->setID($key);
$section->load();
$section_name[$key]=$section->getCode();
foreach($value as $k=>$v)
{
$subject->setID($v);
$subject->load();
$subject_array[$key][$v]=$subject->getName();
}
$subject_array[$key][0]="--None--";

}
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/exam_timetable_create.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function create()
{
GLOBAL $user;
GLOBAL $objPDO;
$student=new student($objPDO,$user->getuserId());
$headMenu=array(
"username"=>$student->getName(),
);
if($user->checkAdmin()==true)
{
include($_SERVER['DOCUMENT_ROOT'].'/cloud/view/examination_create.php');
}
else
{
header('Location:http://localhost/cloud');
}

}

protected function createexam()
{
$required=array(
			"name"=>"Examination Name",
			"start_date"=>"Start Date",
			"end_date"=>"End Date",
			"fn_an"=>"Sessions",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_class.php');
$exam=new Examination($objPDO);
$exam->setName($_POST['name']);
$exam->setStartDate(date('Y-m-d H:i:s T', strtotime($_POST['start_date'])));
$exam->setEndDate(date('Y-m-d H:i:s T', strtotime($_POST['end_date'])));
$exam->setFnAn($_POST['fn_an']);
$exam->save();
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/examination/selectsubjects"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function savetimetable()
{
$required=array(
			"exam_id"=>"Examination Name",
			"check" =>"Exam Timetable"
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




GLOBAL $objPDO;
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/exam_timetable_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/section_class.php');
$exam_id=$_POST['exam_id'];
$sec=new Section($objPDO);
$fn_an=array("0"=>"FN","1"=>"AN");
$sec_name=$sec->getSectionArray();
foreach($_POST as $k=>$v)
{
if($k!='exam_id' && $k!='check' && $k!='save_timetable' )
{
$parts_1=explode('_',$k);
$section_id_1=$parts_1[2];
foreach($_POST as $r=>$s)
{
if($r!='exam_id' && $r!='check' && $r!='save_timetable' )
{
$parts_2=explode('_',$r);
$section_id_2=$parts_2[2];
if($s==$v && $k!=$r && $v!=0 && $section_id_1==$section_id_2)
{
echo 'Exam Clash.. Please Check Section [['.$sec_name[$section_id_1].']] on '.$parts_1[0].'-'.$fn_an[$parts_1[1]].' and '.$parts_2[0].'-'.$fn_an[$parts_2[1]];
return;
}
}
}
}
}

echo 'Saving...';

foreach($_POST as $key=>$value)
{
if($key!='exam_id' && $key!='check' && $key!='save_timetable' )
{
$parts=explode('_',$key);
$date=date('Y-m-d H:i:s T',strtotime($parts[0]));
$slot=$parts[1];
$section_id=$parts[2];
$subject_id=$value;
if($subject_id==0)
{
continue;
}
else
{
$rel=new ExaminationSectionSubject($objPDO);
$rel->setSectionId($section_id);
$rel->setSubjectId($subject_id);
$rel->setExaminationId($exam_id);
$sub_rel_id=$rel->getIDByElems();
$tt=new ExamTimetable($objPDO);
if($tt->checkExamSubjectId($sub_rel_id))
{
$tt->deleteByExamSubjectId($sub_rel_id);
}

$tt->setSlot($slot);
$tt->setDate($date);
$tt->setExamSubjectId($sub_rel_id);
$tt->save();
}
}


}
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/examination/"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


protected function subjectssave()
{
$required=array(
			"exam_id"=>"Examination",
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
require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/model/examination_section_subject_class.php');
$exam=new ExaminationSectionSubject($objPDO);
$exam->deleteByExamId($_POST['exam_id']);
foreach($_POST as $key=>$value)
{
if($key!='save_subjects' && $key!='exam_id')
{
$exam=new ExaminationSectionSubject($objPDO);
$exam->setExaminationId($_POST['exam_id']);
$parts=explode('-',$key);
$section_id=$parts[0];
$subject_id=$parts[1];
$exam->setSectionId($section_id);
$exam->setSubjectId($subject_id);
$exam->save();
}
}

echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud/examination/"/>';

}

}
else
{
header('Location:http://localhost/cloud');
}

}


};