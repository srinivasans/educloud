<?php

abstract class Controller
{
protected $arNoAuthenticate;

public function __construct()
{
$this->arNoAuthenticate=array();
}

public function authenticate($strFunction)
{
if(array_key_exists($strFunction,$this->arNoAuthenticate))
{
eval('$this->'.$strFunction.'();');
}
else
{
GLOBAL $user;

if($user->isLoggedIn()==true && $user->sessionValidate()==true)
{
eval('$this->'.$strFunction.'();');
}
else
{
header('Location:http://localhost/cloud/login');
}
}

}

protected function checkAdmin()
{
if($user->isAdmin()==true)
{
return true;
}
else
{
return false;
}

}

}

?>