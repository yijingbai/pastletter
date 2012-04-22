<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PastLetter</title>
<link href="<?php echo base_url("static/css/bootstrap.css")?>" rel="stylesheet">
<link href="<?php echo base_url("static/css/style.css")?>" rel="stylesheet">
<style type="text/css">
    body{
		width:1004px;
		height:945px;
		margin:auto;
		background-color:#94bfcf;
	}
	a:hover {
		color:red;
		TEXT-DECORATION:none;
	}
</style>
</head>

<body>
    <div id="container">
        <div id="banner">
            <div class="logo"><img src="<?php echo base_url("static/img/index_fullscreen_04.jpg")?>"></div>       
            <div class="jiantizhongwen"><p align="center"><a class="red" href="#">English</a></p></div>
            <div class="jiantizhongwen jiantizhongwen-fix"><p align="center"><a class='iframe' href="<?php echo base_url("/userctl/userlogin")?>"><?php echo $this->lang->line("login")?></a> | <a class='iframe' href="<?php echo base_url("/userctl/usersign")?>"><?php echo $this->lang->line("sign")?></a></div>
        </div>
        <div id="lantiao">
            <div id="biaoqian1" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("writeletter")?></i></b></a></div>
            <div id="biaoqian2" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("readpast")?></i></b></a></div>
            <div id="biaoqian3" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("readfuture")?></i></b></a></div>
            <div id="biaoqian4" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("about")?></i></b></a></div>
            <div id="biaoqian5" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("support")?></i></b></a></div>
            <div id="biaoqian6" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("connect")?></i></b></a></div>
        </div>
        <div class="caitiao"></div>