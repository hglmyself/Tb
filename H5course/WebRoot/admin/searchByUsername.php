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

        <h1 class="page-title">搜索</h1>
    </div>

    <ul class="breadcrumb">
        <li><a href="index.php">主页</a> <span class="divider">/</span></li>
        <li class="active">搜索</li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">

            <div class="faq-content">
                <div class="row-fluid">
                    <div class="span9">
                        <div class="search-well">
                            <form class="form-inline" method="post" action="searchByUsername.php">
                                <input class="input-xlarge" placeholder="Search Help..." id="username" type="text" name="username">
                                <button class="btn" type="submit"><i class="icon-search"></i> Go</button>
                            </form>
                        </div>


                        <div class="block">
                            <p class="block-heading">搜索的内容</p>
                            <div class="block-body">
                                <div class="row-fluid" style="text-align: center;">
                                    <!-- 搜索内容 -->

                                    <div class="well">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>user_id</th>
                                                <th>用户名</th>
                                                <th>手机号码</th>
                                                <th>密码</th>
                                                <th style="width: 26px;"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $rows=showUsersByUsername($_POST['username']);
                                            foreach($rows as $row){
                                                ?>

                                                <tr align="left">
                                                    <td><?=$row['user_id']?></td>
                                                    <td><?=$row['username']?></td>
                                                    <td><?=$row['telephone']?></td>
                                                    <td><?=$row['password']?></td>
                                                    <td>   <a href="user.php"><i class="icon-pencil"></i></a>
                                                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                                                    </td>

                                                </tr>
                                            <?php
                                            } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- 搜索内容 end -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                    </div>
                    <div class="span3">
                        <div class="toc">
                            <h3>Contact Us</h3>
                            <h4>By Phone</h4>
                            <p>18821567126</p>
                            <h4>By Email</h4>
                            <p><a href="#">admin@adminemail.com</a></p>
                            <div>
                                <button class="btn"><i class="icon-facebook"></i></button>
                                <button class="btn"><i class="icon-twitter"></i></button>
                                <button class="btn"><i class="icon-linkedin"></i></button>
                            </div>
                        </div>
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


