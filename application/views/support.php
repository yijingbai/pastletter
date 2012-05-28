      <script>
		var a3 = document.getElementById("a3");
		var a4 = document.getElementById("a4");
		a3.style.color = "#344E78";
		a5.style.color = "#AB0000";
	</script> 
    <div id="left-container">
        <div id="leftkuang">
        <div id="support_header"><b><i><?php echo $this->lang->line('supportus'); ?></i></b></div>
       <hr style="width:670px;height:1px;margin-left:-2px;color:#efefef;border:thin;" noshade="noshade">
        <div id="center" style = "margin-left:0px;" >
            <div id="center_header"<b><i><?php echo $this->lang->line('dearpast'); ?></i></b></div>
            <div id="center_body"><?php echo $this->lang->line('supportcontent'); ?>
            </div>
            <div id="sangetu">          
            <ul style = "position:relative;right:30px;">
                <a href="#"><img src="<?php echo base_url("static/img/pp.png") ?>"></a>
                <a href="#"><img src="<?php echo base_url("static/img/zhifubao.png") ?>"></a>
                <a href="#"><img src="<?php echo base_url("static/img/caifutong.png") ?>"></a>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <div id="right-container">   
        <div id="rightkuang">
            <div id="huangtiao">
                <div id="huangtiao-shangbian">
                    <p style="font-family:Verdana;font-size:13px;color:#454545;text-align:center;margin-top:6px;"><b><i><?php echo $this->lang->line('whysupport'); ?></i></b></p>  
                </div>
                <div id="huangtiao-zhongxin">
	<p style="font-family:Verdana;font-size:10px;color:#454545;margin-top:19px;margin-left:10px;width:200px;">
							<?php echo $this->lang->line('supportcontent2'); ?>
                       </p>
                </div>
            </div>
        </div>
    </div>