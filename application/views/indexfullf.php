<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_config.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_all.js")?>"></script>
<link rel="stylesheet" href="<?php echo base_url("static/ueditor/themes/default/ueditor.css")?>"/>
<link rel="stylesheet" href="<?php echo base_url("static/css/colorbox.css")?>" />
<script src="<?php echo base_url("static/js/jquery-1.7.1.min.js")?>"></script>
<script src="<?php echo base_url("static/js/jquery.colorbox-min.js")?>"></script>
<script src="<?php echo base_url("static/js/jquery.cookie.js")?>"></script>
<script src="<?php echo base_url("static/js/jquery-ui-1.8.20.custom.min.js")?>"></script>
<link href="<?php echo base_url('static/css/redmond/jquery-ui-1.8.20.custom.css')?>" rel="stylesheet">
	<script>
		$(document).ready(function(){
			$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px"});
				$(".iframe2").colorbox({iframe:true,close:"[x] close" ,width:"635px", height:"780px"});
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
			maxDate: "+60Y"
		});
		$( "#datepickerp" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: myDatefmin,
			maxDate: "+60Y"
		});
	});
	</script>
<div id="leftkuang">
       <div id="xietiao">
			<div id="xietiao-zi"><i><?php echo $this->lang->line("whatfuture")?></i></div>
		</div>
		
			<hr style="width:591px;margin-left:49px;margin-top:64px;"  />
				<form id = "futurel" method="post" class="form-horizontal" action = "<?php echo base_url("/letterctl/insertLetterToFuture")?>"  style = "height:100%; float:left; font-family:<?php if ($this->session->userdata("language") == 1) echo "微软雅黑"; else echo "Georgia";  ?>;font-style: italic;">
				        <fieldset>
				          <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" style = "margin-bottom:10px;">
				            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
				            <div class="controls">
				              <input type="text" style = "width:450px;height:20px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($data["email"]!=NULL) echo $data["email"]; else echo set_value('email'); ?>">
							<span class="help-inline" style = "height:5px;"><?php echo form_error('email')?></span>
				            </div>
				          </div>

						  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>" style = "margin-bottom:10px;">
				            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
				            <div class="controls">
				              <input type="text" style = "width:450px;height:20px;" value = "<?php if ($data["title"]!=NULL) echo $data["title"]; else echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
				            	<span class="help-inline" style = "height:5px;"><?php echo form_error('title')?></span>
				            </div>
				          </div>

						<div class="control-group   <?php if (form_error('content') != null) echo 'error'?>" style = "margin-bottom:2px;">
							<div class="controls">
								<div id="myEditor"> <?php htmlspecialchars_decode($data["content"])?></div>
							
							
									<span class="help-inline" style = "height:5px;"><?php echo form_error('content')?></span>
							</div>
						</div>
						
							<a href = "#" onClick="changeurlsubmit();"><span style = "float:right" ><?php echo $this->lang->line("back")?></span></a>
							
							 <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>" style = "margin-bottom:0px;">
								<label class="control-label"  for="select01"><?php echo  $this->lang->line('deliver')?></label>
						            <div class="controls" >
										
											<input  name = "year"  id = "datepickerf" value = "<?php if ($data["year"]!=NULL) echo $data["year"]; else echo set_value('year'); ?>" style = "width : 140px;height:20px;" readonly>

											     </input>
											<span class="help-inline"><?php echo form_error('year')?></span>
						            </div>
						       </div>

						 <div class="control-group<?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:2px;">
				            <label class="control-label"><?php echo $this->lang->line("maketo")?></label>
				            <div class="controls" >
							 
				              <label class="radio">
				                <input type="radio" name="is_public" id="optionsRadios1" value="0" checked <?php if ($data["type"] == NULL) echo "checked"; if ($data["type"] == 0) echo  "checked"?>>
				                <?php echo $this->lang->line("private")?>
				              </label>
				              <label class="radio">
				                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($data["type"] == 1) echo  "checked"?> value="1">
			                     <?php echo $this->lang->line("public")?>
				              </label>
				            </div>
							<span class="help-inline"><?php echo form_error('is_public')?></span>
						  </div>

				    	 	<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>" style = "margin-top:-5px;margin-bottom:5px;">
						            <label class="control-label"  for="input03"><?php echo $this->lang->line("human")?><br /><a  onClick="reloadcode();"><?php echo $this->lang->line('changeimage'); ?></a></label>
						            <div class="controls" style = "margin-top:8px;">
						              <img id = "safecode" style = "height:25px;float:left" onClick="reloadcode();" src="<?php echo base_url("showimg/user")?>">&nbsp;<input type="text" style = "width:60px;height:20px;" name = "passcode" id="input03" >	<span class="help-inline"><?php echo form_error('passcode')?></span>
						              <p class="help-block"></p>
						            </div>
						          </div>
					

										<div class="control-group" >
										         	<label class="control-label"  style = 'float:left'  for="optionsCheckbox"><?php echo $this->lang->line('abeyuser'); ?></label>
										            <div class="controls">
										              <label class="checkbox" style = "display: inline-block;margin-left:10px;position:relative;top:-4px;">
										                <input type="checkbox" <?php if($data["is_abey"] == 1) echo  "checked=''"?> value="option1">
										                 <?php echo $this->lang->line('yes'); ?> <a class="iframe2" href="<?php echo base_url("/letterctl/showUserAgreement") ?>">   <?php echo $this->lang->line('useragree'); ?></a>
										              </label>
										            </div>
										 </div>
										
								<img onClick= "submitfuture();" src="<?php if ($this->session->userdata("language") == 2) {
									echo base_url("static/img/sendtofuturecn-wuyinying.png");
								} ?>" style="float:right;margin-top:-150px;margin-right:0px;">
								<img onClick= "submitfuture();" src="<?php if ($this->session->userdata("language") == 1) {
								 	echo base_url("static/img/senttofuture-wuyinying.png");
								}?>" style="float:right;margin-top:-150px;">
				        </fieldset>
				      </form>
							<script type="text/javascript">
								 var editor = new baidu.editor.ui.Editor({
									 toolbars:[['Bold', 'Italic', 'Underline', 'StrikeThrough','ForeColor', 'BackColor','|','InsertOrderedList', 'InsertUnorderedList','|', 'InsertImage', 'Emotion','JustifyLeft', 'JustifyCenter', 'JustifyRight',  ]],
									UEDITOR_HOME_URL: '<?php echo base_url("static/ueditor").'/'?>',
									iframeCssUrl: '<?php echo base_url("static/ueditor/themes/default/iframe.css")?>',
									autoClearinitialContent: true,
										autoHeightEnabled:false,
										elementPathEnabled : false,
											wordCount:false,
									 imagePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
									 filePath:'<?php echo base_url("static/ueditor/server/upload").'/'?>',
									initialContent: '<?php echo $this->lang->line("dearpast")?>', //初始化编辑器的内容
									minFrameHeight:150,
									autoHeightEnabled:false,
									textarea: 'content' //设置提交时编辑器内容的名字，之前我们用的名字是默认的editorValue
								});
								editor.render("myEditor");
								
								function changeurlsubmit() {
									var form;
									form = document.getElementById("futurel");
									form.action = "<?php echo base_url('welcome/fullfilldata/3/2')?>";
									editor.sync();
									form.submit();
								}
								function submitfuture() {
										var form;
										form = document.getElementById('futurel');
										editor.sync();
										$(function() {
												$.cookie('contentf',editor.getContent());
										});
									
										form.submit();
								}

								function reloadcode() {
									alert($.cookie('contentf'));
						 			var d = new Date();
						 			document.getElementById('safecode').src="<?php echo base_url("showimg")?>"+"?d="+d.toString();
								}
							</script>
								<?php
				    				$content = $data["content"];
				  					if ($content != NULL) 
				 						echo "<script>editor.setContent('".$content."')</script>"; 
								?>
						
			
</div>
    <div id="rightkuang"><div id="public"><b><?php echo $this->lang->line("publicletter")?></b></div><hr style="width:241px;margin-right:44px;margin-top:64px;" />
	<?php foreach($data["letters"] as $letter) {?>
    <div id="lan1" class="lan lan-bian">
        <div id="dear"><b><?php echo $letter["title"]?></b></div>
        <div id="duan1" class="duan"><?php echo strip_tags($letter["content"]);?></div>
        <div id="duan-fix1" class="duan-fix"><?php echo $this->lang->line('sent'); ?> <?php  $year=date('Y',time()); echo $year-$letter["year"];?> <?php echo $this->lang->line('manyyearslater'); ?></div>
    </div>
	<?php }?>
    <!--<div id="lan2" class="lan lan-bian"><div id="dear"><b>Dear PastMe</b></div>
        <div id="duan1" class="duan">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just...</div>
        <div id="duan-fix1" class="duan-fix">sent 2 years into the future, to Yestoday</div>
    </div>
    <div id="lan3" class="lan lan-bian lan-bian-fix" ><div id="dear"><b>Dear PastMe</b></div>
        <div id="duan1" class="duan">How are things in Boston? I hope you finally made it up north, and are living well on your own. I know the winters get a little chilly, but just...</div>
        <div id="duan-fix1" class="duan-fix">sent 2 years into the future, to Yestoday</div>
    </div>-->
    <div id="more"><?php echo $this->lang->line("morefuture")?></div>
    </div>
    <div id="kongbai"><div id="kongbai-zi"><?php echo $this->lang->line('morethan');?></div></div>