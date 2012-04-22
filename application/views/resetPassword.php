<form class="well"  style  = "position : relative;left:340px;" method="post" action = "<?php echo base_url("userctl/resetpassword")?>">
	<div class="control-group <?php if (form_error('oldpass') != null) echo 'error'?>">
		<label class="control-label" for="input01" ><?php echo $this->lang->line('enteroldpass');?></label>
		<div class="controls">
			<input type="password" class="input" name="oldpass" >	<span class="help-inline"><?php if (form_error('oldpass') != null) echo form_error('oldpass')?></span>
		</div>
	</div>
	<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
		<label class="control-label" for="input01" ><?php echo $this->lang->line('enterpass');?></label>
		<div class="controls">
			<input type="password" class="input" name="password" >	<span class="help-inline"><?php if (form_error('password') != null) echo form_error('password')?></span>
		</div>
	</div>
	<div class="control-group <?php if (form_error('passconf') != null) echo 'error'?>">
		<label class="control-label" for="input01" ><?php echo $this->lang->line('change')?></label>
		<div class="controls">
			<input type="password" class="input" name="passconf" >	<span class="help-inline"><?php if (form_error('passconf') != null) echo form_error('passconf')?></span>
		</div>
	</div>
	
	<button type="submit" class="btn"><?php echo $this->lang->line('login')?></button>
</form>