        <div class="span9">
           		<table class = "table table-condensed">
					<thead>
						<th class = "red">#</th>
						<th>图片相对地址</th>
						<th>图片链接</th>
						<th>图片显示页面</th>
						<th>图片优先级</th>
						<th>图片语言</th>
						<th>增加时间</th>
					</thead>
					<tbody>
						<?php $i = 1 ;  foreach($images as $image) {?>

						<tr>
							<td><?php echo $i;?></td>
							<td  id = "textt">
								<strong>
									<a class="row-title"  href="<?php echo $image['src']?>"><?php echo $image['src'];?></a>
									</strong>
								<div class="row-actions">
									<span class="edit"> <i class =" icon-pencil"></i><a href="<?php echo base_url('index.php/imagectl/editimage/'.$image['image_id'])?>" title="编辑此项目">编辑</a> | </span><span class="trash"><i class ="icon-ban-circle"></i><a class="submitdelete" title="删除此留言" href="<?php echo base_url("index.php/imagectl/delimage/".$image['image_id'])?>">删除</a>
								</div>

							</td>
							<td><?php echo $image['imagea']?></td>
							<td><?php switch($image['page']) {case 1 : echo "首页图片";break;case 2 : echo "列表页图片";break;case 3 : echo "内容页图片";break;}?></td>
							<td><?php echo $image['level']?></td>
							<td><?php switch($image['language']) {case 1 : echo "中文";break;case 2 : echo "英文";break;}?></td>
							<td><?php echo $image['add_time']?></td>

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
