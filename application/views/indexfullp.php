<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_config.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("static/ueditor/editor_all.js")?>"></script>
<link rel="stylesheet" href="<?php echo base_url("static/ueditor/themes/default/ueditor.css")?>"/>
<link rel="stylesheet" href="<?php echo base_url("static/css/colorbox.css")?>" />
<script src="<?php echo base_url("static/js/jquery-1.7.1.min.js")?>"></script>
<script src="<?php echo base_url("static/js/jquery.colorbox-min.js")?>"></script>
	<script>
		$(document).ready(function(){
			$(".iframe").colorbox({iframe:true,close:"[x] close" ,width:"622px", height:"368px"});
		});
	</script>
<SCRIPT LANGUAGE="JavaScript">
        function reloadcode(){
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
<div id="leftkuang">
       <div id="xietiao">
			<div id="xietiao-zi"><i><?php echo $this->lang->line("whatpast")?></i></div>
		</div>
		
			<hr style="width:591px;margin-left:49px;margin-top:64px;"  />
				<form id = "pastl" method="post" action = "<?php echo base_url("/letterctl/insertLetterToPast")?>"  style = "height:100%; float:left;">
				        <fieldset>
				          <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" >
				            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
				            <div class="controls">
				              <input type="text" style = "width:450px;height:20px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($data["email"]!=NULL) echo $data["email"]; echo set_value('email'); ?>">
							<span class="help-inline"><?php echo form_error('email')?></span>
				            </div>
				          </div>

						  <div class="control-group   <?php if (form_error('title') != null) echo 'error'?>">
				            <label class="control-label" for="input02"><?php echo $this->lang->line("subject")?></label>
				            <div class="controls">
				              <input type="text" style = "width:450px;height:20px;" value = "<?php if ($data["title"]!=NULL) echo $data["title"]; echo set_value('title'); ?>" name = "title" class="input-xlarge" id="input02">
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
						
							<a href = "#" onClick="changeurlsubmit();"><span style = "float:right" >返回</span></a>

						   <div class="control-group  <?php if (form_error('year') != null) echo 'error'?>">
					            <label class="control-label" for="select01"><?php echo  $this->lang->line('deliver')?></label>
					            <div class="controls  ">
										month
					             		<select class="span1 "  name ="month" style = "height:20px;">
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
								<select class="span1" name = "day" style = "height:20px;">
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
										<input class="span1" name = "year"  value = "<?php if ($data["year"]!=NULL) echo $data["year"]; echo set_value('year'); ?>" style = "height:15px;">

										     </input>
										<span class="help-inline"><?php echo form_error('year')?></span>
					            </div>
					       </div>

						 <div class="control-group <?php if (form_error('is_public') != null) echo 'error'?>">
				            <label class="control-label"><?php echo $this->lang->line("maketo")?></label>
				            <div class="controls">
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
				            <label class="control-label" for="input03"><?php echo $this->lang->line("human")?><br /><a style="font-size:5px;" onClick="reloadcode();">change image</a></label>
				            <div class="controls">
					
								<label class="control-label" for="optionsCheckbox">Checkbox</label>
					            <div class="controls">
					              <label class="checkbox">
					                <input type="checkbox" id="optionsCheckbox" <?php if($data["is_abey"] == 1) echo  "checked=''"?> value="option1">
					                tongyi
					              </label>
					            </div>
					
				              <img id = "safecode" style = "height:20px;" onClick="reloadcode();" src="<?php echo base_url("showimg")?>"><input type="text" style = "width:50px;height:20px;" name = "passcode" class="input-xlarge" id="input03">	<span class="help-inline"><?php echo form_error('passcode')?></span>
				              <p class="help-block"></p>
				            </div>
				          </div>
				
						<div class="control-group">
						            <label class="control-label" for="optionsCheckbox">Checkbox</label>
						            <div class="controls">
						              <label class="checkbox">
						                <input type="checkbox" id="optionsCheckbox" value="option1">
						                Option one is this and that—be sure to include why it's great
						              </label>
						            </div>
						          </div>
						
						<div class="form-actions" >
						            <button type="submit"  style = "position:relative; top:-50px; left 49px;" class="btn btn-primary">Save changes</button>
						            <button class="btn">Cancel</button>
						          </div>

				        </fieldset>
				      </form>
			
</div>
    <div id="rightkuang"><div id="public"><b><?php echo $this->lang->line("publicletter")?></b></div><hr style="width:241px;margin-right:44px;margin-top:64px;" />
	<?php foreach($data["letters"] as $letter) {?>
    <div id="lan1" class="lan lan-bian">
        <div id="dear"><b><?php echo $letter["title"]?></b></div>
        <div id="duan1" class="duan"><?php echo strip_tags($letter["content"]);?></div>
        <div id="duan-fix1" class="duan-fix">sent <?php  $year=date('Y',time()); echo $year-$letter["year"];?> years into the past</div>
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
    <div id="more"><?php echo $this->lang->line("morepast")?></div>
    </div>
    <div id="kongbai"><div id="kongbai-zi">More than 1,795,000 letters written to the past</div></div>