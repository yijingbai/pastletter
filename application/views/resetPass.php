<?php $key = $data["key"];
	  $id = $data["id"];
?>
<form class="well"  style  = "position : relative;left:340px;" method="post" action = "<?php echo base_url("userctl/resetpass/".$key."/".$id)?>">

	<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
		<label class="control-label" for="input01" ><?php echo $this->lang->line('enterpass');?></label>
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