<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">会员管理</li>
          <li class="active"><a href="<?php echo base_url("userctl/listAllUser")?>">浏览全部会员</a></li>
          <li><a href="<?php echo base_url("userctl/listAllUser")?>">最近注册会员</a></li>
          <li><a href="<?php echo base_url("userctl/listUnValidUser")?>">未验证会员</a></li>
          <li class="nav-header">邮件管理</li>
          <li><a href="<?php echo base_url("letterctl/listAllLetterPublic")?>">管理全部邮件</a></li>
          <li><a href="<?php echo base_url("letterctl/listPublicLetterToPastA")?>">管理发往过去邮件</a></li>
          <li><a href="<?php echo base_url("letterctl/listPublicLetterToFutureA")?>">管理发往未来邮件</a></li>
          <li><a href="<?php echo base_url("letterctl/listPublicLikeLetterA")?>">管理用户最喜欢邮件</a></li>
          <li><a href="<?php echo base_url("letterctl/listFathestToFutureA")?>">管理发往最远未来邮件</a></li>
		  <li><a href="<?php echo base_url("letterctl/listPublicLetterUnsentA")?>">管理未发送邮件</a></li>
          <li><a href="<?php echo base_url("letterctl/listPublicLetterSentA")?>">管理已发送邮件</a></li>
          <li class="nav-header">广告管理</li>
          <li><a href="<?php echo base_url("upload")?>">上传广告图片</a></li>
          <li><a href="<?php echo base_url("imagectl/listAllImage")?>">管理广告图片</a></li>
		  <li class="nav-header">网站管理</li>
          <li><a href="<?php echo base_url("dbbakctl/backup")?>">网站数据备份</a></li>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->