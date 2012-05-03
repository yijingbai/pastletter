       <div id="center" style = "margin-left:300px;margin-top:100px;">
       			<form class="well" name = "sign" method="post" action = "<?php echo base_url("userctl/singlesign")?>">
					<div class="control-group <?php if (form_error('username') != null) echo 'error'?>">
						<label class="control-label" for="input01"  value = "<?php echo set_value('username')?>"><?php echo $this->lang->line('enterusername');?></label>
						<div class="controls"  style = "width:500px;" >
							<input type="text" class="input" name="username" value = "<?php echo set_value('username')?>">	<span class="help-inline"><?php if (form_error('username') != null) echo form_error('username')?></span>
						</div>
					</div>
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
					<div class="control-group <?php if (form_error('email') != null) echo 'error'?>">
						<label class="control-label" for="input01" ><?php echo $this->lang->line('enteremail')?></label>
						<div class="controls">
							<input type="text" class="input" name="email" value = "<?php echo set_value('email')?>">	<span class="help-inline"><?php if (form_error('email') != null) echo form_error('email')?></span>
						</div>
					</div>
					<input class="down" type="button" onClick="javascript:sign.submit();" value ="<?php echo $this->lang->line('sign'); ?>">
				</form>
        </div>
        <div id="kongbai"></div>
