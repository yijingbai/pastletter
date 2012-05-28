<html>
<head>
	<script>
		parent.$(".iframe2").colorbox.resize({width:"635px", height:"780px"});
		window.location = "<?php echo $this->session->userdata("returnurl") ?>";
	</script>
</head>
</html>