<?php
require_once('model_class.php');
class Section extends Model
{
protected $SectionId;
protected $StudentId;
protected $Presence;
protected $Date;

protected function defineTableName()
{
return('student_attendance');
}

protected function defineRelationMap()
{
return (array(
			"id"=>"ID",
			"student_id"=>"StudentId",
			"date"=>"Date",
			"presence"=>"Presence",
			"section_id"=>"SectionId",
			
));
}


};

?>