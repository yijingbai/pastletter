<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>email-future</title>
<style type="text/css">
body{
	width:634px;
	height:749px;
	padding:0px;
	margin:0px;
	background-image:url(<?php echo base_url("static/img/index_fullscreen_02.jpg")?>);
}
#container{
	width:634px;
	height:749px;
	margin:auto;
}
#shangbiao{
	color:#2c4265;
	font-size:12px;
	font-family:Verdana;
	float:right;
	margin-top:15px;
	margin-right:30px;
}
#banner{
	width:634px;
	height:60px;
	margin-top:-10px;
	float:left;
}
#zuolanbian{
	width:9px;
	height:45px;
	float:left;
	margin-top:35px;
}
#youlanbian{
	float:right;
	width:9px;
	height:45px;
	margin-top:35px;
	margin-right:0px;
}
.logo{
	width:185px;
	height:53px;
	margin-top:20px;
	padding:0px;
	float:left;
}
#biaoti{
	font-family:Verdana;
	font-size:12px;
	color:#022b5a;
	margin-top:20px;
	margin-left: 20px;
}
#neirong{
	float:left;
	width:634px;
	height:600px;
	margin-top:50px;
}
#zhuti{
	margin-top:10px;
	margin-left: 40px;
}
.p{
	font-family:Verdana;
	font-size:12px;
	color:#535455;
}
#xiabiao{
	text-align:center;
	float:left;
	width:634px;
	height:20px;
	font-family:Verdana;
	font-size:11px;
	color:#1a7ba0;
}
</style>
</head>

<body>
<div id="container">
   	<div id="banner">
            <div id="zuolanbian"><img src="<?php echo base_url("static/img/hongbian.png")?>"></div>
            <div class="logo"><img src="<?php echo base_url("static/img/index_fullscreen_04.jpg")?>"></div>
            <div id="youlanbian"><img src="<?php echo base_url("static/img/hongbian.png")?>"></div>
    </div>

    <div id="neirong" class="p">
		<?php foreach ($letters as $letter): ?>
        <div id="biaoti"><?php echo $letter["title"];  echo "&nbsp;";echo "(".$this->lang->line('apast').")";?></div>
        <div id="zhuti"><?php echo $letter["content"]; ?></div>
	

    </div>
	<p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:15px;float:right;margin-right:5px;">sent <?php echo $letter["year"]-date('Y',time()); ?> years into the future, to Yestoday</p><p style="color:#ac0202;font-family:Verdana;font-size:12px;float:left;margin-top:15px;margin-left:22px;"><img src="<?php echo base_url("static/img/xinxing.png")?>" style="float:left;">Like(0)</p>
		<?php endforeach ?>
    <hr style="background-color:#b70105;width:634px;height:5px;border:0;" noshade="noshade">
    <div id="xiabiao">« Previous page    |   Next page »</div>
</div>
</html>
