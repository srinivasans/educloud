<?php
class Calendar
{
protected $year;
protected $month;
protected $date;
protected $daysInMonth;
protected $firstDay;
protected $tempWeeks;
protected $weeksInMonth;
protected $week;
protected $tempDays;

public function __construct()
{
	$this->year = date('Y');
	$this->month = date('n');
	$this->day = date('j');
	$this->daysInMonth = date('t',mktime(0,0,0,$this->month,1,$this->year));	
	$this->firstDay = date('w',mktime(0,0,0,$this->month,1,$this->year));
	$this->tempWeeks = ceil(($this->firstDay + $this->daysInMonth)/7);
	$this->tempDays=$this->firstDay + $this->daysInMonth;
	$this->weeksInMonth = ceil($this->tempDays/7);
	$this->week=array();
}

protected function load()
{
	$this->daysInMonth = date('t',mktime(0,0,0,$this->month,1,$this->year));	
	$this->firstDay = date('w',mktime(0,0,0,$this->month,1,$this->year));
	$this->tempWeeks = ceil(($this->firstDay + $this->daysInMonth)/7);
	$this->tempDays=$this->firstDay + $this->daysInMonth;
	$this->weeksInMonth = ceil($this->tempDays/7);
	$this->week=array();
}

public function __call($strFunction,$arArguements)
{
$strMethodType=substr($strFunction,0,3);
$strMember=substr($strFunction,3);
switch($strMethodType)
{
case "set":
return($this->setAccessor($strMember,$arArguements[0]));
break;
case "get":
return($this->getAccessor($strMember));
};
return false;
}

private function setAccessor($strMember,$strNewValue)
{
if(property_exists($this,$strMember))
{
if(is_numeric($strNewValue))
{
eval('$this->'.$strMember.' = '.$strNewValue.';');
}
else
{
eval('$this->'.$strMember.' = "'.$strNewValue.'";');
}
$this->arModifiedRelations[$strMember]="1";
}
else
{
return false;
}
}

private function getAccessor($strMember)
{
if(property_exists($this,$strMember))
{
eval('$strVal = $this->'.$strMember.';');
return $strVal;
}
else
{
return false;
}
}

public function getArrayWeek()
{
return $this->week;
}

public function create()
{
$this->load();
$counter=0;
for($j=0;$j<$this->weeksInMonth;$j++)
	{
	for($i=0;$i<7;$i++)
		{
		$counter++;
		$this->week[$j][$i] = $counter;
		$this->week[$j][$i] -=$this->firstDay;
		if (($this->week[$j][$i] < 1) || ($this->week[$j][$i] > $this->daysInMonth))
			{    
			$this->week[$j][$i] = "";
			}
		}
	}
}

}

	
		
				
		
	?>