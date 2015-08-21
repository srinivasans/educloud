<?php
include_once('controller.php');
class LogoutController extends Controller
{
protected function index()
{
GLOBAL $user;
$user->logout();
echo '<meta http-equiv="Refresh" content="0;url=http://localhost/cloud">';
}

}
?>