
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
		font-size:10px;
		float:right;
		margin-right:100px;
	}
	.help-inline p {

		
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
		<div class="biaoti"><p style = "margin-left:5px;"><i><?php echo $this->lang->line("sign")?></i></p><hr style="width:480px;float:left;margin-left:1px;margin-top:0px;">
			
			<form class="well"  method="post" action = "<?php echo base_url("userctl/resetpassword")?>">
				<div class="control-group <?php if (form_error('oldpass') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enteroldpass');?></label>
					<div class="controls">
						<input type="password" class="input" name="oldpass" >	<span class="help-inline"><?php if (form_error('oldpass') != null) echo form_error('oldpass')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enternewpass');?></label>
					<div class="controls">
						<input type="password" class="input" name="password" >	<span class="help-inline"><?php if (form_error('password') != null) echo form_error('password')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('passconf') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enteragain')?></label>
					<div class="controls">
						<input type="password" class="input" name="passconf" >	<span class="help-inline"><?php if (form_error('passconf') != null) echo form_error('passconf')?></span>
					</div>
				</div>

				<button type="submit" class="btn"><?php echo $this->lang->line('login')?></button>
			</form>
			
		
			
			
            </div>
            <div id="enter"><div id="drop"></div>
        </div>  
    </div>
        <div id="you"></div>
        <div id="xia"></div>
</div>



