<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/19
 * Time: 19:58
 */
echo getUsername();
function OnlyAdmin()
{
    // 如果不是管理员，或未登录，则跳转到登录页面
    if(!isset($_SESSION['username'])|| $_SESSION['username'] != 1) {
        header("location:index.php");
    }

}

//获取传过来的登录用户名
function getUsername(){
    $username=$_SESSION['username'];
    return $username;
}

?>