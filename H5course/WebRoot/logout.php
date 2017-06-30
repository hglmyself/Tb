<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/19
 * Time: 20:38
 */
session_start();

unset($_SESSION["username"]);

session_unset();
session_destroy();

header("location: login.php");
?>
