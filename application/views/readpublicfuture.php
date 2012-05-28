<div id="left-container">
       <div id="leftkuang">
       <div style="width:737px;height:30px;margin-top:-20px;"><p style="font-family:Georgia;font-size:13px;color:#545455;float:left;"><?php echo $this->lang->line('publicanoymousfuture'); ?>
<hr style="width:711px;height:0.5px;margin-top:50px;background-color:#cbcbcb;color:#cbcbcb;border-color:#cbcbcb;margin-left:0px;" noshade="noshade"></div>
          
			<ul class="beijing">

			<?php  foreach($letters as $letter) { ?>
				
					<a class="iframe2" href="<?php  echo base_url("letterctl/showFutureLetterById/".$letter["letter_id"]); ?>">
					<li>
					<div class="kuai">
						<?php $letter["letter_id"]?>
						<?php  $letter["content"]?>
		                <p style="font-family:Verdana;font-size:12px;color:#ab0000;margin-left:24px;"><b><?php echo $letter["title"]?> </b></p>
		               		<p style = "font-family:Verdana;font-size:12px;color:#535455;margin-left:24px;overflow: hidden; /*自动隐藏文字*/
						    text-overflow: ellipsis;/*文字隐藏后添加省略号*/
						    white-space: nowrap;/*强制不换行*/
						    width: 50em;/*不允许出现半汉字截断*/
						   ">  <?php echo strip_tags($letter["content"])?>  ...</p>
		                <p style="font-family:Verdana;font-size:12px;color:#999999;margin-top:-9px;float:right;margin-right:5px;"><?php echo $this->lang->line('sent'); ?> <?php  $year=date('Y',time()); echo $letter["year"]-$year;?> <?php echo $this->lang->line('manyyearslater'); ?></p><p style="color:#ac0202;font-family:Verdana;font-size:12px;float:left;margin-top:-5px;margin-left:22px;"><img src="<?php echo base_url("static/img/xinxing.png")?>" style="float:left;"><?php echo $this->lang->line('like'); ?>(<?php echo $letter["likenum"] ?>)</p>
		            </div><hr style="border:dashed thin;width:677px;color:#cbcbcb;margin-left:20px;">
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
                   <p style="font-family:Verdana;font-size:13px;color:#454545;margin-left:20px;margin-top:6px;"><b><i><?php echo $this->lang->line("viewletter")?></i></b></p>  
               </div>
               <div id="huangtiao-zhongxin">
				<ul id="zhongxinwenzi"class="list hongxian">
				  <li><p style="color:#ab0000;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToFuture/1")?>"><?php echo $this->lang->line("sendrecent")?></a></i></p>	</li>
					<li><p style="color:#ab0000;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToFuture/2")?>"><?php echo $this->lang->line("favorite")?></a></i></p>	</li>
						<li><p style="color:#ab0000;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToFuture/3")?>"><?php echo $this->lang->line("farthestfuture")?></a></i></p>	</li>
							<li><p style="color:#ab0000;font-family:Verdana;font-size:13px;"><i>	<a href = "<?php echo base_url("letterctl/listPublicLetterToFuture/1")?>"><?php echo $this->lang->line("already")?></a></i></p>	</li>
				</ul>
               </div>
           </div>
       </div>
   </div>
