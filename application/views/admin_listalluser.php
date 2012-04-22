        <div class="span9">
            <table class = "table table-condensed">
				<thead>
					<th class = "red">#</th>
					<th class = "blue">会员名称</th>
					<th>会员邮箱</th>
				 	<th>会员状态</th>
					<th>增加时间</th>
				</thead>
				<tbody>
					<?php $i = 1 ;  foreach($users as $user) {?>

					<tr>
						<td><?php echo $i;?></td>
						<td  id = "textt">
							<strong>
								<a class="row-title"><?php if ($user['name'] != null) echo $user['name'];?></a>
								</strong>
							<div class="row-actions">
								</span><span class="trash"><i class ="icon-ban-circle"></i><a class="submitdelete" title="删除此用户" href="<?php echo base_url("userctl/deluser/".$user['user_id'])?>">删除</a>
							</div>
						</td>
						<td><?php echo $user["email"]?></td>
						<td><?php switch($user['status']) {case 1 : echo "已验证";break;case 0 : echo "未验证";break;}?></td>
						<td><?php echo $user['add_time']?></td>
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

  

  </body>
</html>
