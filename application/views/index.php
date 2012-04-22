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
		margin:auto;
		padding-top:40px;
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

	<script>
		$(document).ready(function(){
			$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px"});
		});
	</script>
<SCRIPT LANGUAGE="JavaScript">
        function reloadcode(){
			alert("hello");
 			var d = new Date();
 			document.getElementById('safecode').src="<?php echo base_url("showimg")?>"
		}
		function changeurlsubmit() {
			var form;
			form = document.getElementById("pastl");
			form.action = "<?php echo base_url('welcome/fullfilldata/0')?>"
			form.submit();
		}
</script>


<div id="container">
    <div id="banner">
        <div class="logo"><img src="<?php echo base_url('static/img/index_fullscreen_04.jpg')?>">
        </div>       
        <div class="jiantizhongwen"><p align="center"><a class="red" href="#">简体中文</a></p>
        </div>
        <div class="jiantizhongwen jiantizhongwen-fix"><p align="center">Logo in | sign up
        </div>
    </div>
    <div id="lantiao">
        <div id="biaoqian1" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("writeletter")?></i></b></a>
        </div>
        <div id="biaoqian2" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("readpast")?></i></b></a>
        </div>
        <div id="biaoqian3" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("readfuture")?></i></b></a>
        </div>
        <div id="biaoqian4" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("about")?></i></b></a>
        </div>
        <div id="biaoqian5" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("support")?></i></b></a>
        </div>
        <div id="biaoqian6" class="biaoqian"><a href="#"><b><i><?php echo $this->lang->line("connect")?></i></b></a>
        </div>
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
							              <input type="text" style = "width:380px;height:15px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($data["email"]!=NULL) echo $data["email"]; echo set_value('email'); ?>">
										<span class="help-inline"><?php echo form_error('email')?></span>
							            </div>
							          </div>

									  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
							            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
							            <div class="controls">
							              <input type="text" style = "width:380px;height:15px;" value = "<?php if ($data["title"]!=NULL) echo $data["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
							            	<span class="help-inline"><?php echo form_error('title')?></span>
							            </div>
							          </div>

									<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>">
										<div class="controls">
											<div id="myEditor"></div>
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
											<?php
							    				$content = $data["content"];
							  					if ($content != NULL)  echo "<script>editor.setContent('".$content."')</script>";
											?>
												<span class="help-inline"><?php echo form_error('content')?></span>
										</div>
									</div>

									<a href = "#" onClick="changeurlsubmit();"><span style = "float:right" ><?php echo $this->lang->line("full")?></span></a>

									   <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>">
								            <div class="controls" >
												<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>
													month
								             		<select class="span1 "  name ="month" style = "width:55px;height:20px;">
										                <option value = "1" <?php if ($data["month"] == 1) echo 'selected';?> >Jan</option>
										                <option value = "2"  <?php if ($data["month"] == 2) echo 'selected';?>>Feb</option>
										                <option value = "3"  <?php if ($data["month"] == 3) echo 'selected';?>>Mar</option>
										                <option value = "4" <?php if ($data["month"] == 4) echo 'selected';?>>Apr</option>
										                <option value = "5"  <?php if ($data["month"] == 5) echo 'selected';?>>May</option>
														 <option value = "6"  <?php if ($data["month"] == 6) echo 'selected';?>>Jun</option>
														 <option value = "7"  <?php if ($data["month"] == 7) echo 'selected';?>>Jul</option>
														 <option value = "8"  <?php if ($data["month"] == 8) echo 'selected';?>>Aug</option>
														 <option value = "9"  <?php if ($data["month"] == 9) echo 'selected';?>>Sep</option>
														 <option value = "10"  <?php if ($data["month"] == 10) echo 'selected';?>>Oct</option>
														 <option value = "11"  <?php if ($data["month"] == 11) echo 'selected';?>>Nov</option>
														 <option value = "12"  <?php if ($data["month"] == 12) echo 'selected';?>>Dec</option>
												    </select>
												day
											<select class="span1" name = "day" style = "width:45px;height:20px;">
											                <option <?php if ($data["month"] == 1) echo 'selected';?>>1</option>
											                <option <?php if ($data["month"] == 2) echo 'selected';?>>2</option>
											                <option <?php if ($data["month"] == 3) echo 'selected';?>>3</option>
											                <option <?php if ($data["month"] == 4) echo 'selected';?>>4</option>
											                <option <?php if ($data["month"] == 5) echo 'selected';?>>5</option>
															<option <?php if ($data["month"] == 6) echo 'selected';?>>6</option>
											                <option <?php if ($data["month"] == 7) echo 'selected';?>>7</option>
											                <option <?php if ($data["month"] == 8) echo 'selected';?>>8</option>
											                <option <?php if ($data["month"] == 9) echo 'selected';?>>9</option>
											                <option <?php if ($data["month"] == 10) echo 'selected';?>>10</option>
															<option <?php if ($data["month"] == 11) echo 'selected';?>>11</option>
											                <option <?php if ($data["month"] == 12) echo 'selected';?>>12</option>
											                <option <?php if ($data["month"] == 13) echo 'selected';?>>13</option>
											                <option <?php if ($data["month"] == 14) echo 'selected';?>>14</option>
											                <option <?php if ($data["month"] == 15) echo 'selected';?>>15</option>
															<option <?php if ($data["month"] == 16) echo 'selected';?>>16</option>
											                <option <?php if ($data["month"] == 17) echo 'selected';?>>17</option>
											                <option <?php if ($data["month"] == 18) echo 'selected';?>>18</option>
											                <option <?php if ($data["month"] == 19) echo 'selected';?>>19</option>
											                <option <?php if ($data["month"] == 20) echo 'selected';?>>20</option>
															<option <?php if ($data["month"] == 21) echo 'selected';?>>21</option>
											                <option <?php if ($data["month"] == 22) echo 'selected';?>>22</option>
											                <option <?php if ($data["month"] == 23) echo 'selected';?>>23</option>
											                <option <?php if ($data["month"] == 24) echo 'selected';?>>24</option>
											                <option <?php if ($data["month"] == 25) echo 'selected';?>>25</option>
														    <option <?php if ($data["month"] == 26) echo 'selected';?>>26</option>
											                <option <?php if ($data["month"] == 27) echo 'selected';?>>27</option>
											                <option <?php if ($data["month"] == 28) echo 'selected';?>>28</option>
															<option <?php if ($data["month"] == 29) echo 'selected';?>>29</option>
											                <option <?php if ($data["month"] == 30) echo 'selected';?>>30</option>
											                <option <?php if ($data["month"] == 31) echo 'selected';?>>31</option>
											     </select>
													year
													<input class="span1" name = "year"  value = "<?php if ($data["year"]!=NULL) echo $data["year"]; echo set_value('year'); ?>" style = "width:50px;height:15px;">

													     </input>
													<span class="help-inline"><?php echo form_error('year')?></span>
								            </div>
								       </div>

									 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>">
							            <label style = 'float: left;width: 110px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
							            <div class="controls" style = "display: inline-block;margin-left: 0;">
										  <?php if($data["type"] == NULL) {?>
							              <label class="radio">
							                <input type="radio" name="is_public" id="optionsRadios1" value="0" <?php if ($data["type"] == 0) echo  "checked=''"?>>
							                <?php echo $this->lang->line("private")?>
							              </label>
							              <label class="radio">
							                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($data["type"] == 1) echo  "checked=''"?> value="1">
						                     <?php echo $this->lang->line("public")?>
							              </label>
									      <?php }?>
							            </div>
										<span class="help-inline"><?php echo form_error('is_public')?></span>
									  </div>

							    	<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>">
							            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a style="font-size:5px;" onClick="reloadcode();">change image</a></label>
							            <div class="controls" style = "display: inline-block;margin-left: 0;padding-top:10px;">
							              <img id = "safecode" style = "height:20px;" onClick="reloadcode();" src="<?php echo base_url("showimg")?>">&nbsp;<input type="text" style = "width:50px;height:7px;padding-top:12px;" name = "passcode" class="input-xlarge" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
							              <p class="help-block"></p>
							            </div>
							          </div>

									<div class="control-group" style = "margin-top:-20px;">
									         	<label class="control-label"  style = 'float: left;width: 110px; padding-top: 5px;'  for="optionsCheckbox">Checkbox</label>
									            <div class="controls">
									              <label class="checkbox" style = "display: inline-block;margin-left: 0;padding-top:10px;">
									                <input type="checkbox" id="optionsCheckbox" <?php if($data["is_abey"] == 1) echo  "checked=''"?> value="option1">
									                  yes
									              </label>
									            </div>
									 </div>
  <button type="submit" class="btn btn-primary">Save changes</button>
							        </fieldset>
							      </form>
						</div>
	
                <div class="hide">
						<ul>
							<?php foreach($data["pletters"] as $letter) {?>
								<li><span>▪</span><div class="kuai">
		                <p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b><?php echo $letter["title"]?></b></p>
		                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;"><?php echo strip_tags($letter["content"]);?></p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent <?php  $year=date('Y',time()); echo $year-$letter["year"];?>  years into the past, to Yestoday</p>
		            </div><hr style="border:dashed thin;width:408px;color:#cbcbcb;"></li>
							<?php }?>
					
						</ul>
					  <p style="font-family:Verdana;font-size:7px;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p>
					
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
			   		<form id = "pastl"  method="post"  action = "<?php echo base_url("/letterctl/insertLetterToPast")?>"  style = "height:100%; float:left;margin-top:10px;margin-left:35px;">
					        <fieldset>
					          <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" >
					            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
					            <div class="controls">
					              <input type="text" style = "width:380px;height:15px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($data["email"]!=NULL) echo $data["email"]; echo set_value('email'); ?>">
								<span class="help-inline"><?php echo form_error('email')?></span>
					            </div>
					          </div>

							  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
					            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
					            <div class="controls">
					              <input type="text" style = "width:380px;height:15px;" value = "<?php if ($data["title"]!=NULL) echo $data["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
					            	<span class="help-inline"><?php echo form_error('title')?></span>
					            </div>
					          </div>

							<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>">
								<div class="controls">
									<div id="myEditor2"></div>
									<script type="text/javascript">
										 var editor = new baidu.editor.ui.Editor({
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
										editor.render("myEditor2");
									</script>
									<?php
					    				$content = $data["content"];
					  					if ($content != NULL)  echo "<script>editor.setContent('".$content."')</script>";
									?>
										<span class="help-inline"><?php echo form_error('content')?></span>
								</div>
							</div>

							<a href = "#" onClick="changeurlsubmit();"><span style = "float:right" ><?php echo $this->lang->line("full")?></span></a>

							 	<div class="control-group  <?php if (form_error('year') != null) echo 'error'?>">
							            <div class="controls" >
											<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>
												month
							             		<select class="span1 "  name ="month" style = "width:55px;height:20px;">
									                <option value = "1" <?php if ($data["month"] == 1) echo 'selected';?> >Jan</option>
									                <option value = "2"  <?php if ($data["month"] == 2) echo 'selected';?>>Feb</option>
									                <option value = "3"  <?php if ($data["month"] == 3) echo 'selected';?>>Mar</option>
									                <option value = "4" <?php if ($data["month"] == 4) echo 'selected';?>>Apr</option>
									                <option value = "5"  <?php if ($data["month"] == 5) echo 'selected';?>>May</option>
													 <option value = "6"  <?php if ($data["month"] == 6) echo 'selected';?>>Jun</option>
													 <option value = "7"  <?php if ($data["month"] == 7) echo 'selected';?>>Jul</option>
													 <option value = "8"  <?php if ($data["month"] == 8) echo 'selected';?>>Aug</option>
													 <option value = "9"  <?php if ($data["month"] == 9) echo 'selected';?>>Sep</option>
													 <option value = "10"  <?php if ($data["month"] == 10) echo 'selected';?>>Oct</option>
													 <option value = "11"  <?php if ($data["month"] == 11) echo 'selected';?>>Nov</option>
													 <option value = "12"  <?php if ($data["month"] == 12) echo 'selected';?>>Dec</option>
											    </select>
											day
										<select class="span1" name = "day" style = "width:45px;height:20px;">
										                <option <?php if ($data["month"] == 1) echo 'selected';?>>1</option>
										                <option <?php if ($data["month"] == 2) echo 'selected';?>>2</option>
										                <option <?php if ($data["month"] == 3) echo 'selected';?>>3</option>
										                <option <?php if ($data["month"] == 4) echo 'selected';?>>4</option>
										                <option <?php if ($data["month"] == 5) echo 'selected';?>>5</option>
														<option <?php if ($data["month"] == 6) echo 'selected';?>>6</option>
										                <option <?php if ($data["month"] == 7) echo 'selected';?>>7</option>
										                <option <?php if ($data["month"] == 8) echo 'selected';?>>8</option>
										                <option <?php if ($data["month"] == 9) echo 'selected';?>>9</option>
										                <option <?php if ($data["month"] == 10) echo 'selected';?>>10</option>
														<option <?php if ($data["month"] == 11) echo 'selected';?>>11</option>
										                <option <?php if ($data["month"] == 12) echo 'selected';?>>12</option>
										                <option <?php if ($data["month"] == 13) echo 'selected';?>>13</option>
										                <option <?php if ($data["month"] == 14) echo 'selected';?>>14</option>
										                <option <?php if ($data["month"] == 15) echo 'selected';?>>15</option>
														<option <?php if ($data["month"] == 16) echo 'selected';?>>16</option>
										                <option <?php if ($data["month"] == 17) echo 'selected';?>>17</option>
										                <option <?php if ($data["month"] == 18) echo 'selected';?>>18</option>
										                <option <?php if ($data["month"] == 19) echo 'selected';?>>19</option>
										                <option <?php if ($data["month"] == 20) echo 'selected';?>>20</option>
														<option <?php if ($data["month"] == 21) echo 'selected';?>>21</option>
										                <option <?php if ($data["month"] == 22) echo 'selected';?>>22</option>
										                <option <?php if ($data["month"] == 23) echo 'selected';?>>23</option>
										                <option <?php if ($data["month"] == 24) echo 'selected';?>>24</option>
										                <option <?php if ($data["month"] == 25) echo 'selected';?>>25</option>
													    <option <?php if ($data["month"] == 26) echo 'selected';?>>26</option>
										                <option <?php if ($data["month"] == 27) echo 'selected';?>>27</option>
										                <option <?php if ($data["month"] == 28) echo 'selected';?>>28</option>
														<option <?php if ($data["month"] == 29) echo 'selected';?>>29</option>
										                <option <?php if ($data["month"] == 30) echo 'selected';?>>30</option>
										                <option <?php if ($data["month"] == 31) echo 'selected';?>>31</option>
										     </select>
												year
												<input class="span1" name = "year"  value = "<?php if ($data["year"]!=NULL) echo $data["year"]; echo set_value('year'); ?>" style = "width:50px;height:15px;">

												     </input>
												<span class="help-inline"><?php echo form_error('year')?></span>
							            </div>
							       </div>

							 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>">
					            <label style = 'float: left;width: 110px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
					            <div class="controls" style = "display: inline-block;margin-left: 0;">
								  <?php if($data["type"] == NULL) {?>
					              <label class="radio">
					                <input type="radio" name="is_public" id="optionsRadios1" value="0" <?php if ($data["type"] == 0) echo  "checked=''"?>>
					                <?php echo $this->lang->line("private")?>
					              </label>
					              <label class="radio">
					                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($data["type"] == 1) echo  "checked=''"?> value="1">
				                     <?php echo $this->lang->line("public")?>
					              </label>
							      <?php }?>
					            </div>
								<span class="help-inline"><?php echo form_error('is_public')?></span>
							  </div>

					    	<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>">
					            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a style="font-size:5px;" onClick="reloadcode();">change image</a></label>
					            <div class="controls" style = "display: inline-block;margin-left: 0;padding-top:10px;">
					              <img id = "safecode" style = "height:20px;" onClick="reloadcode();" src="<?php echo base_url("showimg")?>">&nbsp;<input type="text" style = "width:50px;height:7px;padding-top:12px;" name = "passcode" class="input-xlarge" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
					              <p class="help-block"></p>
					            </div>
					          </div>

							<div class="control-group" style = "margin-top:-20px;">
							         	<label class="control-label"  style = 'float: left;width: 110px; padding-top: 5px;'  for="optionsCheckbox">Checkbox</label>
							            <div class="controls">
							              <label class="checkbox" style = "display: inline-block;margin-left: 0;padding-top:10px;">
							                <input type="checkbox" id="optionsCheckbox" <?php if($data["is_abey"] == 1) echo  "checked=''"?> value="option1">
							                  yes
							              </label>
							            </div>
							 </div>
<button type="submit" class="btn btn-primary">Save changes</button>
					        </fieldset>
					      </form>
			</div>
			<div  class="hide">
				<ul>
					<li><span>▪</span>
                        <div class="kuai"><p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b>Dear FutureMe</b></p>
<p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just remember how TERRIBLE that Florida ...</p><p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent 2 years into the future, to Yestoday</p>
                        </div>
                        <hr style="border:dashed thin;width:408px;color:#cbcbcb;">
                    </li>
					<li><span>▪</span> 
                        <div class="kuai"><p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b>Dear FutureMe</b></p>
<p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just remember how TERRIBLE that Florida ...</p><p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent 2 years into the future, to Yestoday</p>    
                        </div>
                        <hr style="border:dashed thin;width:408px;color:#cbcbcb;">
                    </li>
						<li><span>▪</span>
                        <div class="kuai"><p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b>Dear FutureMe</b></p>
<p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just remember how TERRIBLE that Florida ...</p><p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent 2 years into the future, to Yestoday</p>
                        </div>
                        <hr style="border:dashed thin;width:408px;color:#cbcbcb;">
                    </li>
						<li><span>▪</span>
                        <div class="kuai"><p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b>Dear FutureMe</b></p>
<p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just remember how TERRIBLE that Florida ...</p><p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent 2 years into the future, to Yestoday</p>
                        </div>
                        <hr style="border:dashed thin;width:408px;color:#cbcbcb;">
                    </li>
				</ul>
				  <p style="font-family:Verdana;font-size:7px;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p>
            </div>
    </div>            
       
    </div>
    <p style="font-size:11px;font-family:Verdana;color:#2d2d2d;margin-top:15px;margin-left:65px;float:left;"><?php echo $this->lang->line("morethanfuture")?></p>
</div>        
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
