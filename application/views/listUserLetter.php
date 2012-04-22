<ul>
	<li><?php echo $this->lang->line("myletters")?></li>
	<li><?php echo $this->lang->line("myletterpast")?></li>
	<li><?php echo $this->lang->line("myletterfuture")?></li>
	<li><?php echo $this->lang->line("mylike")?></li>
	<li><?php echo $this->lang->line("changepass")?></li>
</ul>
<ul>
	<?php foreach($letters as $letter) { ?>
	<li><?php echo $letter["letter_id"]?>/<?php echo $letter["title"]?>/<?php echo strip_tags($letter["content"])?>/<?php echo $letter["content"]?>/<?php echo $letter["year"]?>/<?php echo $letter["month"]?>/<?php echo $letter["day"]?></li>		
	<?php } ?>

</ul>
		<?php echo $this->pagination->create_links();?>