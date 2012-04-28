<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PastLetter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

    </style>

	<SCRIPT LANGUAGE="JavaScript">
	
	
	        function reloadcode(){
	 var d = new Date();
	 document.getElementById('safecode').src="<?php echo base_url("showimg")?>"
	}
	//$(document).ready(function() { 
	//	$.fool({h4xx0r: true}); 
	//});
	    //-->
	    </SCRIPT>

    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>a
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="static/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="static/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="static/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="static/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PasterLetter</a>
          <div class="nav-collapse">
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
   		<h1>管理员请登录<h1>
        	<form class = "well" method="post" action = "<?php echo base_url("/adminlogin")?>">
				<div class="control-group <?php if($errormess != null) echo 'error' ; if (form_error('username') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enterusername')?></label>
					<div class="controls">
						<input type="text" class="input" name="username"  value = "<?php echo set_value('username')?>">	<span class="help-inline"><?php if($errormess != null) echo $errormess["message"];if (form_error('username') != null) echo form_error('username')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('password') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('enterpass')?></label>
					<div class="controls">
						<input type="password" class="input" name="password">	<span class="help-inline"><?php if (form_error('password') != null) echo form_error('password')?></span>
					</div>
				</div>
				<div class="control-group <?php if (form_error('passcode') != null) echo 'error'?>">
					<label class="control-label" for="input01" ><?php echo $this->lang->line('entercode')?></label>
					<div class="controls">
						<input type=text name="passcode"><img id = "safecode" onClick="reloadcode();" src="<?php echo base_url("showimg")?>"><a style="font-size:5px;" onClick="reloadcode();">更新</a><span class="help-inline"><?php if (form_error('passcode') != null) echo form_error('passcode')?></span>
					</div>
				</div>
				<button type="submit" class="btn"><?php echo $this->lang->line('login')?></button>
			</form>


      <!-- Example row of columns -->
     

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-1.7.1.min.js"></script>
    <script src="static/js/bootstrap-transition.js"></script>
    <script src="static/js/bootstrap-alert.js"></script>
    <script src="static/js/bootstrap-modal.js"></script>
    <script src="static/js/bootstrap-dropdown.js"></script>
    <script src="static/js/bootstrap-scrollspy.js"></script>
    <script src="static/js/bootstrap-tab.js"></script>
    <script src="static/js/bootstrap-tooltip.js"></script>
    <script src="static/js/bootstrap-popover.js"></script>
    <script src="static/js/bootstrap-button.js"></script>
    <script src="static/js/bootstrap-collapse.js"></script>
    <script src="static/js/bootstrap-carousel.js"></script>
    <script src="static/js/bootstrap-typeahead.js"></script>

  </body>
</html>
