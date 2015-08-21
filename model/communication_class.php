<?php
abstract class Communication
{
protected $arRecipient;
private $strMessage;
protected $strErrorMessage;
protected $errorCode;

abstract public function send();

public function __construct()
{
$this->strMessage="";
}

public function addRecipient($recipientAddress,$recipientName=NULL)
{
$strRecipient="";
if($recipientName)
{
$strRecipient.=$recipientName." ";
}
$strRecipient.="&lt;".$recipientAddress."&gt;";
echo $recipientAddress;
echo $strRecipient;
$this->arRecipient[]=array('name'=>$recipientName,'address'=>$recipientAddress,'string_rep'=>$strRecipient);
var_dump($this->arRecipient);
return $strRecipient;
}

public function removeRecipient($strRecipient)
{
unset($this->arRecipient[$strRecipient]);
}

protected function _setMessage($strMessage)
{
$this->strMessage=$strMessage;
}

protected function _getMessage()
{
return($this->strMessage);
}

public function getErrorMessage()
{
return($this->strErrorMessage);
}

public function getErrorCode()
{
return($this->errorCode);
}



}
?>