



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
		<div class="biaoti"><p style = "margin-left:5px;"><i><?php echo $this->lang->line("resetyourpass")?></i></p><hr style="width:480px;float:left;margin-left:1px;margin-top:0px;"><br />
			<form class="well" name = "find" style = "position:relative;top:30px; left:50px;" method="post" action = "<?php echo base_url("index.php/userctl/forgetPassword")?>">
				<div class="control-group <?php if (form_error('email') != null) echo 'error'?>">
					<label class="control-label" for="input01" style = "	font-family:Georgia;"><i><?php echo $this->lang->line('enteremail')?></i></label>
					<div class="controls">
						<input type="search" style = "width:300px;" class="input" name="email"  value = "<?php echo set_value('email')?>">	<span class="help-inline"><?php if (form_error('email') != null) echo form_error('email')?></span>
					</div>
				</div>
				<button type="button" class="down" onclick="javascript:find.submit()">
			</form>
			
			
            </div>
            <div id="enter"><div id="drop"></div>
        </div>  
    </div>
        <div id="you"></div>
        <div id="xia"></div>
</div>



