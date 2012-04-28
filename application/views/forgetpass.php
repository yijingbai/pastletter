<form class="well"  style  = "position : relative;left:340px;" method="post" action = "<?php echo base_url("index.php/userctl/forgetPassword")?>">
	<div class="control-group <?php if (form_error('email') != null) echo 'error'?>">
		<label class="control-label" for="input01" ><?php echo $this->lang->line('enteremail')?></label>
		<div class="controls">
			<input type="text" class="input" name="email"  value = "<?php echo set_value('email')?>">	<span class="help-inline"><?php if (form_error('email') != null) echo form_error('email')?></span>
		</div>
	</div>
	<button type="submit" class="btn"><?php echo $this->lang->line('login')?></button>
	<a href = "<?php echo base_url("index.php/userctl/usersign")?>" class = "btn"><?php echo $this->lang->line('sign')?></a>
</form>

