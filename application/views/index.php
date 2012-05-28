<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PastLetter</title>

<link href = '<?php echo base_url('static/css/bootform.css')?>' rel="stylesheet">
<style type="text/css">


*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{background:#e3e3e3;height:100%;padding-bottom:30px;}
a{color:#344e78;text-decoration:none;}
a:hover{text-decoration:none;color:#ab0000;}
#wrapper{width:980px;margin:0 auto;background:#f8f8f8;padding:20px 20px 50px;border-radius:5px;-moz-border-radius:5px;}
#wrapper h3{color:#333;font-size:14px;text-align:center;margin:20px 0;}
/* box */
.box{width:400px;margin-top:30px;font:normal normal 12px/24px "Microsoft yahei", Arial;background:#FFF;float:left;}
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
<link href="<?php echo base_url('static/css/redmond/jquery-ui-1.8.20.custom.css')?>" rel="stylesheet">
<style type="text/css">
    body{
		width:1004px;
		height:945px;
		padding-top: 30px;
		margin:auto;
		background-color:#94bfcf;

	}
	
</style>

<script>
function  window.onbeforeunload()  {  
 if  (event.clientX>document.body.clientWidth  &&  event.clientY<0 ||event.altKey)  
     window.event.returnValue="确定要退出本页吗？";  
 }
</script>
</head>

<body>
	<script src="<?php echo base_url('static/js/jquery-1.7.1.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_config.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_all.js")?>"></script>
	<link rel="stylesheet" href="<?php echo base_url("static/ueditor/themes/default/ueditor.css")?>"/>
	<link rel="stylesheet" href="<?php echo base_url("static/css/colorbox.css")?>" />
	<script src="<?php echo base_url("static/js/jquery.colorbox-min.js")?>"></script>
	<script src="<?php echo base_url("static/js/jquery.cookie.js")?>"></script>
<script src="<?php echo base_url("static/js/jquery-ui-1.8.20.custom.min.js")?>"></script>
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

	
	var myDatefmin = new Date();
	myDatefmin.setMonth(myDatefmin.getMonth()+1);
	$(function() {
		$( "#datepickerf" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: myDatefmin,
			maxDate: "+60Y",
			beforeShow: function () {
			                setTimeout(
			                    function () {
			                        $('#ui-datepicker-div').css("z-index", 1000);
			                    }, 100
			                );
			            }
		});
		$( "#datepickerp" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: myDatefmin,
			maxDate: "+60Y",
			beforeShow: function () {
			                setTimeout(
			                    function () {
			                        $('#ui-datepicker-div').css("z-index", 1000);
			                    }, 100
			                );
			            }
		});
	});
</script>



<div id="container">
    <div id="banner">
      	 <div class="logo"><a><img src="<?php if ($this->session->userdata('language') == 2)echo base_url('static/img/index_fullscreen_04.jpg'); else echo base_url('static/img/logo_cn.jpg');?> "></a>
	        </div> 
	 	<form style = "float:left;position:absolute;left:500px;top:10px;height:30px;"><input style="background-image:url(<?php echo base_url("static/img/input.png") ?>);width:224px;" /></form>
        <div class="jiantizhongwen"><p style = "float:right;margin-right:10px;"><?php if ($this->session->userdata("language") == 1){ ?>
        	<a class="red" href="<?php echo base_url("/languagectl/setlanguage/2" ); ?>" >English</a>
        <?php } else { ?>
			<a href="<?php echo base_url("/languagectl/setlanguage/1"); ?>" style = "font-family:<?php if ($this->session->userdata("language") == 1) echo "宋体"; else echo "Georgia";  ?>;">简体中文</a>
		<?php } ?></p>
        </div>
         <div style = "float:right;margin-right:10px;margin-top:-10px;font-size:13px;">
	<?php if ($this->session->userdata("username") != NULL) { ?>
		<span style = "width:200px;font-family:<?php if ($this->session->userdata("language") == 1) echo "宋体"; else echo "Georgia"; ?>;"><?php echo $this->lang->line('welcome');?>,<?php echo $this->session->userdata("username"); ?>&nbsp;|&nbsp;<a href="<?php echo base_url("/letterctl/listUserLetter/1"); ?>"><?php echo $this->lang->line('myaccount');?></a>|<a href="<?php echo base_url("/userctl/userlogout"); ?>"><?php echo $this->lang->line('logout'); ?></a></span>
	<?php } else { ?>
	<a class='iframe' href="<?php echo base_url("/userctl/userlogin")?>"><?php echo $this->lang->line("login")?></a> &nbsp;| &nbsp;<a class='iframe' href="<?php echo base_url("/userctl/usersign")?>"><?php echo $this->lang->line("sign")?></a>  <?php } ?></div>
    </div>
    <div id="lantiao">
  		 <div id="biaoqian1" class="biaoqian" ><a href="<?php echo base_url("/")?>" style="color:#ab0000;"><b><i><?php echo $this->lang->line("writeletter")?></i></b></a></div>
            <div id="biaoqian2" class="biaoqian"><a href="<?php echo base_url("/letterctl/listPublicLetterToPast/1")?>"><b><i><?php echo $this->lang->line("readpast")?></i></b></a></div>
            <div id="biaoqian3" class="biaoqian"><a href="<?php echo base_url("/letterctl/listPublicLetterToFuture/1")?>"><b><i><?php echo $this->lang->line("readfuture")?></i></b></a></div>
            <div id="biaoqian4" class="biaoqian"><a href="<?php echo base_url("/welcome/about")?>"><b><i><?php echo $this->lang->line("about")?></i></b></a></div>
            <div id="biaoqian5" class="biaoqian"><a href="<?php echo base_url("/welcome/support")?>"><b><i><?php echo $this->lang->line("support")?></i></b></a></div>
            <div id="biaoqian6" class="biaoqian"><a href="<?php echo base_url("/welcome/connect")?>"><b><i><?php echo $this->lang->line("connect")?></i></b></a></div>
    </div>
    <div class="caitiao">
    </div>
    <div id="left-container">
        <div id="leftkuang" class="box demo2" >
            <ul class="tab_menu">
                <li class="current">
                    <div id="xietiao-da"><p style="margin-left:7px;"><i><?php echo $this->lang->line("whatpast")?></i></p>
                    </div>
                </li>
			    <li class="current-fix">
                    <div id="xietiao-xiao"><p style="margin-left:10px;"><i><?php echo $this->lang->line("readpast")?></i></p>
                    </div>
                </li>
            </ul>
            <hr style="margin-top:-2px;width:420px;margin-left:24px;float:left;" />
            <div class="tab_box">
				       <div>
							<form id = "pastl"  method="post"  action = "<?php echo base_url("/letterctl/insertLetterToPast")?>"  style = "height:100%; float:left;margin-top:10px;margin-left:35px;font-family:<?php if ($this->session->userdata("language") == 1) echo "微软雅黑"; else echo "Georgia";  ?>;font-style: italic;" >
							        <fieldset>
							         	<div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" style = "margin-bottom:-2px;margin-top: -8px;">
								            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
								            <div class="controls">
								              <input type="text"  onfocus="fop();" style = "width:409px;height:20px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($pdata["email"]!=NULL) echo $pdata["email"]; echo set_value('email'); ?>">
											<span class="help-inline"><?php echo form_error('email')?></span>
								            </div>
								          </div>

										  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
								            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
								            <div class="controls">
								              <input type="text" onfocus="fop();" style = "width:409px;height:20px;" value = "<?php if ($pdata["title"]!=NULL) echo $pdata["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
								            	<span class="help-inline"><?php echo form_error('title')?></span>
								            </div>
								          </div>

									<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>" style = "margin-top:-14px;">
										<div class="controls">
											<div id="myEditor"></div>
										
											
												<span class="help-inline"><?php echo form_error('content')?></span>
										</div>
									</div>

								
									<a href = "#" onClick="changeurlsubmit(1);"><span style = "float:right;font-style:normal;" ><?php echo $this->lang->line("full")?></span></a>

									   <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>" style = "margin-bottom:1px;">
								            <div class="controls" >
												<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>
													<input class="span1" name = "year" id = "datepickerp"  onfocus="fop();" value = "<?php if ($pdata["year"]!=NULL) echo $pdata["year"]; echo set_value('year'); ?>" style = "margin-left:50px;width:140px;height:15px;" readonly="readonly"/>

													     </input>
													<span class="help-inline"><?php echo form_error('year')?></span>
								            </div>
								       </div>

									 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:0px;">
							            <label style = 'float: left;width: 120px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
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
								            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a onClick="reloadcode1();"><?php echo $this->lang->line('changeimage'); ?></a></label>
								            <div class="controls" style = "display: inline-block;margin-left: 15px;padding-top:10px;" >
								              <img id = "safecode1" style = "height:25px;float:left" onClick="reloadcode1();" src="<?php echo base_url("showimg/user")?>">&nbsp;<input type="text" style = "width:60px;height:15px;" name = "passcode" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
								              <p class="help-block"></p>
								            </div>
								          </div>

									<div class="control-group" >
									         	<label class="control-label"  style = 'float:left'  for="optionsCheckbox"><?php echo $this->lang->line('abeyuser'); ?></label>
									            <div class="controls">
									              <label class="checkbox" style = "display: inline-block;margin-left:10px;position:relative;top:-4px;">
									                <input type="checkbox" id="optionsCheckbox" style = "margin-left:17px;"<?php if($pdata["is_abey"] == 1) echo  "checked=''"?> value="option1">
									                  <?php echo $this->lang->line('yes'); ?>  <a class="iframe2" href="<?php echo base_url("/letterctl/showUserAgreement") ?>">   <?php echo $this->lang->line('useragree'); ?></a>
									              </label>
									            </div>
									 </div>
							        </fieldset>
									<img onClick= "submitpast();" src="<?php echo base_url("static/img/sendtopast-wuyinying.png"); ?>" style="<?php if ($this->session->userdata("language")==1){ echo "display:none;"; } else { echo ""; } ?>float:right;margin-top:-130px;margin-right:-20px;">
									<img onClick= "submitpast();" src="<?php echo base_url("static/img/sendtopastcn-wuyinying.png");?>" style="<?php if ($this->session->userdata("language")==2){ echo "display:none;"; } else { echo ""; } ?>float:right;margin-top:-130px;margin-right:-20px;">
					
							
							
									
									<img id="subimgp"  src="<?php echo base_url("static/img/lantiao.png")?>" style="display:none;position:relative;left:200px;top:-10px;float:left;">
							      </form>
								 
						</div>
	
                <div class="hide" >
						<ul style = "margin-top:10px;">
							<?php foreach($pdata["pletters"] as $letter) {?>
								<li><span>▪</span><div class="kuai">
		                <p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b><?php echo $letter["title"]?></b></p>
		                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;overflow: hidden; /*自动隐藏文字*/
					    text-overflow: ellipsis;/*文字隐藏后添加省略号*/
					    width: 35em;/*不允许出现半汉字截断*/height:6em;
					   "><?php echo strip_tags($letter["content"]);?></p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;"><?php echo $this->lang->line('sent'); ?> <?php  $year=date('Y',time()); echo $letter["year"]-$year;?> <?php echo $this->lang->line('manyyearslater'); ?></p>
		            </div><hr style="border:dashed thin;width:408px;color:#cbcbcb;margin-left:30px;"></li>
							<?php }?>
					
						</ul>
					  <a href="<?php echo base_url("/letterctl/listPublicLetterToPast/1")?>"><p style="font-family:Verdana;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p></a>
					
				</div>
                
         
            </div>
        </div>
         
            <p style="font-size:11px;font-family:Verdana;color:#2d2d2d;margin-top:15px;margin-left:100px;float:left;"><?php echo $this->lang->line("morethan")?>&nbsp;<?php $count=$pdata["count"];$count = $count[0]; $count=$count["amount"];echo $count;  ?>&nbsp;<?php echo $this->lang->line('lettertopast'); ?></p>
            </div>
       
<div id="right-container">   
    <div id="rightkuang"  class="box demo1">
        <ul class="tab_menu">
             <li class="current">
                    <div id="xietiao-da"><i style="margin-top:3px;margin-left:7px;"><?php echo $this->lang->line("whatfuture")?></i>
                    </div>
                </li>
			    <li class="current-fix">
                    <div id="xietiao-xiao"><i style="margin-left:15px;margin-top:3px;"><?php echo $this->lang->line("readfuture")?></i>
                    </div>
                </li>
        </ul>
        <hr style="margin-top:-2px;width:420px;margin-right:30px;float:right;" />
        <div class="tab_box tab_box-fix" style = "margin-right:15px;">
            <div>
			   		<form id = "futurel"  method="post"  action = "<?php echo base_url("/letterctl/insertLetterToFuture")?>"  style = "height:100%; float:left;margin-top:10px;margin-left:35px;font-family:<?php if ($this->session->userdata("language") == 1) echo "微软雅黑"; else echo "Georgia";  ?>;font-style: italic;">
					        <fieldset>
				         	   <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" style = "margin-bottom:0px;margin-top:-7px;" >
					            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
					            <div class="controls">
					              <input type="text"  onfocus="fof();" style = "width:409px;height:20px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($fdata["email"]!=NULL) echo $fdata["email"]; echo set_value('email'); ?>">
								<span class="help-inline"><?php echo form_error('email')?></span>
					            </div>
					          </div>

							  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>" style = "margin-top:-3px;">
					            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
					            <div class="controls">
					              <input type="text"  onfocus="fof();"  style = "width:409px;height:20px;" value = "<?php if ($fdata["title"]!=NULL) echo $fdata["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
					            	<span class="help-inline"><?php echo form_error('title')?></span>
					            </div>
					          </div>

							<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>" style = "margin-top:-14px;">
								<div class="controls">
									<div id="myEditor2"></div>
								
									<?php
					    				$content = $fdata["content"];
					  					if ($content != NULL)  echo "<script>editor.setContent('".$content."')</script>";
									?>
										<span class="help-inline"><?php echo form_error('content')?></span>
								</div>
							</div>

									<a href = "#" onClick="changeurlsubmit(2);"><span style = "float:right;font-style:normal;" ><?php echo $this->lang->line("full")?></span></a>

									 	 <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>" style = "margin-bottom:0px;">
									            <div class="controls" >
													<label class="control-label"  style = 'float: left;width: 70px;padding-top:3px;' for="select01"><?php echo  $this->lang->line('deliver')?></label>

														<input class="span1" name = "year"  id = "datepickerf" value = "<?php if ($fdata["year"]!=NULL) echo $fdata["year"]; echo set_value('year'); ?>" style = "margin-left:50px;width:140px;height:15px;" readonly="readonly" />

														     </input>
														<span class="help-inline"><?php echo form_error('year')?></span>
									            </div>
									       </div>
							
										<div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:0px;">
								            <label style = 'float: left;width: 120px; padding-top: 5px;'  class="control-label"><?php echo $this->lang->line("maketo")?></label>
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
										            <label class="control-label" style = 'float: left;width: 110px; padding-top: 5px;' for="input03"><?php echo $this->lang->line("human")?><br /><a onClick="reloadcode2();"><?php echo $this->lang->line('changeimage'); ?></a></label>
										            <div class="controls" style = "display: inline-block;margin-left: 0;margin-left:13px;padding-top:10px;">
										              <img id = "safecode2" style = "height:25px;float:left" onClick="reloadcode2();" src="<?php echo base_url("showimg/user")?>">&nbsp;<input type="text" style = "width:60px;height:15px;" name = "passcode" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
										              <p class="help-block"></p>
										            </div>
										          </div>
						
													<div class="control-group" >
													         	<label class="control-label"  style = 'float:left'  for="optionsCheckbox"><?php echo $this->lang->line('abeyuser'); ?></label>
													            <div class="controls">
													              <label class="checkbox" style = "display: inline-block;margin-left:10px;position:relative;top:-4px;">
													                <input type="checkbox" style = "margin-left:17px;" <?php if($fdata["is_abey"] == 1) echo  "checked=''"?> value="option1">
													                 <?php echo $this->lang->line('yes'); ?> <a class="iframe2" href="<?php echo base_url("/letterctl/showUserAgreement") ?>">   <?php echo $this->lang->line('useragree'); ?></a>
													              </label>
													            </div>
													 </div>
					        </fieldset>
							<img onClick= "submitfuture();" src="<?php echo base_url("static/img/sendtofuturecn-wuyinying.png"); ?>" style="<?php if ($this->session->userdata("language")==2){ echo "display:none;"; } else { echo ""; } ?>float:right;margin-top:-120px;margin-right:0px;">
							<img onClick= "submitfuture();" src="<?php echo base_url("static/img/senttofuture-wuyinying.png");?>" style="<?php if ($this->session->userdata("language")==1){ echo "display:none;"; } else { echo ""; } ?>float:right;margin-top:-120px;margin-right:0px;">
							<img id="subimgf"  src="<?php echo base_url("static/img/hongtiao-wuyinying.png")?>" style="display:none;position:relative;top:-10px;right:80px;float:right;">
					      </form>
			</div>
			<div  class="hide">
					<ul style = "margin-top:10px;">
						<?php foreach($fdata["fletters"] as $letter) {?>
							<li><span>▪</span><div class="kuai">
	                <p style="font-family:Verdana;color:#ab0000;margin-left:24px;"><b><?php echo $letter["title"]?></b></p>
	                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;overflow: hidden; /*自动隐藏文字*/
				    text-overflow: ellipsis;/*文字隐藏后添加省略号*/
				    width: 35em;/*不允许出现半汉字截断*/height:6em;
				   "><?php echo strip_tags($letter["content"]);?>...</p>
	                <p style="font-family:Verdana;color:#999999;margin-top:-9px;float:right;margin-right:5px;"><?php echo $this->lang->line('sent'); ?> <?php  $year=date('Y',time()); echo $letter["year"]-$year;?> <?php echo $this->lang->line('manyyearslater'); ?>
	            </div><hr style="border:dashed thin;width:408px;color:#cbcbcb;margin-left:30px;"></li>
						<?php }?>
				
					</ul>
			 <a href="<?php echo base_url("/letterctl/listPublicLetterToFuture/1")?>"><p style="font-family:Verdana;color:#1a7ba0;text-decoration:underline;float:right;margin-top:34px;">more</p></a>
            </div>
    </div>            
       
    </div>

     <p style="font-size:11px;font-family:Verdana;color:#2d2d2d;margin-top:15px;margin-left:100px;float:left;"><?php echo $this->lang->line("morethan")?>&nbsp;<?php $count=$fdata["count"];$count = $count[0]; $count=$count["amount"];echo $count;  ?>&nbsp;<?php echo $this->lang->line('lettertofuture'); ?></p>
</div>    
	<script type="text/javascript">
		 var editor = new baidu.editor.ui.Editor({
			 toolbars:[['Bold', 'Italic', 'Underline', 'StrikeThrough','ForeColor', 'BackColor','|','InsertOrderedList', 'InsertUnorderedList','|', 'InsertImage', 'Emotion','JustifyLeft', 'JustifyCenter', 'JustifyRight',  ]],
			UEDITOR_HOME_URL: '<?php echo base_url("static/ueditor").'/'?>',
			 initialStyle:"*{z-index:2;}",
			autoClearinitialContent: true,
			wordCount:false,
			 imagePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
			 filePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
			initialContent: '<?php echo $this->lang->line("dearpast")?>', //初始化编辑器的内容
			minFrameHeight:160,
			maxFrameHeight: 160, //设置高度
			autoHeightEnabled:false,
			elementPathEnabled : false,
			textarea: 'content' //设置提交时编辑器内容的名字，之前我们用的名字是默认的editorValue
		});
		editor.render("myEditor");
	</script>
		<script type="text/javascript">
			 var editor2 = new baidu.editor.ui.Editor({
				 toolbars:[['Bold', 'Italic', 'Underline', 'StrikeThrough','ForeColor', 'BackColor','|','InsertOrderedList', 'InsertUnorderedList','|', 'InsertImage', 'Emotion','JustifyLeft', 'JustifyCenter', 'JustifyRight',  ]],
				UEDITOR_HOME_URL: '<?php echo base_url("static/ueditor").'/'?>',
     			 initialStyle:"*{z-index:2;}",
				autoClearinitialContent: true,
				wordCount:false,
				 imagePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
				 filePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
				initialContent: '<?php echo $this->lang->line("dearfuture")?>', //初始化编辑器的内容
				minFrameHeight:160,
				maxFrameHeight: 160, //设置高度
				autoHeightEnabled:false,
				elementPathEnabled : false,
				textarea: 'content' //设置提交时编辑器内容的名字，之前我们用的名字是默认的editorValue
			});
			editor2.render("myEditor2");
		</script>
	<script>
		$(document).ready(function(){
			$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px"});
			$(".iframe2").colorbox({iframe:true,close:"[x] close" ,width:"635px", height:"780px"});
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
            <div id="kuan"><img src="<?php echo base_url('static/img/index_fullscreen_27.jpg')?>"><hr style="margin-top:3px;float:left;width:1002px;" />
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
