<?php
session_start();
$usr="";

require_once"DBconnection/MySQLOperation.php";

if (isset($_POST['inputname'])) { //提交表单判断是否用户名和密码
    $usr=$_POST['inputname'];//赋值
    $password=$_POST['inputPassword'];
        //检测密码是否正确
        if(checkLogin($usr,$password)!=1)
        {
            echo '<script>alert("用户名或密码错误");</script>';
            $usr=$_POST['inputname'];
        }
        else {//判断登录的权限
            //如果是管理员身份的就跳转到管理员的界面
            $user_role=checkUserRole($usr);
            $_SESSION["username"]=$usr;
            $_SESSION["user_role"]=$user_role;
            if($_SESSION["user_role"]==1) {
                $redir="admin/index.php";
            }
            //如果是普通用户，就跳转到index.php主页面
            else{
                $redir="index.php";
            }
            header("location: $redir");
        }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--自定义last year-->
	<!-- <link  rel="stylesheet" href="css/style.css"> -->
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/mine-define.css">
  	<link rel="stylesheet" type="text/css" href="css/loginandout.css">
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

    <div class="container">
	<div class="login_boldborder col-lg-6 col-xs-offset-7">
            <h3> 用 户 登 录</h3>
              <hr>
                  <form  method="post" action=""  class="form-horizontal">
                    <div class="form-group">
                      <div class="input-group">
                      	<div class="input-group-addon"><span class="glyphicon glyphicon-user" style="font-size:20px; padding:0px 5px 0px 5px;"></span></div>
                        <input type="text" class="form-control input-lg" id="inputname" placeholder="Your name " name="inputname">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                      	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" style="font-size:20px; padding:0px 5px 0px 5px;"></span></div>
                        <input type="password" class="form-control input-lg" id="inputPassword" placeholder="Password" name="inputPassword">
                      </div>
                    </div>
                    <div class="form-group">
                    <a href="register.php">还没注册？</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn login_button">登 &nbsp;&nbsp;陆</button>
                    </div>
                  </form>
	</div>
</div>
</body>
</html>