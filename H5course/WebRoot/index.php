<?php
session_start();
$username=$_SESSION['username'];
echo $username;
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to our website project</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--自定义last year-->
<link  rel="stylesheet" href="css/style.css">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/mine-define.css">
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
          <a class="navbar-brand nav-text" href="#">Index</a>
        </div>
        <div class="navbar-collapse collapse">
           <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#" class=" nav-bg-blue"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="#page2" class=" nav-bg-blue"><span class="glyphicon glyphicon-th-large"></span> 分类</a></li>
          <!--   <li><a href="#page3" class=" nav-bg-blue">Contact</a></li>
            <li><a href="#page4" class=" nav-bg-blue">Login</a></li>
            <li><a href="#contact" class=" nav-bg-blue">newuser</a></li> -->
            <li>
            	<div class="navbar-form" role="form">
                    <!--获取用户名显示出来 -->
                   <span> 欢迎您</span>
                    <a href="logout.php"><span class="glyphicon glyphicon-user"></span> 注 销<</a>
            		<div class="form-group nav-margin">
    				  <input type="text" class="form-control" placeholder="Search" >
                              <a href="#"><span class="glyphicon glyphicon-search nav-text"></span></a>
  				</div>
  			</div>
            </li>
          </ul>         
        </div><!--/.nav-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </div><!--顶部 end -->

    
<!-- page1 start -->
<div data-role="page" id="page1">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron jumbotron-bg">
      <div class="container jumbotron-text">
        <h1>网站名</h1>
        <p class="lead">提供一个平台方便学生....(网站简介)</p>
        <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> -->
      </div>
    </div>
    
</div><!--page1  end -->

<!-- page2 start -->
<div data-role="page" id="page2" style="padding-top: 40px;">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <center>
          <h2>Setting</h2>
          <p>商品的交易、商家的商品陈列、登陆时间、用户资料</p>
          <div class="icon1">
          <a href="setting.html" class="icon1"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          </div>
          <p><a class="btn setting_btn" href="setting.html" role="button">管理区 &raquo;</a></p>
          </center>
        </div>
        <div class="col-md-6">
        <center>
          <h2>Shopping</h2>
          <p>商品市场Supermarket </p>
          <div class="icon2">
          <a href="shopping.html" class="icon2"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
          </div>
          <p><a class="btn shopping_btn" href="shopping.html" role="button">商品区 &raquo;</a></p>
          </center>
       </div>
       </div>
       <div class="row">
        <div class="col-md-6">
        <center>
          <h2>Upload</h2>
          <p>发布商品、快递、外卖信息</p>
          <div class="icon3">
          <a href="upload.html" class="icon3"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a>
          </div>
          <p><a class="btn upload_btn" href="upload.html" role="button">发布区 &raquo;</a></p>
          </center>
        </div>
         <div class="col-md-6">
         <center>
          <h2>Serve</h2>
          <p>查找快递信息、外卖信息</p>
          <div class="icon4">
          <a href="serve.html" class="icon4"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
          </div>
          <p><a class="btn serve_btn" href="serve.html" role="button">服务区 &raquo;</a></p>
          </center>
        </div>
      </div>
      
    </div> <!-- /container -->
</div>    <!-- page2 end -->





<!--footer-->
	<div class="container">
     <hr>
      <footer>
        <div class="col-md-2">
        <h5>华软连接</h5>
          <h6><a href="http://www.sise.com.cn/" class="footer-link">华软主页</a></h6>
          <h6><a href="http://my.scse.com.cn/" class="footer-link">华软scse</a></h6>
          <h6><a href="http://home.sise.cn/" class="footer-link">华软导航网</a></h6>
      </div>
      <div class="col-md-2">
        <h5>华软连接</h5>
          <h6><a href="http://www.sise.com.cn/" class="footer-link">华软主页</a></h6>
          <h6><a href="http://my.scse.com.cn/" class="footer-link">华软scse</a></h6>
          <h6><a href="http://home.sise.cn/" class="footer-link">华软导航网</a></h6>
      </div>
<div class="clearfix"> </div>
      </footer>
      <div class="footer-bottom">
      		<p><h6>&copy;广州大学华软软件学院
        版权所有 2016 &nbsp;</h6></p>
      </div>
    </div>
<!--footer/end-->

    
<!--返回顶部-->
	<a href="#" id="toTop" style="display: block;"> <span class="glyphicon glyphicon-chevron-up" style="opacity: 1;"></span></a>
    <script src="js/to-top.js"></script>
<!--返回顶部/end-->
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="js/jquery.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.5-dist/js/npm.js"></script>
</body>
</html>
