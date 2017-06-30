<?php
require_once"F:\\Workspaces\\MyEclipse Professional 2014\\H5course\\WebRoot\\DBConnection\\ConnectDatabase.php";
$username=$_POST['username'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$birthday=$_POST['birthday'];
$department=$_POST['department'];
//更新详细信息
function updateinformation($email,$telephone,$birthday,$department){
    $db=getDb();
    $stmt=$db->prepare("update userinfo set email=:email,telephone=:telephone,birthday=:birthday,department=:department where user_id=1");
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':telephone',$telephone);
    $stmt->bindParam(':birthday',$birthday);
    $stmt->bindParam(':department',$department);
    $stmt->execute();
    return ($stmt->rowCount()==1);
}
//更新用户名
function updateUsername($username){
    $db=getDb();
    $stmt=$db->prepare("update usergroup set username=:username where user_id=1");
    $stmt->bindParam(':username',$username);
    $stmt->execute();
    return ($stmt->rowCount()==1);
}
$result1=updateUsername($username);
$result2= updateinformation($email,$telephone,$birthday,$department);
if(($result1)==1||($result2)==1){
    echo "<script>alert('修改成功')</script>";
    echo "<meta http-equiv='refresh' content='1;url=../user.php'>"; //3秒后自动跳转到修改用户页面
}
else{
    echo "<script>alert('修改失败')</script>";
    echo "<meta http-equiv='refresh' content='1;url=../user.php'>"; //3秒后自动跳转到修改用户页面
}

?>