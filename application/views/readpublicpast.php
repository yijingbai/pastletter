<div id="left-container">
       <div id="leftkuang">
       <div style="width:737px;height:30px;margin-top:-20px;"><p style="font-family:Georgia;font-size:13px;color:#545455;float:left;"><?php echo $this->lang->line('publicanoymouspast'); ?><img src="<?php echo base_url("static/img/3d-bian.png")?>" style="width:737px;height:5px;"></div>
          
			<ul class="beijing">

			<?php  foreach($letters as $letter) { ?>
				
				<a class="iframe2" href="<?php  echo base_url("letterctl/showPastLetterById/".$letter["letter_id"]); ?>">
					<li>
					<div class="kuai">
						<?php $letter["letter_id"]?>
						<?php  $letter["content"]?>
		                <p style="font-family:Verdana;font-size:12px;color:#022b5a;margin-left:24px;"><b><?php echo $letter["title"]?> </b></p>
		                <p style="font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;"><?php echo strip_tags($letter["content"])?>  ...</p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;"><?php echo $this->lang->line('sent'); ?> <?php  $year=date('Y',time()); echo $year-$letter["year"];?> <?php echo $this->lang->line('manyyearslater'); ?></p><p style="color:#ac0202;font-family:Verdana;font-size:12px;float:left;margin-top:-5px;margin-left:22px;"><img src="<?php echo base_url("static/img/xinxing.png")?>" style="float:left;"><?php echo $this->lang->line('like'); ?>(<?php echo $letter["likenum"] ?>)</p>
		            </div><hr style="border:dashed thin;width:677px;color:#cbcbcb;">
					</li></a>
			<?php }?>
			</ul>
			<div style = "float:right;margin-right:20px;"><?php echo $this->pagination->create_links();?></div>
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
				  <li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToPast/1")?>"><?php echo $this->lang->line("sendrecent")?></a></i></p>	</li>
					<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToPast/2")?>"><?php echo $this->lang->line("favorite")?></a></i></p>	</li>
						<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToPast/3")?>"><?php echo $this->lang->line("farthestpast")?></a></i></p>	</li>
							<li><p style="color:#333333;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToPast/1")?>"><?php echo $this->lang->line("already")?></a></i></p>	</li>
				</ul>
               </div>
           </div>
       </div>
   </div>
