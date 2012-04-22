<ul>
  <li>	<a href = ""><?php echo $this->lang->line("sendrecent")?></a>	</li>
	<li>	<a href = ""><?php echo $this->lang->line("favorite")?></a>	</li>
		<li>	<a href = ""><?php echo $this->lang->line("farthest")?></a>	</li>
			<li>	<a href = ""><?php echo $this->lang->line("already")?></a>	</li>
</ul>

<ul>
	
<?php  foreach($letters as $letter) { ?>
	<li><?php echo $letter["letter_id"]?> / <?php echo $letter["title"]?> / <?php echo strip_tags($letter["content"])?> /<?php echo $letter["content"]?></li>
	
<?php }?>


</ul>
		<?php echo $this->pagination->create_links();?>