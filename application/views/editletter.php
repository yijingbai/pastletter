
<div id='inline_content' style='background:#fff;width:622px;height:358px;'>
	<style type="text/css">
	body {
		padding : 0px;
		margin : 0px;
	}
	#waikuang{
		width:622px;
		height:358px;
	}
	#shang{
		width:622px;
		height:5px;
		background-image:url(<?php echo base_url("/static/img/index_fullscreen_10.jpg")?>);
		float:left;
	}
	#xia{
		width:622px;
		height:5px;
		background-image:url(<?php echo base_url("/static/img/index_fullscreen_10.jpg")?>);
		float:left;
	}
	#zuo{
		width:8px;
		height:358px;
		float:left;
		background-image:url(<?php echo base_url("/static/img/index_fullscreen_11.jpg")?>);
	}
	#you{
		width:8px;
		height:358px;
		float:right;
		background-image:url(<?php echo base_url("/static/img/index_fullscreen_11.jpg")?>);
	}
	#center{
		width:606px;
		height:358px;
		float:left;
		background-image:url(<?php echo base_url("/static/img/letterback.png")?>);
	}
	#shangbiao{
		float:right;
		color:#2c4265;
		font-size:12px;
		font-family:Verdana;
		margin-top:14px;
		margin-right:15px;
	}
	.biaoti{
		font-family:Georgia;
		font-size:18px;
		color:#344e78;
		margin-top:38px;
		margin-left:90px;
	}
	#enter{
		margin-top:66px;
		margin-left:190px;
		color:#545455;
		font-size:16px;
		font-family:Georgia;
	}
	.help-inline{
		color:red;
	}
	.down{
		background:url(<?php echo base_url("/static/img/forgot.png")?>);
		width:78px;
		margin-top:10px;
		height:31px;
		border:0px;
	}
	.down:hover{background:url(<?php echo base_url("/static/img/bottom-down.png")?>); cursor:pointer;}
	.down:active{background-image:url(<?php echo base_url("/static/img/forgot.png")?>)}
	#drop{
		margin-top:10px;
	}
	</style>
	<div id="waikuang">
        <div id="shang"></div>
        <div id="zuo"></div>
        <div id="center">
	<?php $letter = $data[0]; ?>
		<div class="biaoti"><p style = "margin-left:5px;"><i><?php echo $this->lang->line("editletter")?></i></p><hr style="width:480px;float:left;margin-left:1px;margin-top:0px;">
			<form id = "futurel" method="post" class="form-horizontal" action = "<?php echo base_url("/letterctl/editUserLetter/".$id)?>"  style = "height:100%; float:left;">
			          <div class="control-group  <?php if (form_error('email') != null) echo 'error'?>" style = "margin-bottom:10px;">
			            <label class="control-label" for="input01"><?php echo $this->lang->line("email")?></label>
			            <div class="controls">
			              <input type="text" style = "width:450px;height:20px;" name = "email" class="input-xlarge" id="input01" value = "<?php if ($letter["email"]!=NULL) echo $letter["email"]; else echo set_value('email'); ?>">
						<span class="help-inline" style = "height:5px;"><?php echo form_error('email')?></span>
			            </div>
			          </div>


					 <div class="control-group<?php if (form_error('is_public') != null) echo 'error'?>" style = "margin-bottom:2px;">
			            <label class="control-label"><?php echo $this->lang->line("maketo")?></label>
			            <div class="controls" >

			              <label class="radio">
			                <input type="radio" name="is_public" id="optionsRadios1" value="0" checked <?php if ($letter["is_public"] == NULL) echo "checked"; if ($letter["is_public"] == 0) echo  "checked"?>>
			                <?php echo $this->lang->line("private")?>
			              </label>
			              <label class="radio">
			                <input type="radio" name="is_public" id="optionsRadios2" <?php if ($letter["is_public"] == 1) echo  "checked"?> value="1">
		                     <?php echo $this->lang->line("public")?>
			              </label>
			            </div>
						<span class="help-inline"><?php echo form_error('is_public')?></span>
					  </div>
						<input class="down" type="button" onClick="javascript:futurel.submit();">
			      </form>
		
		
			
			
            </div>
            <div id="enter"><div id="drop"></div>
        </div>  
    </div>
        <div id="you"></div>
        <div id="xia"></div>
</div>

