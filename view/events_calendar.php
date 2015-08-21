
<div class="month_select">
<img class="icon" style="cursor:pointer;" id="prev" src="http://localhost/cloud/images/previous.png"/> 
<?php
echo '<div class="monthyear"><span class="month" id="'.$month.'">'.date('F', mktime(0,0,0,$month,1,$year))."</span> ";
echo '<span class="year" id="'.$year.'">'.$year.'</span></div>';
?>
<img class="icon" style="cursor:pointer" id="next" src="http://localhost/cloud/images/next.png"/> 
</div>
<div class="calendar">
</div>



<table cellspacing="0" class="calendar_table">
		<tr>
			<th class="calendar_head">Sun</th>
			<th class="calendar_head">Mon</th>
			<th class="calendar_head">Tue</th>
			<th class="calendar_head">Wed</th>
			<th class="calendar_head">Thu</th>
			<th class="calendar_head">Fri</th>
			<th class="calendar_head">Sat</th>
		</tr>
		<?php
		
			for($j=0;$j<count($week);$j++)
			{ 
				echo '<tr>';
				for ($i=0;$i<7;$i++)
					{
					$day=$week[$j][$i];
						echo '<td class="calendar_box" id="date'.$day.'" >'.'<div class="calendar_date">'.$day;
						if($day!="")
						{
						if($role=='admin')
						{
						echo '<a class="add_event" style="display:none;" id="'.$day.'" href="http://localhost/cloud/notice/addevent/'.$week[$j][$i].'-'.$month.'-'.$year.'">+ Add Event</a>';
						}
						}
						echo '</div>';
						$date=$day."-".$month."-".$year;
						if(isset($day_events[$date]))
						{
						$events=array();
						$events=$day_events[$date];
						foreach($events as $key=>$value)
						{
						echo '<div id="'.$events_array[$value]['id'].'" class="calendar_event_display"><img id="'.$events_array[$value]['id'].'" class="calendar_event_display" src="http://localhost/cloud/images/'.$events_type[$events_array[$value]['type']].'"></div>';
						}
						}
						echo '';
						echo '</div>'.'</td>';
					}
				echo '</tr>';
			}
			
		?>
	</table>  