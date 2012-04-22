        <div class="span9">
			<?php echo $error;?>
           	<ul>
			<?php if($upload_data != null) {?>
			<li>已上传: <?php echo $upload_data["file_name"];?></li>
	 		<li>图片大小: <?php echo $upload_data["image_width"];?>* <?php echo $upload_data["image_height"];?></li>
			<?php } ?>
			</ul>
			<form class="well" action="<?php echo base_url("upload") ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<input type="file" name="userfile" size="20" />
					
					<div class="control-group">
						<label class="control-label" for="select02" >请选择图片所属页面</label>
						<div class="controls">
							<select id="select02" name = "page">
								<option value = "1">首页</option>
								<option value = "2">列表页</option>
								<option value = "3">内容页</option>		
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="select03" >请选择图片语言</label>
						<div class="controls">
							<select id="select03" name = "language">
								<option value = "1">中文</option>
                                <option value = "2">英文</option>
							</select>
						</div>
					</div>

					<div class="control-group <?php if (form_error('imagea') != null) echo 'error'?>">
						<label class="control-label" for="input04"  value = "<?php echo set_value('level')?>">请输入图片优先级</label>
						<div class="controls">
							<input class="input" name = "level" id = "input04"/>	<span class="help-inline"><?php if (form_error('level') != null) echo form_error('title')?></span>
						</div>
					</div>

					<div class="control-group <?php if (form_error('imagea') != null) echo 'error'?>">
						<label class="control-label" for="input01"  value = "<?php echo set_value('imagea')?>">请输入该图链接</label>
						<div class="controls">
							<input class="input" name = "imagea" id = "input01"/>	<span class="help-inline"><?php if (form_error('imagea') != null) echo form_error('title')?></span>
						</div>
					</div>

					<input type="submit" value="上传" />
			</form>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
