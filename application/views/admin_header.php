<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PastLetter Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url("static/css/bootstrap.css")?>" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?php echo base_url("css/bootstrap-responsive.css")?>" rel="stylesheet">
	<script type = "text/javascript" src = "<?php echo base_url("jquery-1.7.1.min.js")?>"></script>
	<script type = "text/javascript" src = "<?php echo base_url("bootstrap.min.js")?>"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PastLetter</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url("/")?>">返回首页</a></li>
              <li><a href="#">总会员数:<?php echo $user?></a></li>
              <li><a href="#">未发送邮件数:<?php echo $unsent?></a></li>
  		      <li><a href="#">已发送邮件数:<?php echo $sent?></a></li>
            </ul>
            <p class="navbar-text pull-right">您好，管理员:<?php echo $this->session->userdata("admin_name")?><a href="<?php echo base_url("adminlogin/logout")?>">&nbsp;&nbsp;登出</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>