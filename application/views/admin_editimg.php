        <div class="span9">
			<?php $image = $data[0];?>
			<form class="well" action="<?php echo base_url("imagectl/editimage/".$image["image_id"]); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				
					<div class="control-group">
						<label class="control-label" for="select02" >请选择图片所属页面</label>
						<div class="controls">
							<select id="select02" name = "page">
								<option value = "1" <?php if($image["page"]==1) echo "selected";?>>首页</option>
								<option value = "2" <?php if($image["page"]==2) echo "selected";?>>列表页</option>
								<option value = "3" <?php if($image["page"]==3) echo "selected";?>>内容页</option>		
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="select03" >请选择图片语言</label>
						<div class="controls">
							<select id="select03" name = "language">
								<option value = "1" <?php if($image["language"]==1) echo "selected";?>>中文</option>
								<option value = "2" <?php if($image["language"]==2) echo "selected";?>>英文</option>
							</select>
						</div>
					</div>

					<div class="control-group <?php if (form_error('imagea') != null) echo 'error'?>">
						<label class="control-label" for="input04"  >请输入图片优先级</label>
						<div class="controls">
							<input class="input" name = "level" id = "input04" value = "<?php echo $image["level"]?>"/>	<span class="help-inline"><?php if (form_error('level') != null) echo form_error('title')?></span>
						</div>
					</div>

					<div class="control-group <?php if (form_error('imagea') != null) echo 'error'?>">
						<label class="control-label" for="input01"  >请输入该图链接</label>
						<div class="controls">
							<input class="input" name = "imagea" id = "input01" value = "<?php echo $image["imagea"]?>"/>	<span class="help-inline"><?php if (form_error('imagea') != null) echo form_error('title')?></span>
						</div>
					</div>

					<input type="submit" value="保存修改" />
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
