<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/19
 * Time: 16:30
 */
//把需要的文件引进来
require_once "DBConnection/MySQLOperation.php";

//判断用户是否点击了“注册按钮”
if(isset($_POST["username"])) {
    $username = $_POST['username'];

    $password = $_POST['password'];
    $checkPassword = $_POST["checkPassword"];
    $email = $_POST['email'];
    $gender = $_POST['inlineRadioOptions'];
    $birthday = $_POST['birthday'];
    $telephone = $_POST['telephone'];
    $department = $_POST['department'];
    //判断两次输入的密码是否相同
    if($password==$checkPassword){

        if(!checkUserExist($username)){
            //满足条件后，先进行添加用户名和密码，添加后，在获取usergroup表的user_id，进而添加用户信息，都是使用user_id唯一标识的。
            $flag = addUser($username,$password);//添加用户名和密码，结果返回1，表示添加成功
            $user_id = getUserId($username);//添加用户名和密码后，数据库自动生成user_id，通过user_id，添加该用户的信息
            if($flag==1&&(addUserInfo($user_id,$email,$gender,$telephone,$birthday,$department))==1){
                echo "<script>alert('注册成功，点击确定返回登录界面');</script>";
                //header("location: index.php");
            }else{
                echo "<script>alert('注册失败，点击确定返回重新注册');</script>";
               // header("location: register.php");
            }

        }else{
            echo "<script>alert('已存在此用户，点击确定返回登录界面');</script>";
        }

    }else{
        echo "<script>alert('两次输入的密码一致');</script>";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--自定义last year-->
	<!-- <link  rel="stylesheet" href="css/style.css"> -->
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/mine-define.css">
  <link rel="stylesheet" type="text/css" href="css/loginandout.css">
    <!-- 检查注册时输入的格式是否正确-->
    <script type="javascript" src="js/Check.js">

    </script>
</head>
<body>
	<!-- 顶部 start -->
<div class="navbar navbar-fixed-top nav-bg-blue" role="navigation">
      <div class="container bg-blue">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-text" href="#">register</a>
        </div>
        <div class="navbar-collapse collapse">
           <div class="collapse navbar-collapse">
         
        </div><!--/.nav-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </div><!--顶部 end -->

<!-- 中间内容 -->
<div class="container">
	<div class="boldborder">
            <h4><span class="glyphicon glyphicon-edit"></span><b> 请填写您的登陆信息</b></h4>
              <hr>
                  <form method="post" class="form-horizontal">
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">用 户 名</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" placeholder="Your name " name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">密 码</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="checkpassword" class="col-sm-2 control-label">确 认 密 码</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="checkPassword" placeholder="check your password again" name="checkPassword">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">邮 箱 地 址</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="email" class="col-sm-2 control-label">手 机 号 码</label>
                          <div class="col-sm-9">
                              <input type="tel" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
                          </div>
                      </div>
                    <div class="distance"></div>                     
                    <h4><span class="glyphicon glyphicon-edit"></span><b> 请填写您的基本信息</b></h4>
                      <hr>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">您的性别</label>
                      <div class="col-sm-9">
                         <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadioOptions" value="female"> 男
                                  </label>
                                  <label class="radio-inline" >
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadioOptions" value="male"> 女
                                  </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">出生年月</label>
                       <div for="birth" class="col-sm-9">
                        <input type="date" class="form-control" id="birth" placeholder="birth" name="birthday">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">所在系别</label>
                       <div for="belong" class="col-sm-9">
                        <input type="text" class="form-control" id="belong" placeholder="belong" name="department">
                      </div>
                    </div>
                    <div class="form-group col-lg-6">
                    <a href="login.php">已经注册了,请登录..</a>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn formbutton" onclick="return check();">注 册</button>
                        <button type="reset" class="btn formbutton">重 置</button>
                      </div>
                    </div>
                  </form>
	</div>
</div>

<!-- 中间内容 end -->
</body>
</html>