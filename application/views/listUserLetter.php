<script>
	$(document).ready(function(){
		$(".iframe2").colorbox({iframe:true,close:"[x] close" ,width:"635px", height:"780px"});
	});
</script>
<div id="left-container">
       <div id="leftkuang">
       <div style="width:737px;height:30px;margin-top:-20px;"><p style="font-family:Georgia;font-size:13px;color:#545455;float:left;">Public, but Anonymous, to past Letters: Recently Delivered<img src="<?php echo base_url("static/img/3d-bian.png")?>" style="width:737px;height:5px;"></div>
          
			<ul class="beijing">

			<?php  foreach($letters as $letter) { ?>
				
				
					<li>
					<div class="kuai">
						<?php $letter["letter_id"]?>
						<?php  $letter["content"]?>
		                	<a class="iframe2" href="<?php  echo base_url("letterctl/showPastLetterById/".$letter["letter_id"]); ?>"><p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b><?php echo $letter["title"]?> </b></p></a>
		                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;"><?php echo strip_tags($letter["content"])?>  ...</p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;">sent <?php  $year=date('Y',time()); echo $year-$letter["year"];?> years into the past, to Yestoday</p><p style="color:#ac0202;font-family:Verdana;font-size:12px;float:left;margin-top:-5px;margin-left:22px;"></p>&nbsp;<span style = "font-size:10px;color:#ab0000;margin-bottom:5px;"><img src="<?php echo base_url("static/img/xinxing.png")?>" style="float:left;">Like(0)&nbsp;&nbsp;&nbsp;

				<a class="iframe" href = "<?php echo base_url("/letterctl/editUserLetter/".$letter["letter_id"]) ?>"><?php echo $this->lang->line('edit'); ?></a>|
		
			<a href="<?php echo base_url("/letterctl/delUserletter/".$letter["letter_id"]) ?>"><?php echo $this->lang->line('delete'); ?></a></span>
		            </div><hr style="border:dashed thin;width:677px;color:#cbcbcb;">
					</li>
			<?php }?>
			</ul>
				<?php echo $this->pagination->create_links();?>
       </div>

	
   </div>
   <div id="right-container">   
       <div id="rightkuang">
           <div id="huangtiao">
               <div id="huangtiao-shangbian">
                   <p style="font-family:Verdana;font-size:13px;color:#454545;text-align:center;margin-top:6px;"><b><i><?php echo $this->lang->line("viewletter")?></i></b></p>  
               </div>
               <div id="huangtiao-zhongxin">
				<ul id="zhongxinwenzi"class="list hongxian">
				  <li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listUserLetter/1")?>"><?php echo $this->lang->line("myletters")?></a></i></p>	</li>
					<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listUserLetter/2")?>"><?php echo $this->lang->line("myletterpast")?></a></i></p>	</li>
						<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listUserLetter/4")?>"><?php echo $this->lang->line("myletterfuture")?></a></i></p>	</li>
							<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listUserLetter/3")?>"><?php echo $this->lang->line("mylike")?></a></i></p>	</li>
							<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a class="iframe" href = "<?php echo base_url("userctl/resetPassword")?>"><?php echo $this->lang->line("changepass")?></a></i></p>	</li>
				</ul>
               </div>
           </div>
       </div>
   </div>


	