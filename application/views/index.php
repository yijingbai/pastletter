<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index1</title>

<link href = '<?php echo base_url('static/css/bootform.css')?>' rel="stylesheet">
<style type="text/css">


*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{background:#e3e3e3;height:100%;font:normal normal 12px/24px "Microsoft yahei", Arial;padding-bottom:30px;}
a{color:#344e78;text-decoration:none;}
a:hover{text-decoration:none;color:#ab0000;}
#wrapper{width:980px;margin:0 auto;background:#f8f8f8;padding:20px 20px 50px;border-radius:5px;-moz-border-radius:5px;}
#wrapper h3{color:#333;font-size:14px;text-align:center;margin:20px 0;}
/* box */
.box{width:400px;margin-top:30px;background:#FFF;float:left;}
.tab_menu{float:left;margin-top:28px;}
.tab_menu li{width:238px;float:left;height:28px;line-height:28px;color:#fff;text-align:center;cursor:pointer;}
.tab_menu li.current p i{color:#022b5a;}
.tab_menu li.current i{color:#ab0000;}
.tab_menu li.current-fix{width:153px;margin-left:21px;}
.tab_menu li.currentf p{color:red;}
.tab_menu li.currentf-fix{width:153px;margin-left:21px;}
.tab_menu li a{color:#FFF;text-decoration:none;}
.tab_menu li.current a{color:#333;}
.tab_box{float:left;width:455px;height:585px;}
.tab_box-fix{float:right;width:455px;height:585px;}
.tab_box li{line-height:24px;overflow:hidden;}
.tab_box li span{margin:0 5px 0 0;font-family:"宋体";font-size:12px;font-weight:400;color:#ddd;}
.tab_box .hide{display:none;}}
</style>
<link href="<?php echo base_url('static/css/stylei.css')?>" rel="stylesheet">
<style type="text/css">
    body{
		width:1004px;
		height:945px;
		padding-top: 30px;
		margin:auto;
		background-color:#94bfcf;

	}
	
</style>
</head>

<body>
	<script src="<?php echo base_url('static/js/jquery-1.7.1.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_config.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_all.js")?>"></script>
	<link rel="stylesheet" href="<?php echo base_url("static/ueditor/themes/default/ueditor.css")?>"/>
	<link rel="stylesheet" href="<?php echo base_url("static/css/colorbox.css")?>" />
	<script src="<?php echo base_url("static/js/jquery.colorbox-min.js")?>"></script>
	<script src="<?php echo base_url("static/js/jquery.cookie.js")?>"></script>

<script src="<?php echo base_url('static/js/jquery.tabs.js')?>"></script>
<script src="<?php echo base_url('static/js/jquery.lazyload.js')?>"></script>
<script type="text/javascript">
$(function(){

	
	$('.demo1').Tabs({
		event:'click'
	});
	$('.demo2').Tabs({
		event:'click'
	});
	//部分区域图片延迟加载

});	
</script>



<div id="container">
    <div id="banner">
        <div class="logo"><img src="<?php echo base_url('static/img/index_fullscreen_04.jpg')?>">
        </div>       
        <div class="jiantizhongwen"><p style = "float:right;margin-right:10px;"><?php if ($this->session->userdata("language") == 1){ ?>
        	<a class="red" href="<?php echo base_url("/languagectl/setlanguage/2"); ?>">English</a>
        <?php } else { ?>
			<a href="<?php echo base_url("/languagectl/setlanguage/1"); ?>">简体中文</a>
		<?php } ?></p>
        </div>
         <div style = "float:right;margin-right:10px;margin-top:-10px;">
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
    <div class="caitiao">
    </div>
    <div id="left-container">
        <div id="leftkuang" class="box demo2">
            <ul class="tab_menu">
                <li class="current">
                    <div id="xietiao-da"><p style="margin-top:3px;margin-left:7px;"><i><?php echo $this->lang->line("whatpast")?></i></p>
                    </div>
                </li>
			    <li class="current-fix">
                    <div id="xietiao-xiao"><p style="margin-left:25px;margin-top:3px;"><i><?php echo $this->lang->line("readpast")?></i></p>
                    </div>
                </li>
            </ul>
            <hr style="margin-top:-2px;width:408px;margin-left:24px;float:left;" />
            <div class="tab_box">
				       <div>
							<form id = "pastl"  method="post"  action = "<?php echo base_url("/letterctl/insertLetterToPast")?>"  style = "height:100%; float:left;margin-top:10px;margin-left:35px;">
							        <fieldset>
							          <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" >
							            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
							            <div class="controls">
							              <input type="text"  onfocus="fop();" style = "width:380px;height:30px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($pdata["email"]!=NULL) echo $pdata["email"]; echo set_value('email'); ?>">
										<span class="help-inline"><?php echo form_error('email')?></span>
							            </div>
							          </div>

									  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
							            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
							            <div class="controls">
							              <input type="text" onfocus="fop();" style = "width:380px;height:30px;" value = "<?php if ($pdata["title"]!=NULL) echo $pdata["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
							            	<span class="help-inline"><?php echo form_error('title')?></span>
							            </div>
							          </div>

									<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>">
										<div class="controls">
											<div id="myEditor"></div>
										
											
												<span class="help-inline"><?php echo form_error('content')?></span>
										</div>
									</div>

									<a href = "#" onClick="changeurlsubmit(1);"><span style = "float:right" ><?php echo $this->lang->line("full")?></span></a>

									   <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>" style = "margin-bottom:1px;">
								            <div class="controls" >
												<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>
													month
								             		<select class="span1 "  name ="month" style = "width:55px;height:20px;">
										                <option value = "1" <?php if ($pdata["month"] == 1) echo 'selected';?> >Jan</option>
										                <option value = "2"  <?php if ($pdata["month"] == 2) echo 'selected';?>>Feb</option>
										                <option value = "3"  <?php if ($pdata["month"] == 3) echo 'selected';?>>Mar</option>
										                <option value = "4" <?php if ($pdata["month"] == 4) echo 'selected';?>>Apr</option>
										                <option value = "5"  <?php if ($pdata["month"] == 5) echo 'selected';?>>May</option>
														 <option value = "6"  <?php if ($pdata["month"] == 6) echo 'selected';?>>Jun</option>
														 <option value = "7"  <?php if ($pdata["month"] == 7) echo 'selected';?>>Jul</option>
														 <option value = "8"  <?php if ($pdata["month"] == 8) echo 'selected';?>>Aug</option>
														 <option value = "9"  <?php if ($pdata["month"] == 9) echo 'selected';?>>Sep</option>
														 <option value = "10"  <?php if ($pdata["month"] == 10) echo 'selected';?>>Oct</option>
														 <option value = "11"  <?php if ($pdata["month"] == 11) echo 'selected';?>>Nov</option>
														 <option value = "12"  <?php if ($pdata["month"] == 12) echo 'selected';?>>Dec</option>
												    </select>
												day
											<select class="span1" name = "day" style = "width:45px;height:20px;">
											                <option <?php if ($pdata["month"] == 1) echo 'selected';?>>1</option>
											                <option <?php if ($pdata["month"] == 2) echo 'selected';?>>2</option>
											                <option <?php if ($pdata["month"] == 3) echo 'selected';?>>3</option>
											                <option <?php if ($pdata["month"] == 4) echo 'selected';?>>4</option>
											                <option <?php if ($pdata["month"] == 5) echo 'selected';?>>5</option>
															<option <?php if ($pdata["month"] == 6) echo 'selected';?>>6</option>
											                <option <?php if ($pdata["month"] == 7) echo 'selected';?>>7</option>
											                <option <?php if ($pdata["month"] == 8) echo 'selected';?>>8</option>
											                <option <?php if ($pdata["month"] == 9) echo 'selected';?>>9</option>
											                <option <?php if ($pdata["month"] == 10) echo 'selected';?>>10</option>
															<option <?php if ($pdata["month"] == 11) echo 'selected';?>>11</option>
											                <option <?php if ($pdata["month"] == 12) echo 'selected';?>>12</option>
											                <option <?php if ($pdata["month"] == 13) echo 'selected';?>>13</option>
											                <option <?php if ($pdata["month"] == 14) echo 'selected';?>>14</option>
											                <option <?php if ($pdata["month"] == 15) echo 'selected';?>>15</option>
															<option <?php if ($pdata["month"] == 16) echo 'selected';?>>16</option>
											                <option <?php if ($pdata["month"] == 17) echo 'selected';?>>17</option>
											                <option <?php if ($pdata["month"] == 18) echo 'selected';?>>18</option>
											                <option <?php if ($pdata["month"] == 19) echo 'selected';?>>19</option>
											                <option <?php if ($pdata["month"] == 20) echo 'selected';?>>20</option>
															<option <?php if ($pdata["month"] == 21) echo 'selected';?>>21</option>
											                <option <?php if ($pdata["month"] == 22) echo 'selected';?>>22</option>
											                <option <?php if ($pdata["month"] == 23) echo 'selected';?>>23</option>
											                <option <?php if ($pdata["month"] == 24) echo 'selected';?>>24</option>
											                <option <?php if ($pdata["month"] == 25) echo 'selected';?>>25</option>
														    <option <?php if ($pdata["month"] == 26) echo 'selected';?>>26</option>
											                <option <?php if ($pdata["month"] == 27) echo 'selected';?>>27</option>
											                <option <?php if ($pdata["month"] == 28) echo 'selected';?>>28</option>
															<option <?php if ($pdata["month"] == 29) echo 'selected';?>>29</option>
											                <option <?php if ($pdata["month"] == 30) echo 'selected';?>>30</option>
											                <option <?php if ($pdata["month"] == 31) echo 'selected';?>>31</option>
											     </select>
													year
													<input class="span1" name = "year"    onfocus="fop();" value = "<?php if ($pdata["year"]!=NULL) echo $pdata["year"]; echo set_value('year'); ?>" style = "width:50px;height:20px;">

													     </input>
													<span class="help-inline"><?php echo form_error('year')?></span>
								            </div>
								       </div>

									 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:0px;">
							            <label style = 'float: left;width: 110px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
							            <div class="controls" style = "display: inline-block;margin-left: 0;">
										 
							              <label class="radio">
							                <input type="radio" name="is_public" id="optionsRadios1" value="0" <?php if ($pdata["type"] == 0) echo  "checked=''"?>>
							                <?php echo $this->lang->line("private")?>
							              </label>
							              <label class="radio">
							                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($pdata["type"] == 1) echo  "checked=''"?> value="1">
						                     <?php echo $this->lang->line("public")?>
							              </label>
							            </div>
										<span class="help-inline"><?php echo form_error('is_public')?></span>
									  </div>

							    	<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>" style = "margin-bottom:0px;">
							            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a onClick="reloadcode1();">change image</a></label>
							            <div class="controls" style = "display: inline-block;margin-left: 0;padding-top:10px;" >
							              <img id = "safecode1" style = "height:25px;float:left" onClick="reloadcode1();" src="<?php echo base_url("showimg")?>">&nbsp;<input type="text" style = "width:60px;height:25px;" name = "passcode" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
							              <p class="help-block"></p>
							            </div>
							          </div>

									<div class="control-group" >
									         	<label class="control-label"  style = 'float:left'  for="optionsCheckbox">Checkbox</label>
									            <div class="controls">
									              <label class="checkbox" style = "display: inline-block;margin-left:10px;">
									                <input type="checkbox" id="optionsCheckbox" <?php if($pdata["is_abey"] == 1) echo  "checked=''"?> value="option1">
									                  yes
									              </label>
									            </div>
									 </div>
							        </fieldset>
									 <img  src="<?php if ($this->session->userdata("language") == 2) {
										echo base_url("static/img/sendtopast-wuyinying.png");
									} ?>" onClick="submitpast();" style="float:right;margin-top:-150px;margin-right:0px;">

									<img src="<?php if ($this->session->userdata("language") == 1) {
									 	echo base_url("static/img/sendtopastcn-wuyinying.png");
									}?>" onClick="submitpast();" style="float:right;margin-top:50px;">
									<img id="subimgp"  src="<?php echo base_url("static/img/lantiao.png")?>" style="display:none;margin-top:-50px;margin-left:210px;float:left;">
							      </form>
								 
						</div>
	
                <div class="hide">
						<ul>
							<?php foreach($pdata["pletters"] as $letter) {?>
								<li><span>▪</span><div class="kuai">
		                <p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b><?php echo $letter["title"]?></b></p>
		                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;"><?php echo strip_tags($letter["content"]);?></p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent <?php  $year=date('Y',time()); echo $year-$letter["year"];?>  years into the past, to Yestoday</p>
		            </div><hr style="border:dashed thin;width:408px;color:#cbcbcb;"></li>
							<?php }?>
					
						</ul>
					  <p style="font-family:Verdana;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p>
					
				</div>
                
         
            </div>
        </div>
         
            <p style="font-size:11px;font-family:Verdana;color:#2d2d2d;margin-top:15px;margin-left:100px;float:left;"><?php echo $this->lang->line("morethanpast")?></p>
            </div>
       
<div id="right-container">   
    <div id="rightkuang"  class="box demo1">
        <ul class="tab_menu">
             <li class="current">
                    <div id="xietiao-da"><i style="margin-top:3px;margin-left:7px;"><?php echo $this->lang->line("whatfuture")?></i>
                    </div>
                </li>
			    <li class="current-fix">
                    <div id="xietiao-xiao"><i style="margin-left:25px;margin-top:3px;"><?php echo $this->lang->line("readfuture")?></i>
                    </div>
                </li>
        </ul>
        <hr style="margin-top:-2px;width:408px;margin-right:21px;float:right;" />
        <div class="tab_box tab_box-fix" style = "margin-right:15px;">
            <div>
			   		<form id = "futurel"  method="post"  action = "<?php echo base_url("/letterctl/insertLetterToFuture")?>"  style = "height:100%; float:left;margin-top:10px;margin-left:35px;">
					        <fieldset>
				         	   <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" >
					            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
					            <div class="controls">
					              <input type="text"  onfocus="fof();" style = "width:380px;height:30px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($fdata["email"]!=NULL) echo $fdata["email"]; echo set_value('email'); ?>">
								<span class="help-inline"><?php echo form_error('email')?></span>
					            </div>
					          </div>

							  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
					            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
					            <div class="controls">
					              <input type="text"  onfocus="fof();"  style = "width:380px;height:30px;" value = "<?php if ($fdata["title"]!=NULL) echo $fdata["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
					            	<span class="help-inline"><?php echo form_error('title')?></span>
					            </div>
					          </div>

							<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>">
								<div class="controls">
									<div id="myEditor2"></div>
								
									<?php
					    				$content = $fdata["content"];
					  					if ($content != NULL)  echo "<script>editor.setContent('".$content."')</script>";
									?>
										<span class="help-inline"><?php echo form_error('content')?></span>
								</div>
							</div>

							<a href = "#" onClick="changeurlsubmit(2);"><span style = "float:right" ><?php echo $this->lang->line("full")?></span></a>

							 	 <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>" style = "margin-bottom:0px;">
							            <div class="controls" >
											<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>
												month
							             		<select class="span1 "  name ="month" style = "width:55px;height:20px;">
									                <option value = "1" <?php if ($fdata["month"] == 1) echo 'selected';?> >Jan</option>
									                <option value = "2"  <?php if ($fdata["month"] == 2) echo 'selected';?>>Feb</option>
									                <option value = "3"  <?php if ($fdata["month"] == 3) echo 'selected';?>>Mar</option>
									                <option value = "4" <?php if ($fdata["month"] == 4) echo 'selected';?>>Apr</option>
									                <option value = "5"  <?php if ($fdata["month"] == 5) echo 'selected';?>>May</option>
													 <option value = "6"  <?php if ($fdata["month"] == 6) echo 'selected';?>>Jun</option>
													 <option value = "7"  <?php if ($fdata["month"] == 7) echo 'selected';?>>Jul</option>
													 <option value = "8"  <?php if ($fdata["month"] == 8) echo 'selected';?>>Aug</option>
													 <option value = "9"  <?php if ($fdata["month"] == 9) echo 'selected';?>>Sep</option>
													 <option value = "10"  <?php if ($fdata["month"] == 10) echo 'selected';?>>Oct</option>
													 <option value = "11"  <?php if ($fdata["month"] == 11) echo 'selected';?>>Nov</option>
													 <option value = "12"  <?php if ($fdata["month"] == 12) echo 'selected';?>>Dec</option>
											    </select>
											day
										<select class="span1" name = "day" style = "width:45px;height:20px;">
										                <option <?php if ($fdata["day"] == 1) echo 'selected';?>>1</option>
										                <option <?php if ($fdata["day"] == 2) echo 'selected';?>>2</option>
										                <option <?php if ($fdata["day"] == 3) echo 'selected';?>>3</option>
										                <option <?php if ($fdata["day"] == 4) echo 'selected';?>>4</option>
										                <option <?php if ($fdata["day"] == 5) echo 'selected';?>>5</option>
														<option <?php if ($fdata["day"] == 6) echo 'selected';?>>6</option>
										                <option <?php if ($fdata["day"] == 7) echo 'selected';?>>7</option>
										                <option <?php if ($fdata["day"] == 8) echo 'selected';?>>8</option>
										                <option <?php if ($fdata["day"] == 9) echo 'selected';?>>9</option>
										                <option <?php if ($fdata["day"] == 10) echo 'selected';?>>10</option>
														<option <?php if ($fdata["day"] == 11) echo 'selected';?>>11</option>
										                <option <?php if ($fdata["day"] == 12) echo 'selected';?>>12</option>
										                <option <?php if ($fdata["day"] == 13) echo 'selected';?>>13</option>
										                <option <?php if ($fdata["day"] == 14) echo 'selected';?>>14</option>
										                <option <?php if ($fdata["day"] == 15) echo 'selected';?>>15</option>
														<option <?php if ($fdata["day"] == 16) echo 'selected';?>>16</option>
										                <option <?php if ($fdata["day"] == 17) echo 'selected';?>>17</option>
										                <option <?php if ($fdata["day"] == 18) echo 'selected';?>>18</option>
										                <option <?php if ($fdata["day"] == 19) echo 'selected';?>>19</option>
										                <option <?php if ($fdata["day"] == 20) echo 'selected';?>>20</option>
														<option <?php if ($fdata["day"] == 21) echo 'selected';?>>21</option>
										                <option <?php if ($fdata["day"] == 22) echo 'selected';?>>22</option>
										                <option <?php if ($fdata["day"] == 23) echo 'selected';?>>23</option>
										                <option <?php if ($fdata["day"] == 24) echo 'selected';?>>24</option>
										                <option <?php if ($fdata["day"] == 25) echo 'selected';?>>25</option>
													    <option <?php if ($fdata["day"] == 26) echo 'selected';?>>26</option>
										                <option <?php if ($fdata["day"] == 27) echo 'selected';?>>27</option>
										                <option <?php if ($fdata["day"] == 28) echo 'selected';?>>28</option>
														<option <?php if ($fdata["day"] == 29) echo 'selected';?>>29</option>
										                <option <?php if ($fdata["day"] == 30) echo 'selected';?>>30</option>
										                <option <?php if ($fdata["day"] == 31) echo 'selected';?>>31</option>
										     </select>
												year
												<input class="span1" name = "year"  value = "<?php if ($fdata["year"]!=NULL) echo $fdata["year"]; echo set_value('year'); ?>" style = "width:50px;height:20px;">

												     </input>
												<span class="help-inline"><?php echo form_error('year')?></span>
							            </div>
							       </div>

							 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:0px;">
					            <label style = 'float: left;width: 110px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
					            <div class="controls" style = "display: inline-block;margin-left: 0;">

					              <label class="radio">
					                <input type="radio" name="is_public" id="optionsRadios1" value="0" <?php if ($fdata["type"] == 0) echo  "checked=''"?>>
					                <?php echo $this->lang->line("private")?>
					              </label>
					              <label class="radio">
					                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($fdata["type"] == 1) echo  "checked=''"?> value="1">
				                     <?php echo $this->lang->line("public")?>
					              </label>

					            </div>
								<span class="help-inline"><?php echo form_error('is_public')?></span>
							  </div>

					    	 	<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>" style = "margin-bottom:0px;">
							            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a onClick="reloadcode2();">change image</a></label>
							            <div class="controls" style = "display: inline-block;margin-left: 0;padding-top:10px;">
							              <img id = "safecode2" style = "height:25px;float:left" onClick="reloadcode2();" src="<?php echo base_url("showimg")?>">&nbsp;<input type="text" style = "width:60px;height:25px;" name = "passcode" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
							              <p class="help-block"></p>
							            </div>
							          </div>
						

									<div class="control-group" >
									         	<label class="control-label"  style = 'float:left'  for="optionsCheckbox">Checkbox</label>
									            <div class="controls">
									              <label class="checkbox" style = "display: inline-block;margin-left:10px;">
									                <input type="checkbox" id="optionsCheckbox" <?php if($fdata["is_abey"] == 1) echo  "checked=''"?> value="option1">
									                  yes
									              </label>
									            </div>
									 </div>
					        </fieldset>
							<img onClick= "submitfuture();" src="<?php if ($this->session->userdata("language") == 2) {
								echo base_url("static/img/senttofuture-wuyinying.png");
							} ?>" style="float:right;margin-top:-140px;margin-right:0px;">
							<img onClick= "submitfuture();" src="<?php if ($this->session->userdata("language") == 1) {
							 	echo base_url("static/img/senttofuture-wuyinying.png");
							}?>" style="float:right;margin-top:-140px;margin-top:0px;">
							<img id="subimgf"  src="<?php echo base_url("static/img/hongtiao-wuyinying.png")?>" style="display:none;margin-top:-50px;margin-left:210px;float:left;">
					      </form>
			</div>
			<div  class="hide">
					<ul>
						<?php foreach($fdata["fletters"] as $letter) {?>
							<li><span>▪</span><div class="kuai">
	                <p style="font-family:Verdana;color:#ab0000;margin-left:24px;"><b><?php echo $letter["title"]?></b></p>
	                <p style="font-family:Verdana;color:#535455;margin-left:24px;"><?php echo strip_tags($letter["content"]);?></p>
	                <p style="font-family:Verdana;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent <?php  $year=date('Y',time()); echo $letter["year"]-$year;?>  years into the future, to Tomorrow</p>
	            </div><hr style="border:dashed thin;width:408px;color:#cbcbcb;"></li>
						<?php }?>
				
					</ul>
				  <p style="font-family:Verdana;font-size:7px;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p>
            </div>
    </div>            
       
    </div>

    <p style="font-size:11px;font-family:Verdana;color:#2d2d2d;margin-top:15px;margin-left:65px;float:left;"><?php echo $this->lang->line("morethanfuture")?></p>
</div>    
	<script type="text/javascript">
		 var editor = new baidu.editor.ui.Editor({
			 toolbars:[['Bold', 'Italic', 'Underline', 'StrikeThrough','ForeColor', 'BackColor','|','InsertOrderedList', 'InsertUnorderedList','|', 'InsertImage', 'Emotion','JustifyLeft', 'JustifyCenter', 'JustifyRight',  ]],
			UEDITOR_HOME_URL: '<?php echo base_url("static/ueditor").'/'?>',
			iframeCssUrl: '<?php echo base_url("static/ueditor/themes/default/iframe.css")?>',
			autoClearinitialContent: true,
			 imagePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
			 filePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
			initialContent: '<?php echo $this->lang->line("dearpast")?>', //初始化编辑器的内容
			minFrameHeight:110,
			maxFrameHeight: 120, //设置高度
			autoHeightEnabled:false,
			textarea: 'content' //设置提交时编辑器内容的名字，之前我们用的名字是默认的editorValue
		});
		editor.render("myEditor");
	</script>
		<script type="text/javascript">
			 var editor2 = new baidu.editor.ui.Editor({
				 toolbars:[['Bold', 'Italic', 'Underline', 'StrikeThrough','ForeColor', 'BackColor','|','InsertOrderedList', 'InsertUnorderedList','|', 'InsertImage', 'Emotion','JustifyLeft', 'JustifyCenter', 'JustifyRight',  ]],
				UEDITOR_HOME_URL: '<?php echo base_url("static/ueditor").'/'?>',
				iframeCssUrl: '<?php echo base_url("static/ueditor/themes/default/iframe.css")?>',
				autoClearinitialContent: true,
				 imagePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
				 filePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
				initialContent: '<?php echo $this->lang->line("dearfuture")?>', //初始化编辑器的内容
				minFrameHeight:110,
				maxFrameHeight: 120, //设置高度
				autoHeightEnabled:false,
				textarea: 'content' //设置提交时编辑器内容的名字，之前我们用的名字是默认的editorValue
			});
			editor2.render("myEditor2");
		</script>
	<script>
		$(document).ready(function(){
			$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px",	onClosed:function(){ location.reload(); }});
			
		});
	</script>
	<?php
		$content = $pdata["content"];
		if ($content != NULL)  echo "<script>editor.setContent('".$content."')</script>";
	?>
	<?php
		$content = $fdata["content"];
		if ($content != NULL)  echo "<script>editor2.setContent('".$content."')</script>";
	?>
<SCRIPT LANGUAGE="JavaScript">
        function reloadcode1(){
 			var d = new Date();
 			document.getElementById('safecode1').src="<?php echo base_url("showimg")?>"+"?d="+d.toString();
		}
		function reloadcode2(){
 			var d = new Date();
 			document.getElementById('safecode2').src="<?php echo base_url("showimg")?>"+"?d="+d.toString();
		}
		function fop() {
			document.getElementById('subimgp').style.display="";
			
		}
		function fof() {
			document.getElementById('subimgf').style.display="";

		}
		function changeurlsubmit(type) {
			var form;
			if (type == 1) {
				form = document.getElementById("pastl");
				form.action = "<?php echo base_url('welcome/fullfilldata/1/3')?>";
				editor.sync();
				
			} else {
				form = document.getElementById('futurel');
				form.action = "<?php echo base_url('welcome/fullfilldata/2/3')?>";
				editor2.sync();
			}
			form.submit();
		}
		function submitpast() {
			var form;
			form = document.getElementById('pastl'); 
			editor.sync();
			form.submit();
		}
		function submitfuture() {
			var form;
			form = document.getElementById('futurel');
			editor2.sync();
			form.submit();
		}
</script>    
    <div class="caitiao caitiao-fix"></div>
        <div id="footer">
            <div id="kuan"><img src="<?php echo base_url('static/img/index_fullscreen_27.jpg')?>"><hr style="margin-top:3px;float:left;width:1004px;" />
            <div id="copyright">Copyright © 2012 - pastletter labs - All rights reserved.</div>       
                <div id="sigetu">
                    <ul>
                        <img src="<?php echo base_url('static/img/index_fullscreen_31.jpg')?>">
                        <img src="<?php echo base_url('static/img/index_fullscreen_33.jpg')?>">
                        <img src="<?php echo base_url('static/img/index_fullscreen_35.jpg')?>">
                        <img src="<?php echo base_url('static/img/index_fullscreen_37.jpg')?>">
                    </ul>
                </div>
            </div>
        </div>
    
</body>
</html>
