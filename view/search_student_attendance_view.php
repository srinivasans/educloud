<?php
echo '<div class="results"><span style="font-family:tahoma; font-weight:bold;font-size:15px">Displaying Search Results for "';
echo $search;
echo '"</span></div>';

//start of roll no search
$i=0;
echo '<div class="roll_search">';
$max=count($roll_match)<5?count($roll_match):5;
for($i=0;$i<$max;$i++)
{
if($i==0)
{
echo '<div class="search_heading">Roll Number Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Roll Number</td><td>Name</td><td>Class</td><td>Attendance</td><td>Reports</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($roll_match[$i]['roll_no'],$search);
$end=$start+strlen($search)-1;
$block=$roll_match[$i]['roll_no'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 

echo '<td>'.$roll_match[$i]['admission_number'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$roll_match[$i]['name'].'</td>';
echo '<td>'.$roll_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/studentprofile/report/'.$roll_match[$i]['user_id'].'">View Report</a></td>';
echo '</tr>';
}
echo '</table></div>';
//end of roll no search
//start of name search
$i=0;
echo '<div class="name_search">';
$max=count($name_match)<5?count($name_match):5;
for($i=0;$i<$max;$i++)
{
if($i==0)
{
echo '<div class="search_heading">Student Name Matches</div>';
echo '<table class="search_result"><tr class="search_head"><td>Roll Number</td><td>Name</td><td>Class</td><td>Attendance</td><td>Reports</td></tr>';
}
if($i%2==0)
{
echo '<tr>';
}
else
{
echo '<tr class="search_result_item">';
}

$start=stripos($name_match[$i]['name'],$search);
$end=$start+strlen($search)-1;
$block=$name_match[$i]['name'];

$highlighted=substr($block,0,$start).'<span class="search_highlight">'.substr($block,$start,strlen($search)).'</span>'.substr($block,$end+1); 


echo '<td>'.$name_match[$i]['admission_number'].'</td>';
echo '<td>'.$name_match[$i]['roll_no'].'</td>';
echo '<td>'.$highlighted.'</td>';
echo '<td>'.$name_match[$i]['class_level'].'</td>';
echo '<td><a class="link" href="http://localhost/cloud/attendance/report/'.$name_match[$i]['user_id'].'">View Report</a></td>';
echo '</tr>';
}
echo '</table></div>';

//end of name search
?>