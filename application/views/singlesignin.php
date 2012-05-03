<div id="center" style = "margin-left:300px;margin-top:100px;">
		<form name = "signin" style  = "margin-top:30px;" method="post" action = "<?php echo base_url("userctl/singlesignin")?>">
			<div class="control-group <?php if($errormess != null) echo 'error' ; if (form_error('email') != null) echo 'error'?>">
				<label class="control-label" for="input01" ><?php echo $this->lang->line('enteremail')?></label>
				<div class="controls">
					<input type="text" id="input01" class="input" name="email"  value = "<?php echo set_value('email')?>">	<span class="help-inline"><?php if($errormess != null) echo $errormess["message"];if (form_error('email') != null) echo form_error('email')?></span>
				</div>
			</div>
			<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
				<label class="control-label" for="input01" ><?php echo $this->lang->line('enterpass')?></label>
				<div class="controls">
					<input type="password" class="input" name="password">	<span class="help-inline"><?php if (form_error('password') != null) echo form_error('password')?></span>
				</div>
			</div>
	  <input class="down" type="button" onClick="javascript:signin.submit();" value = "<?php echo $this->lang->line('login'); ?>">
  	  <a href="<?php echo base_url("userctl/singlesign")?>"><input type="button"  value = "<?php echo $this->lang->line('sign'); ?>"></a>
		</form>
		<a href="#"><span><?php echo $this->lang->line('forgetpass'); ?></span></a>
</div>
<div id="kongbai"></div>
