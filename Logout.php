<?php
include_once 'Session.php';

Session::start();
Session::destroy();

header("Location: login.php");
exit;

?>
