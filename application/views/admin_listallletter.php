        <div class="span9">
            <table class = "table table-condensed">
				<thead>
					<th class = "red">#</th>
					<th class = "blue">email地址</th>
					<th>email主题</th>
				 	<th>email类型</th>
					<th>发往时间</th>
					<th>发送用户</th>
					<th>是否公开</th>
					<th>信件内容</th>
					<th>是否发送</th>
					<th>语言</th>
					<th>添加时间</th>
				</thead>
				<tbody>
					<?php $i = 1 ;  foreach($letters as $letter) {?>

					<tr>
						<td><?php echo $i;?></td>
						<td  id = "textt">
							<strong>
								<a class="row-title"><?php if ($letter['email'] != null) echo $letter['email'];?></a>
								</strong>
							<div class="row-actions">
								</span><span class="trash"><i class ="icon-ban-circle"></i><a class="submitdelete" title="删除此邮件" href="<?php echo base_url("letterctl/delletter/".$letter['letter_id'])?>">删除</a>
							</div>
						</td>
						<td><?php echo $letter["title"]?></td>
						<td><?php switch($letter['type']) {case 1 : echo "未来";break;case 0 : echo "过去";break;}?></td>
						<td><?php echo $letter["year"].'-'.$letter["month"].'-'.$letter["day"]?></td>
						<td><?php echo $letter["name"]?></td>
						<td><?php switch($letter['is_public']) {case 1 : echo "公开";break;case 0 : echo "私密";break;}?></td>
						<td><?php echo $letter["content"]?></td>
						<td><?php switch($letter['is_sent']) {case 1 : echo "已发送";break;case 0 : echo "未发送";break;}?></td>
						<td><?php switch($letter['language']) {case 1 : echo "中文";break;case 0 : echo "英文";break;}?></td>
						<td><?php echo $letter['add_time']?></td>
					</tr>

					<?php $i++; }?>

				</tbody>

			</table>
			<?php echo $this->pagination->create_links();?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
