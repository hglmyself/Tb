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
            
            <h1 class="page-title">所有用户信息</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">主页</a> <span class="divider">/</span></li>
            <li class="active">所有用户信息</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-plus"></i> New User</button>
    <button class="btn">Import</button>
    <button class="btn">Export</button>
  <div class="btn-group">
  </div>
</div>
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
      $rows=showAllUsers();
      foreach($rows as $row){
      ?>

      <tr align="left">
          <td><?=$row['user_id']?></td>
          <td><?=$row['username']?></td>
          <td><?=$row['telephone']?></td>
          <td><?=$row['password']?></td>
           <td>   <a href="user.php"><i class="icon-pencil"></i></a>
              <a  role="button" data-toggle="modal" href="?user_id=<?=$row['user_id']?>#myModal" ><i class="icon-remove"></i></a>
          </td>
        </tr>
      <?php
      } ?>
      </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">X
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <a href="users.php" aria-hidden="true">Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="admin_function/deleteUser.php?user_id=<?=$_GET['user_id']?>" data-toggle="modal">Delete</a>
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
        $("#dialog").dialog({
            bgiframe: true,
            resizable: false,
            height:140,
            modal: true,
            overlay: {
                backgroundColor: '#000',
                opacity: 0.5
            },
            buttons: {
                'Delete all items in recycle bin': function() {
                    $(this).dialog('close');
                },
                Cancel: function() {
                    $(this).dialog('close');
                }
            }
        });
    </script>
    
  </body>
</html>


