<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <script type="text/javascript" src="bootstrap.min.js"></script>
	<?php wp_head();?>
</head>


<body>

<div id="fixbar">

  <div id="mininav">
    <div class="iconblock">
      <a href="#"><span class="glyphicon glyphicon-align-justify"></a>
    </div> <!-- end menu iconblock -->

    <div id="neglogo">
      <img src="<?php bloginfo('template_directory'); ?>/img/negative-logo.png">
    </div> <!-- end neglogo -->

    <div class="iconblock">
      <a href="#"><span class="glyphicon glyphicon-search right"></span></a>
    </div><!-- end search iconblock -->
  </div>

  <div class="container" id="headerbar">
      <div class="row">

          <div class="col-sm-6 col-lg-4">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" id="logo">
          </div>


          <div class="col-sm-6 col-lg-8">

            <div class="row" id="quicklinks">
                <ul class="right">
                    <li ><a href="#">Archives</a><div class="arrow-down"></div></li>
                    <li ><a href="#">Quicklinks</a><div class="arrow-down"></li>
                </ul>
            </div>

            <div class="row" id="quicklinks-lg">
                <ul class="right">
                    <li ><a href="#">Downloads</a><div class="arrow-down"></div></li>
                    <li ><a href="#">Skip Nav</a></li>
                    <li ><a href="#">Accessibility</a></li>
                    <li ><a href="#">Calendar</a></li>
                    <li ><a href="#">People Finder</a></li>
                    <li ><a href="#">A to Z</a></li>
                    <li ><a href="#">Webmail</a></li>
                </ul>
            </div>

            <form class="navbar-form" role="search">
              <div class="input-group csunsearch">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><!-- <div class="arrow-left"></div> --><span class="glyphicon glyphicon-search"></span></button>
                </div>
              </div>
            </form>
          </div>

      </div>   <!-- end row -->
  </div>


  <div id="csunnav">
      <div class="container">
      <ul class="nav navbar-nav">
          <li ><a href="#">Home</a></li>
          <li ><a href="#">Majors</a></li>
          <li ><a href="#">Minors</a></li>
          <li ><a href="#">Courses</a></li>
          <li ><a href="#">General Education</a></li>
          <li ><a href="#">Graduate Programs</a></li>
          <li ><a href="#">Archives</a></li>

      </ul>
      </div>

  </div> <!-- end csunnav -->




</div> <!-- end fixbar -->
