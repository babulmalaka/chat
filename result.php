<?php
require_once 'User.php';

$instance=new User($_POST['em'],$_POST['pass']);
$instance->log();