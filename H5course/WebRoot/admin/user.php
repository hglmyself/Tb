<?php
session_start();
require_once"admin_function/Admin_function.php";
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>网站管理系统</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

  <body class=""> 
  <!--<![endif]-->
    
   <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">欢迎您 </a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="help.php">搜索</a></li>
                            <li class="divider"></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">注销</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"> <span class="second">网站管理系统</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>管理栏目</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="index.php">主页</a></li>
            <li ><a href="users.php">所有用户信息</a></li>
            <li ><a href="user.php">修改用户信息</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>管理员信息<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.php">Reset Password</a></li>
        </ul>

        <a href="help.php" class="nav-header" ><i class="icon-question-sign"></i>搜索</a>
    </div>
    

    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">修改用户信息</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">主页</a> <span class="divider">/</span></li>
            <li><a href="users.php">修改用户信息</a> <span class="divider">/</span></li>
            <li class="active">User</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary" onclick=""><i class="icon-save"></i> 保存</button>
    <a href="#myModal" data-toggle="modal" class="btn">删除该用户</a>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">个人详细信息</a></li>
      <li><a href="#profile" data-toggle="tab">修改密码</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab" method="post" name="myform" action="admin_function/admin_updateInfo.php">
        <?php
        $rows=showAdminInfo();
        foreach($rows as $row) {
            ?>

            <label>用户名</label>
            <input type="text" value="<?= $row['username'] ?>" class="input-xlarge" name="username" id="username">
            <label>邮箱地址</label>
            <input type="text" value="<?= $row['email'] ?>" class="input-xlarge" name="email" id="email">
            <label>手机号码</label>
            <input type="text" value="<?= $row['telephone'] ?>" class="input-xlarge" name="telephone" id="telephone">
            <label>出生年月</label>
            <input type="text" value="<?= $row['birthday'] ?>" class="input-xlarge" name="birthday" id="birthday">
            <label>所在系别</label>
            <input type="text" value="<?= $row['department'] ?>" class="input-xlarge" name="department" id="department">
            <label>性别</label>
            <select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
                <option value="female" name="gender" id="gender">男</option>
                <option value="male" name="gender" id="gender">女</option>
            </select>
            <div class="btn-toolbar">
                <button class="btn btn-primary" type="submit"><i class="icon-save"></i> 保存</button>
                <a href="#myModal" data-toggle="modal" class="btn">删除该用户</a>
                <div class="btn-group">
                </div>
            </div>
        <?php
        }
        ?>
    </form>
      </div>
      <div class="tab-pane fade" id="profile">
    <form id="tab2" method="post" action="admin_function/updateAdminPassword.php">
        <label>新密码</label>
        <input type="password" class="input-xlarge" name="password">
        <div>
            <button class="btn btn-primary" type="submit">修改密码</button>
        </div>
    </form>
      </div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">删除用户提示 Tip</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>确定要删除该用户吗？</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
    <button class="btn btn-danger" data-dismiss="modal">是的，确定删除</button>
  </div>
</div>


                    
                    <footer>
                        <hr>
                        <p>&copy; 2016  <a href="#" target="_blank">PJY</a></p>
                    </footer>
                    
            </div>
        </div>
    </div>
    


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


