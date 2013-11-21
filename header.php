<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <script type="text/javascript" src="bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>

<div class="navbar navbar-inverse headbar">
  <div class="container">
    
 	<div class="row">
      		<div class="navbar">

      			<div class="nav logo col-xs-4"></div>

      			<ul class="nav navbar-nav col-xs-8">
        			<li ><a href="#">Majors</a></li>
        			<li ><a href="#about">Minors</a></li>
        			<li ><a href="#contact">Courses</a></li>
      			</ul>
    		</div><!--/.navbar-->
	</div><!--  end row 1  -->

	<div class="row">
		<!-- subnav icon -->
		<div class="col-xs-3 col-sm-4">
    		<button type="button" class="navbar-toggle pull-left">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
     		</button>
     	</div>

     <!-- 	Search Bar -->
      <div class="col-xs-9 col-sm-8 pull-right">
        <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
        </form>
      </div>

  </div> <!-- end row 2 -->

   <!-- end row 3 -->

  </div>
</div>

	<div class="row">
		<div class="col-xs-12 maintitlebar">
  			<h1 class="maintitle center">University Catalog 2014-2015</h1>
  		</div>
  	</div>

