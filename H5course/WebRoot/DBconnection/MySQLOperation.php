<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/14
 * Time: 20:41
 */
require_once "ConnectDatabase.php";
//echo checkLogin('pjy','1440121242');
//echo checkUserRole('admin');
//echo getUserId("PJY");
//验证用户名和密码
function checkLogin($username,$password){

    $db=getDb();
    $stmt=$db->prepare("select COUNT(*) from usergroup where username=:username and password=:password");
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    return ($stmt->fetchColumn()==1);
}

//验证用户是管理员还是普通用户
function checkUserRole($username){
    $db=getDb();
    $stmt=$db->prepare("select user_id from usergroup where username=:username");
    $stmt->bindParam(':username',$username);
    $stmt->execute();

    return $stmt->fetchColumn();
}
//注册新用户
function addUser($username, $password){
    $db=getDb();
    $stmt=$db->prepare("insert into usergroup(username, password) values (?,?)");
    $stmt->bindParam(1,$username);
    $stmt->bindParam(2,$password);
    $stmt->execute();
    return ($stmt->rowCount()==1);
}

//检查当前注册的用户是否已存在
function checkUserExist($username){
    $db=getDb();
    $stmt=$db->prepare("select count(*) from usergroup where username=?");
    $stmt->bindParam(1,$username);
    $stmt->execute();
    return ($stmt->fetchColumn()==1);
}

//获取user_id
function getUserId($username){
    $db=getDb();
    $stmt=$db->prepare("select user_id from usergroup where username=?");
    $stmt->bindParam(1,$username);
    $stmt->execute();
    return ($stmt->fetchColumn(0));
}

//新用户的个人信息
function addUserInfo($user_id,$email,$gender,$telephone,$birthday,$department){
    $db=getDb();
    $stmt=$db->prepare("insert into userinfo(user_id,email,gender,telephone,birthday,department) values (?,?,?,?,?,?)");
    $stmt->bindParam(1,$user_id);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$gender);
    $stmt->bindParam(4,$telephone);
    $stmt->bindParam(5,$birthday);
    $stmt->bindParam(6,$department);
    $stmt->execute();
    return ($stmt->rowCount()==1);
}