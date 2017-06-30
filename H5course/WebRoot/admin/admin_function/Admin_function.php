<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/21
 * Time: 22:10
 */
require_once"F:\\Workspaces\\MyEclipse Professional 2014\\H5course\\WebRoot\\DBConnection\\ConnectDatabase.php";
//查找所有用户信息

function showAllUsers(){

    $db=getDb();
    $sql="select a.user_id,a.username,b.telephone,a.password
          from usergroup as a ,userinfo as b
          where a.user_id=b.user_id";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//显示admin的信息

function showAdminInfo(){
    $db=getDb();
    $sql="select a.username,b.email,b.telephone,b.birthday,b.department,b.gender
          from usergroup as a,userinfo as b
          where a.user_id=b.user_id and b.user_id=1";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function showUsersByUsername($username){

    $db=getDb();
    $sql="select  a.user_id,a.username,b.telephone,a.password
          from usergroup as a,userinfo as b
          where a.user_id=b.user_id and a.username=:username";
    $stmt=$db->prepare($sql);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
function showUsersByUserId($user_id){

    $db=getDb();
    $sql="select a.username,b.email,b.telephone,b.birthday,b.department,b.gender
          from usergroup as a,userinfo as b
          where a.user_id=b.user_id and b.user_id=:user_id";
    $stmt=$db->prepare($sql);
    $stmt->bindParam(":user_id",$user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//搜索user_id查找用户
function search($user_id)
{
    $db=getDb();
    $user_id='%'.$user_id.'%';
    $sql="select a.user_id,a.username,b.telephone,a.password
          from usergroup as a ,userinfo as b
          where a.user_id=b.user_id AND user_id LIKE :user_id ;
          ";//查询用户输入的信息
    $stmt=$db->prepare($sql);//SQL预处理
    $stmt->bindParam(':user_id',$user_id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//删除用户
function deleteUser($user_id){
    $db=getDb();
    $sql="delete from usergroup where user_id='".$user_id."'";
    $sql1="delete from userinfo where user_id='".$user_id."'";
    $result=$db->query($sql);
    $result1=$db->query($sql1);

    return ($result->rowCount()==1&&$result1->rowCount()==1);
}
?>
