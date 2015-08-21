<?php
include_once('communication_class.php');
class EmailCommunication extends Communication
{
private $strApparentSender;
private $strSubjectLine;

public function __construct()
{
$this->arRecipient=array();
}

public function setSubject($strSubject)
{
$this->strSubjectLine=$strSubject;
}

public function setMessageBody($strMessage)
{
$this->_setMessage($strMessage);
}

public function setSender($strSender)
{
$this->strApparentSender=$strSender;
}

public function send()
{
$primary_mail="www.srini2351994@gmail.com";
$strHeaders="";
$strHeaders.="From: ".$this->strApparentSender."\n";
foreach($this->arRecipient as $key=>$value)
{
$strHeaders.="Cc: ".$value['string_rep']."\n";
}
$strHeaders.="Date: ".date("D, M j H:i:s T Y O")."\n";
$strBody=$this->_getMessage();
$strFullMessage=$strHeaders."\n".$strBody;
$this->strErrorMessage=mail($primary_mail,$this->strSubjectLine,$strHeaders);
echo $strFullMessage;
return true;
}

}
?>