<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PastLetter</title>

<link href="<?php echo base_url("static/css/bootform.css")?>" rel="stylesheet">
<link href="<?php echo base_url("static/css/stylerp.css")?>" rel="stylesheet">
<script src="<?php echo base_url('static/js/jquery-1.7.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_config.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_all.js")?>"></script>
<link rel="stylesheet" href="<?php echo base_url("static/ueditor/themes/default/ueditor.css")?>"/>
<link rel="stylesheet" href="<?php echo base_url("static/css/colorbox.css")?>" />
<script src="<?php echo base_url("static/js/jquery.colorbox-min.js")?>"></script>
<script>
	$(document).ready(function(){
		$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px"});
	});
</script>
<script>
	$(document).ready(function(){
		$(".iframe2").colorbox({iframe:true,close:"[x] close" ,width:"635px", height:"780px"});
	});
</script>
<style type="text/css">
    body{
		width:1004px;
		height:945px;
		margin:auto;
		padding-top:40px;
		background-color:#94bfcf;
	}
	a:hover {
		color:#ab0000;
		TEXT-DECORATION:none;
	}
	a:link {color:#344e78;
		TEXT-DECORATION:none;
		} 

	a:visited {
		color:#344e78;
	}
	a:hover {
		color:#ab0000;
		TEXT-DECORATION:none;
	}
</style>
</head>

<body>
    <div id="container">
        <div id="banner">
            <div class="logo"><img src="<?php echo base_url("static/img/index_fullscreen_04.jpg")?>"></div>       
               <div class="jiantizhongwen"><p style = "float:right;margin-right:10px;"><?php if ($this->session->userdata("language") == 1){ ?>
		        	<a class="red" href="<?php echo base_url("/languagectl/setlanguage/2"); ?>">English</a>
		        <?php } else { ?>
					<a href="<?php echo base_url("/languagectl/setlanguage/1"); ?>">简体中文</a>
				<?php } ?></p>
		        </div>
            <div style = "float:right;margin-right:10px;">
	<?php if ($this->session->userdata("username") != NULL) { ?>
		<span style = "width:200px;"><?php echo $this->lang->line('welcome');?>,<?php echo $this->session->userdata("username"); ?>|<a href="<?php echo base_url("/letterctl/listUserLetter/1"); ?>"><?php echo $this->lang->line('myaccount');?></a>|<a href="<?php echo base_url("/userctl/userlogout"); ?>"><?php echo $this->lang->line('logout'); ?></a></span>
	<?php } else { ?>
	<a class='iframe' href="<?php echo base_url("/userctl/userlogin")?>"><?php echo $this->lang->line("login")?></a> | <a class='iframe' href="<?php echo base_url("/userctl/usersign")?>"><?php echo $this->lang->line("sign")?></a>  <?php } ?></div>
        </div>
        <div id="lantiao">
             <div id="biaoqian1" class="biaoqian" style="color:#344e78;"><a href="<?php echo base_url("/")?>"><b><i><?php echo $this->lang->line("writeletter")?></i></b></a></div>
	            <div id="biaoqian2" class="biaoqian"><a href="<?php echo base_url("/letterctl/listPublicLetterToPast/1")?>"><b><i><?php echo $this->lang->line("readpast")?></i></b></a></div>
	            <div id="biaoqian3" class="biaoqian"><a href="<?php echo base_url("/letterctl/listPublicLetterToFuture/1")?>"><b><i><?php echo $this->lang->line("readfuture")?></i></b></a></div>
	            <div id="biaoqian4" class="biaoqian"><a href="<?php echo base_url("/")?>"><b><i><?php echo $this->lang->line("about")?></i></b></a></div>
	            <div id="biaoqian5" class="biaoqian"><a href="<?php echo base_url("/")?>"><b><i><?php echo $this->lang->line("support")?></i></b></a></div>
	            <div id="biaoqian6" class="biaoqian"><a href="<?php echo base_url("/")?>"><b><i><?php echo $this->lang->line("connect")?></i></b></a></div>
        </div>
        <div class="caitiao"></div>