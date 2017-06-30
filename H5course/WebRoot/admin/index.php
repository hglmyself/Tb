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

  </head>


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
            <li ><a href="user.php">修改信息</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>管理员信息<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse in">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.php">Reset Password</a></li>
        </ul>

        <a href="help.php" class="nav-header" ><i class="icon-question-sign"></i>搜索</a>
    </div>
    

    
    <div class="content">
        
        <div class="header">

            <h1 class="page-title">管理栏目</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">主页</a> <span class="divider">/</span></li>
            <li class="active">管理栏目</li>
        </ul>
        <div class="container-fluid">
            <div class="row-fluid">
                    

<div class="row-fluid">

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>管理员身份:</strong> admin
    </div>

    
</div>

<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">用户动态<span class="label label-warning">+10</span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>用户名</th>
                  <th>手机号码</th>
                  <th>密码</th>
                </tr>
              </thead>
                <tbody>
                <?php
                $rows=showAllUsers();
                foreach($rows as $row){
                    ?>

                    <tr align="left">
                        <td><?=$row['username']?></td>
                        <td><?=$row['telephone']?></td>
                        <td><?=$row['password']?></td>


                    </tr>
                <?php
                } ?>
                </tbody>
            </table>
            <p><a href="users.php">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <a href="#widget1container" class="block-heading" data-toggle="collapse">网站管理公告 </a>
        <div id="widget1container" class="block-body collapse in">
            <h2>关于网站的介绍</h2>
            <p>This template was developed with <a href="http://middlemanapp.com/" target="_blank">Middleman</a> and includes .erb layouts and views.</p>
            <p>All of the views you see here (sign in, sign up, users, etc) are already split up so you don't have to waste your time doing it yourself!</p>
            <p>The layout.erb file includes the header, footer, and side navigation and all of the views are broken out into their own files.</p>
            <p>If you aren't using Ruby, there is also a set of plain HTML files for each page, just like you would expect.</p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="block span6">
        <div class="block-heading">
            <span class="block-icon pull-right">
                <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="icon-refresh"></i></a>
            </span>

            <a href="#widget2container" data-toggle="collapse">订单动态</a>
        </div>
        <div id="widget2container" class="block-body collapse in">
            <table class="table list">
              <tbody>
                  <tr>
                      <td>
                          <p><i class="icon-user"></i> 用户名</p>
                      </td>
                      <td>
                          <p>修改的栏目</p>
                      </td>
                      <td>
                          <p>修改时间: 7/19/2012</p>
                          <a href="#">此行可要可不要</a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <p><i class="icon-user"></i> Audrey Ann</p>
                      </td>
                      <td>
                          <p>Amount: $2,793</p>
                      </td>
                      <td>
                          <p>Date: 7/12/2012</p>
                          <a href="#">View Transaction</a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <p><i class="icon-user"></i> Mark Tompson</p>
                      </td>
                      <td>
                          <p>Amount: $2,349</p>
                      </td>
                      <td>
                          <p>Date: 3/10/2012</p>
                          <a href="#">View Transaction</a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <p><i class="icon-user"></i> Ashley Jacobs</p>
                      </td>
                      <td>
                          <p>Amount: $1,192</p>
                      </td>
                      <td>
                          <p>Date: 1/19/2012</p>
                          <a href="#">View Transaction</a>
                      </td>
                  </tr>
                    
              </tbody>
            </table>
        </div>
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


