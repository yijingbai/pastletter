<link rel="stylesheet" href="<?php echo base_url("static/css/bootformr.css") ?>"  charset="utf-8">
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
		margin-left:60px;
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
	label {
		color:grey;
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
		<div class="biaoti"><p style = "margin-left:5px;"><i><?php echo $this->lang->line("sign")?></i></p><hr style="width:480px;float:left;margin-left:1px;margin-top:0px;"><br />
			<form class="well form-horizontal"  style = "width:500px;margin-left:40px;"  name = "sign" method="post" action = "<?php echo base_url("userctl/usersign")?>">
				<div class="control-group <?php if (form_error('email') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enteremail')?></label>
					<div class="controls">
						<input type="text" class="input"  style = "height:25px;" name="email" value = "<?php echo set_value('email')?>">	<span style ="height:10px;margin-top:-10px;" class="help-inline"><?php if (form_error('email') != null) echo form_error('email')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('username') != null) echo 'error'?>">
					<label class="control-label" for="input01"  value = "<?php echo set_value('username')?>"><?php echo $this->lang->line('enterusername');?></label>
					<div class="controls"   >
						<input type="text"  style = "height:25px;" class="input" name="username" value = "<?php echo set_value('username')?>">	<span class="help-inline" style ="height:10px;margin-top:-10px;"><?php if (form_error('username') != null) echo form_error('username')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enterpass');?></label>
					<div class="controls">
						<input type="password"  style = "height:25px;" class="input" name="password" >	<span class="help-inline" style ="height:10px;margin-top:-10px;"><?php if (form_error('password') != null) echo form_error('password')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('passconf') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enteragain')?></label>
					<div class="controls">
						<input type="password"  style = "height:25px;" class="input" name="passconf" >	<span style ="height:10px;margin-top:-10px;" class="help-inline"><?php if (form_error('passconf') != null) echo form_error('passconf')?></span>
					</div>
				</div>
					<div class="control-group" >
					            <div class="controls">
					              <label class="checkbox" style = "display: inline-block;margin-left:10px;">
					                <input type="checkbox" id="optionsCheckbox" value="1">
					                  <?php echo $this->lang->line('remember'); ?>
					              </label>
					<input class="down" type="button" style = "float:right;margin-right:130px;margin-top:-5px;" onClick="javascript:sign.submit();" >
					            </div>
					
					 </div>

			</form>
			
		
			
			
            </div>
            <div id="enter"><div id="drop"></div>
        </div>  
    </div>
        <div id="you"></div>
        <div id="xia"></div>
</div>












