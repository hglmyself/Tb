<?php
session_start();
require_once"Admin_function.php";
$id=$_GET['user_id'];
deleteUser($id);

header("location: ../users.php");
?>
