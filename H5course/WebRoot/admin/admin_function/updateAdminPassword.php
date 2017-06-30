<?php
require_once"F:\\Workspaces\\MyEclipse Professional 2014\\H5course\\WebRoot\\DBConnection\\ConnectDatabase.php";
$password=$_POST['password'];


//更新密码
function updatePassword($password){
    $db=getDb();
    $stmt=$db->prepare("update usergroup set password=:password where user_id=1");
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    return ($stmt->rowCount()==1);
}
$result=updatePassword($password);
if($result){
    echo "<script>alert('修改成功')</script>";
    echo "<meta http-equiv='refresh' content='1;url=../user.php'>"; //3秒后自动跳转到修改用户页面
}
else{
    echo "<script>alert('修改失败')</script>";
    echo "<meta http-equiv='refresh' content='1;url=../user.php'>"; //3秒后自动跳转到修改用户页面
}

?>