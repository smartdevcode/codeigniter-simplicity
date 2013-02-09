<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
		<title><?php echo $title; ?></title>
	<?php
		if(!empty($meta)) 
			foreach($meta as $name=>$content){
				echo "\n\t\t"; 
				?><meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" /><?php
		 }
	?>
		<meta name="publisher" content="John Skoumbourdis" />
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="distribution" content="Global" />
		<meta name="author" content="John Skoumbourdis" />
		<meta name="abstract" content="<?php echo $title; ?>" /> 
		<meta name="googlebot" content="all, index, follow" /> 
		<meta name="title" content="<?php echo $title; ?>" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/general.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/custom.css" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
	<link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />    
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
          <img src="<?php echo base_url(); ?>assets/themes/default/images/logo.png" style="float:left;margin-top:5px;z-index:5" alt="logo"/>
          <a class="brand" href="<?php echo site_url(); ?>">&nbsp;&nbsp;Your Brand</a>
          <div style="height: 0px;" class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
			  <li><a href="<?php echo site_url('about'); ?>">About</a></li>
              <li><a href="<?php echo site_url('documentation'); ?>">Documentation</a></li>
              <li><a href="<?php echo site_url('download'); ?>">Download</a></li>
            </ul>          		
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>
        
    <?php echo $output;?>

      <hr/>

      <footer>
      	<div class="row">
	        <div class="span6 b10">
				Copyright &copy; <a target="_blank" href="https://plus.google.com/u/0/107789497808468736690?rel=author">John Skoumbourdis</a> | <a target="_blank" href="http://www.web-and-development.com">www.web-and-development.com</a>
	        </div>
        </div>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/themes/default/hero_files/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-collapse.js"></script>	
</body></html>    