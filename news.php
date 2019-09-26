<?php
    require_once('includes/config.php');
?>


<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 8)]><!-->
<html lang="en-US" class="cmsms_html">

<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!--<link rel="shortcut icon" href="img/favicon-2.jpg" type="image/x-icon" />-->
		<link rel="shortcut icon" href="images/punarnavalogo.png" type="image/x-icon" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<title>News | Punarnava</title>
		
		<link rel='stylesheet' href='css/ilightbox.css' />
		<link rel='stylesheet' href='css/ilightbox-skins/dark-skin.css' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='css/adaptive.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='css/fontello.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='css/jquery.isotope.css' />
		<!--[if lte IE 9]>
			<link rel='stylesheet' href='css/ie.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_fonts.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_primary.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_secondary.css' type='text/css' media='screen' />
		<![endif]-->
		<link rel='stylesheet' href='css/econature.css' />
		<link rel='stylesheet' id='cmsms-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oxygen%3A300%2C400%2C700&amp;ver=4.2.1' type='text/css' media='all' />
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/jsLibraries.min.js'></script>
		<style type="text/css">
			.header_top,
			.header_top_outer,
			.header_top_inner, 
			.header_top_aligner {
				height : 35px;
			}
			
			.header_mid,
			.header_mid_outer,
			.header_mid .header_mid_inner .search_wrap_inner,
			.header_mid .header_mid_inner .slogan_wrap_inner,
			.header_mid .header_mid_inner .social_wrap_inner,
			.header_mid .header_mid_inner nav > div > ul,
			.header_mid .header_mid_inner nav > div > ul > li,
			.header_mid .header_mid_inner nav > div > ul > li > a,
			.header_mid .header_mid_inner nav > div > ul > li > a > span.nav_bg_clr,
			.header_mid .header_mid_inner .logo,
			.header_mid .header_mid_inner .resp_nav_wrap_inner {
				height : 95px;
			}
			
			.header_bot,
			.header_bot_outer,
			.header_bot .header_bot_inner nav > div > ul,
			.header_bot .header_bot_inner nav > div > ul > li,
			.header_bot .header_bot_inner nav > div > ul > li > a {
				height : 45px;
			}
			
			#page.fixed_header #middle {
				padding-top : 95px;
			}
			
			#page.fixed_header.enable_header_top #middle {
				padding-top : 130px;
			}
			
			#page.fixed_header.enable_header_bottom #middle {
				padding-top : 140px;
			}
			
			#page.fixed_header.enable_header_top.enable_header_bottom #middle {
				padding-top : 175px;
			}
			
			@media only screen and (max-width: 1024px) {
				.header_top,
				.header_top_outer,
				.header_top_inner,
				.header_top_aligner,
				.header_mid,
				.header_mid_outer,
				.header_mid .header_mid_inner nav > div > ul,
				.header_mid .header_mid_inner nav > div > ul > li,
				.header_mid .header_mid_inner nav > div > ul > li > a,
				.header_mid .header_mid_inner nav > div > ul > li > a > span.nav_bg_clr,
				.header_bot,
				.header_bot_outer,
				.header_bot .header_bot_inner nav > div > ul,
				.header_bot .header_bot_inner nav > div > ul > li,
				.header_bot .header_bot_inner nav > div > ul > li > a {
					height : auto;
				}
				
				#page.fixed_header #middle,
				#page.fixed_header.enable_header_top #middle,
				#page.fixed_header.enable_header_bottom #middle,
				#page.fixed_header.enable_header_top.enable_header_bottom #middle {
					padding-top : 0px !important;
				}
			}
			.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list {
			overflow-y:auto;
			}

			.header_mid_inner .logo {
			position:static;
			}
			#footer.cmsms_footer_default .footer_inner {
				min-height:450px;
			}
			
			.fixed_footer #main {
				margin-bottom:450px;
			}
			
			.header_mid .header_mid_inner .logo_wrap {
				width : 179px;
			}
			
			.header_mid_inner .logo .logo_retina {
					width : 179px;
			}
			
			.headline_outer {
				background-image: url(img/images/bg-big-water.jpg); 
				background-repeat:repeat;
				background-attachment:fixed;
				background-size:cover;
			}
				
			.headline_color {
				background-color:#000000;
				opacity:0;
			}
			
			.headline_aligner {
				min-height:150px;
			}
			
			#cmsms_row_5548a7b764a2f .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b764a2f .cmsms_row_outer_parent { 
				padding-bottom: 40px; 
			} 
			 
			#cmsms_heading_5548a7b764c0c, #cmsms_heading_5548a7b764c0c a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b764d38 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b764d38 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_row_5548a7b76965e .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b76965e .cmsms_row_outer_parent { 
				padding-bottom: 40px; 
			} 
			 
			#cmsms_heading_5548a7b769858, #cmsms_heading_5548a7b769858 a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b76993b .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b76993b .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_row_5548a7b76b78b .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b76b78b .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			}
			 
			#cmsms_heading_5548a7b76b9ec, #cmsms_heading_5548a7b76b9ec a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b76bb07 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b76bb07 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_clients_5548a7b76bcdd .cmsms_clients_item { height:160px; line-height:160px; } 
			#cmsms_clients_5548a7b76bcdd .cmsms_clients_item a { line-height:160px; } 
			 
			#cmsms_row_5548a7b76d2f5 { 
				background-image: url(img/images/bg-big-water.jpg); 
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_5548a7b76d2f5 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_5548a7b76d2f5 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			} 
		</style>
	</head>
	<body>
<!-- _________________________ Start Page _________________________ -->
		<div id="page" class="csstransition cmsms_liquid fixed_header hfeed site">
			<!-- _________________________ Start Main _________________________ -->
			<div id="main">
			<!-- _________________________ Start Header _________________________ -->
				<header id="header">
					<div class="header_mid" data-height="95">
						<div class="header_mid_outer">
							<div class="header_mid_inner">
								<div class="logo_wrap">
									<a href="index.php" title="PUNARNAVA" class="logo">
										 <img src="images/punarnavalogo.png" alt="Eco Nature" />
										<!--<img class="logo_retina" src="img/logo.png" alt="Eco Nature" width="179" height="44" /> -->
										<!--<h1 style="padding-top:25px;font-style: normal;"><span style="color:#b157af">PUNAR</span><span style="color:#9dc96a">NAVA</span></h1>-->
									</a>
								</div>
								<div class="resp_nav_wrap">
									<div class="resp_nav_wrap_inner">
										<div class="resp_nav_content">
											<a class="responsive_nav cmsms-icon-menu-2" href="javascript:void(0);"></a>
										</div>
									</div>
								</div>
							
	                        <!-- _________________________ Start Navigation _________________________ -->
								<?php
								include("header.php");
								?>
	<!-- _________________________ Finish Navigation _________________________ -->
							</div>
						</div>
					</div>
				</header>		
			<!-- _________________________ Finish Header _________________________ -->
			<!-- _________________________ Start Middle _________________________ -->
				<section id="middle">
					<div class="headline cmsms_color_scheme_first">
						<div class="headline_outer">
							<div class="headline_color"></div>
							<div class="headline_inner align_center">
								<div class="headline_aligner"></div><div class="headline_text headline_subtitle"><h1 class="entry-title">News</h1>
								<!--<h5>Our Latest News</h5></div>-->
							</div>
						</div>
					</div>
					<div class="middle_inner">
				<!--_________________________ Start Content _________________________ -->
						<div id="cmsms_row_5548a7b764a2f" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<!--<h3 id="cmsms_heading_5548a7b764c0c" class="cmsms_heading">News</h3>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div id="cmsms_row_5" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
										
											<div class="cmsms_column one">
												<h4 id="cmsms_heading_553e49e807cad" style="text-align:justify;" class="cmsms_heading"></h4>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cmsms_row_5548a7b764d38" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<div class="cmsms_profile horizontal">
											
											
											<?php 
		                                          $sel = mysqli_query($con, "select * from news");
						                          while($row = mysqli_fetch_array($sel)) {
						                          $sss = strtotime($row['date']);
						                          $res = date('F j,Y', $sss);
					                         ?>	    
												    
												    
													<article class="one_third format-profile">
														<div class="pl_img">
															<figure>
																<a href="open-news.php?id=<?php echo $row['id']; ?>">
																	<img width="580" height="390" src="admin/<?php echo $row['image4']; ?>" class="attachment-blog-masonry-thumb" alt="Caroline Gerwig" title="Caroline Gerwig" />
																</a>
															</figure>
														</div>
														<div class="pl_content">
															<h2 class="entry-title">
																<a href="open-news.php?id=<?php echo $row['id']; ?>" style="color:black;"><?php echo $row['news']; ?></a>
															</h2>
															<h5 class="pl_subtitle" style="color:black;"><i class="far fa-calendar-alt"></i>&nbsp <?php echo $res; ?></h5>
															<div class="entry-content" style="color:black;"><?php echo $row['description']; ?></div>
														</div>
														<div class="pl_social">
															<ul class="pl_social_list">
																<li><a href="#" class="cmsms-icon-twitter-circled" title style="color:grey"></a></li>
																<li><a href="#" class="cmsms-icon-facebook-circled" title style="color:grey"></a></li>
																<li><a href="#" class="cmsms-icon-gplus-circled" title style="color:grey"></a></li>
																<li><a href="#" class="cmsms-icon-linkedin-circled" title style="color:grey"></a></li>
																<li><a href="#" class="cmsms-icon-vimeo-circled" title style="color:grey"></a></li>
															</ul>
														</div>
														<div class="cl"></div>
													</article>
													
											<?php } ?>	
													
													
													<!--<article class="one_third profile_even format-profile">-->
													<!--	<div class="pl_img">-->
													<!--		<figure>-->
													<!--			<a href="open-profile.html">-->
													<!--				<img width="580" height="390" src="images/bird3.jpg" class="attachment-blog-masonry-thumb" alt="Karen Dawson" title="Karen Dawson" />-->
													<!--			</a>-->
													<!--		</figure>-->
													<!--	</div>-->
													<!--	<div class="pl_content">-->
													<!--		<h2 class="entry-title">-->
													<!--			<a href="open-profile.html">Karen Dawson</a>-->
													<!--		</h2>-->
													<!--		<h5 class="pl_subtitle"><i class="far fa-calendar-alt"></i> Dec 7,2018</h5>-->
													<!--		<div class="entry-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et facilisi.</div>-->
													<!--	</div>-->
													<!--	<div class="pl_social">-->
													<!--		<ul class="pl_social_list">-->
													<!--			<li><a href="#" class="cmsms-icon-twitter-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-facebook-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-flickr-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-vimeo-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-linkedin-circled" title=""></a></li>-->
													<!--		</ul>-->
													<!--	</div>-->
													<!--	<div class="cl"></div>-->
													<!--</article>-->
													
													
													
													<!--<article class="one_third format-profile">-->
													<!--	<div class="pl_img">-->
													<!--		<figure>-->
													<!--			<a href="open-profile.html">-->
													<!--				<img width="580" height="390" src="images/bird3.jpg" class="attachment-blog-masonry-thumb" alt="Simon Green" title="Simon Green" />-->
													<!--			</a>-->
													<!--		</figure>-->
													<!--	</div>-->
													<!--	<div class="pl_content">-->
													<!--		<h2 class="entry-title">-->
													<!--			<a href="open-profile.html">Simon Green</a>-->
													<!--		</h2>-->
													<!--		<h5 class="pl_subtitle"><i class="far fa-calendar-alt"></i> Dec 7,2018</h5>-->
													<!--		<div class="entry-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et facilisi.</div>-->
													<!--	</div>-->
													<!--	<div class="pl_social">-->
													<!--		<ul class="pl_social_list">-->
													<!--			<li><a href="#" class="cmsms-icon-twitter-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-facebook-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-flickr-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-linkedin-circled" title=""></a></li>-->
													<!--			<li><a href="#" class="cmsms-icon-gplus-circled" title=""></a></li>-->
													<!--		</ul>-->
													<!--	</div>-->
													<!--	<div class="cl"></div>-->
													<!--</article>-->
													
													
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--<div id="cmsms_row_5548a7b76965e" class="cmsms_row cmsms_color_scheme_default">-->
						<!--	<div class="cmsms_row_outer_parent">-->
						<!--		<div class="cmsms_row_outer">-->
						<!--			<div class="cmsms_row_inner">-->
						<!--				<div class="cmsms_row_margin">-->
						<!--					<div class="cmsms_column one_first">-->
						<!--						<h3 id="cmsms_heading_5548a7b769858" class="cmsms_heading">What People Say</h3>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div id="cmsms_row_5548a7b76993b" class="cmsms_row cmsms_color_scheme_default">-->
						<!--	<div class="cmsms_row_outer_parent">-->
						<!--		<div class="cmsms_row_outer">-->
						<!--			<div class="cmsms_row_inner">-->
						<!--				<div class="cmsms_row_margin">-->
						<!--					<div class="cmsms_column one_first">-->
						<!--						<div class="quote_grid quote_two">-->
						<!--							<div class="quote_vert"></div>-->
						<!--							<div class="quotes_list">-->
						<!--								<div class="cmsms_quote">-->
						<!--									<article class="cmsms_quote_inner">-->
						<!--										<figure class="quote_image">-->
						<!--											<img width="200" height="200" src="img/images/thumbnail_Natalie_Channing.jpg" class="attachment-thumbnail" alt="organic-img" />-->
						<!--										</figure>-->
						<!--										<div class="quote_content_wrap">-->
						<!--											<div class="quote_content">-->
						<!--												<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et et dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis. Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien.</p>-->
						<!--											</div>-->
						<!--											<h6 class="quote_title">Natalie Channing</h6>-->
						<!--											<span class="quote_subtitle">Volunteer</span>-->
						<!--										</div>-->
						<!--									</article>-->
						<!--								</div>-->
						<!--								<div class="cmsms_quote">-->
						<!--									<article class="cmsms_quote_inner">-->
						<!--										<figure class="quote_image">-->
						<!--											<img width="200" height="200" src="img/images/thumbnail_Michael_Linden.jpg" class="attachment-thumbnail" alt="6844805970_8dc4bcdeb4_b99" />-->
						<!--										</figure>-->
						<!--										<div class="quote_content_wrap">-->
						<!--											<div class="quote_content">-->
						<!--												<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et et dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis. Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien.</p>-->
						<!--											</div>-->
						<!--											<h6 class="quote_title">Michael Linden</h6>-->
						<!--											<span class="quote_subtitle">Volunteer</span>-->
						<!--										</div>-->
						<!--									</article>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--							<div class="quotes_list">-->
						<!--								<div class="cmsms_quote">-->
						<!--									<article class="cmsms_quote_inner">-->
						<!--										<figure class="quote_image">-->
						<!--											<img width="200" height="200" src="img/images/thumbnail_Anna_Lee.jpg" class="attachment-thumbnail" alt="6772398921_e349a76c6c_b1" />-->
						<!--										</figure>-->
						<!--										<div class="quote_content_wrap">-->
						<!--											<div class="quote_content">-->
						<!--												<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et et dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						<!--											</div>-->
						<!--											<h6 class="quote_title">Anna Lee</h6>-->
						<!--											<span class="quote_subtitle">Volunteer</span>-->
						<!--										</div>-->
						<!--									</article>-->
						<!--								</div>-->
						<!--								<div class="cmsms_quote">-->
						<!--									<article class="cmsms_quote_inner">-->
						<!--										<figure class="quote_image">-->
						<!--											<img width="200" height="200" src="img/images/thumbnail_Joan_Smith.jpg" class="attachment-thumbnail" alt="SplitShire_IMG_0027" />-->
						<!--										</figure>-->
						<!--										<div class="quote_content_wrap">-->
						<!--											<div class="quote_content">-->
						<!--												<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et et dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						<!--											</div>-->
						<!--											<h6 class="quote_title">Joan Smith</h6>-->
						<!--											<span class="quote_subtitle">Volunteer</span>-->
						<!--										</div>-->
						<!--									</article>-->
						<!--								</div>-->
						<!--							</div>-->
						<!--							<div class="quotes_list"></div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div id="cmsms_row_5548a7b76b78b" class="cmsms_row cmsms_color_scheme_default">-->
						<!--	<div class="cmsms_row_outer_parent">-->
						<!--		<div class="cmsms_row_outer">-->
						<!--			<div class="cmsms_row_inner">-->
						<!--				<div class="cmsms_row_margin">-->
						<!--					<div class="cmsms_column one_first">-->
						<!--						<h3 id="cmsms_heading_5548a7b76b9ec" class="cmsms_heading">Clients</h3>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div id="cmsms_row_5548a7b76bb07" class="cmsms_row cmsms_color_scheme_default">-->
						<!--	<div class="cmsms_row_outer_parent">-->
						<!--		<div class="cmsms_row_outer">-->
						<!--			<div class="cmsms_row_inner">-->
						<!--				<div class="cmsms_row_margin">-->
						<!--					<div class="cmsms_column one_first">-->
						<!--						<script type="text/javascript">-->
						<!--							jQuery(document).ready(function (){ -->
						<!--								jQuery("#cmsms_clients_5548a7b76bcdd").owlCarousel({-->
						<!--									singleItem : false, -->
						<!--									items : 5, -->
						<!--									itemsDesktopSmall : [768,2], -->
						<!--									itemsTablet: [540,1], -->
						<!--									slideSpeed : 1000, -->
						<!--									paginationSpeed : 	1000, -->
						<!--									autoPlay : false, -->
						<!--									stopOnHover: true,-->
						<!--									pagination: false, -->
						<!--									navigationText : [ "<span class=\"cmsms_prev_arrow\"></span>", "<span class=\"cmsms_next_arrow\"></span>" ] -->
						<!--								});-->
						<!--							});-->
						<!--						</script>-->
						<!--						<div class="cmsms_clients_slider_wrap">-->
						<!--							<div id="cmsms_clients_5548a7b76bcdd" class="cmsms_clients_slider owl-carousel clients_noborder">-->
						<!--								<div class="cmsms_clients_item item">-->
						<!--									<img src="img/images/client_Increase.png" alt="Increase" title="Increase" />-->
						<!--								</div>-->
						<!--								<div class="cmsms_clients_item item">-->
						<!--									<img src="img/images/client_BigFish.png" alt="BigFish" title="BigFish" />-->
						<!--								</div>-->
						<!--								<div class="cmsms_clients_item item">-->
						<!--									<img src="img/images/client_Shepard.png" alt="Shepard" title="Shepard" />-->
						<!--								</div>-->
						<!--								<div class="cmsms_clients_item item">-->
						<!--									<img src="img/images/client_NewGate.png" alt="NewGate" title="NewGate" />-->
						<!--								</div>-->
						<!--								<div class="cmsms_clients_item item">-->
						<!--									<img src="img/images/client_Cleverminds.png" alt="Cleverminds" title="Cleverminds" />-->
						<!--								</div>-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						</div>
						<div id="cmsms_row_5548a7b76d2f5" class="cmsms_row cmsms_color_scheme_first" data-stellar-background-ratio="0.5">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<div class="cmsms_sidebar sidebar_layout_14141414">
													<aside class="widget widget_text">
														<h3 class="widgettitle">Links</h3>
														<div class="textwidget">
														<?php
															include("footer.php");
															?>
														</div>
													</aside>
														<aside class="widget widget_text">
														<h3 class="widgettitle">Address</h3>
														<div class="textwidget">
															<ul>
																<li class="cmsms-icon-location-7"> "Punarnava", Plot Number 35-B,

                                                                        Hindusthan Colony,
                                                                                                                
                                                                       Off Amravati Road,
                                                                                                                
                                                                         Nagpur - 4440033</li>
																
															</ul>
														</div>
													</aside>
													<aside class="widget widget_text">
														<h3 class="widgettitle">Contact</h3>
														<div class="textwidget">
															<ul>
																<li id="cmsms_icon_list_item_555091c558872" class="cmsms_icon_list_item cmsms-icon-mobile-6">+91 9823612468</li>
																<li id="cmsms_icon_list_item_555091c558872" class="cmsms_icon_list_item cmsms-icon-mobile-6">+91 9225214377 </li>

													<li id="cmsms_icon_list_item_555091c5588fb" class="cmsms_icon_list_item cmsms-icon-mail-7">info@punarnava.co.in</li>
															</ul>
														</div>
													</aside>
													<aside class="widget widget_text">
														<h3 class="widgettitle">About</h3>
															<div class="textwidget">
																<h3>Punarnava Ecological Services and Eco-design Solutions</h3>
															</div>
													</aside>
													<div class="cl"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="cl"></div>
						<!-- _________________________ Finish Content _________________________ -->
					</div>
				</section>
			<!-- _________________________ Finish Middle _________________________ -->
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
			<!-- _________________________ Finish Main _________________________ -->
			<!-- _________________________ Start Footer _________________________ -->
			<footer id="footer" class="cmsms_color_scheme_footer cmsms_footer_small">
				<div class="footer_bg">
					<div class="footer_inner">
						<div class="social_wrap">
							<div class="social_wrap_inner">
								<ul>
									<li><a href="#" class="cmsms-icon-twitter-circled" title="Twitter" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-facebook-circled" title="Facebook" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-gplus-circled" title="Google+" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-vimeo-circled" title="Vimeo" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-skype-circled" title="Skype" target="_blank"></a></li>
								</ul>
							</div>
						</div>
						<span class="copyright">Iceico Technologies &copy; 2018 | All Rights Reserved</span>
					</div>
				</div>
			</footer>
<!-- _________________________ Finish Footer _________________________ -->
		</div>
<!-- _________________________ Finish Page _________________________ -->
		
		
		<script type='text/javascript' src='js/jqueryLibraries.min.js'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
			var cmsms_script = {
				"ilightbox_skin":"dark",
				"ilightbox_path":"vertical",
				"ilightbox_infinite":"0",
				"ilightbox_aspect_ratio":"1",
				"ilightbox_mobile_optimizer":"1",
				"ilightbox_max_scale":"1",
				"ilightbox_min_scale":"0.2",
				"ilightbox_inner_toolbar":"0",
				"ilightbox_smart_recognition":"0",
				"ilightbox_fullscreen_one_slide":"0",
				"ilightbox_fullscreen_viewport":"center",
				"ilightbox_controls_toolbar":"1",
				"ilightbox_controls_arrows":"0",
				"ilightbox_controls_fullscreen":"1",
				"ilightbox_controls_thumbnail":"1",
				"ilightbox_controls_keyboard":"1",
				"ilightbox_controls_mousewheel":"1",
				"ilightbox_controls_swipe":"1",
				"ilightbox_controls_slideshow":"0",
				"ilightbox_close_text":"Close",
				"ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)",
				"ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)",
				"ilightbox_slideshow_text":"Slideshow",
				"ilightbox_next_text":"Next",
				"ilightbox_previous_text":"Previous",
				"ilightbox_load_image_error":"An error occurred when trying to load photo.",
				"ilightbox_load_contents_error":"An error occurred when trying to load contents.",
				"ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
			};
		/* ]]> */
		</script>
		<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
		<script type='text/javascript' src='js/jquery.isotope.mode.js'></script>
		<script type='text/javascript' src='js/jquery.script.js'></script>
		<script type='text/javascript' src='js/jquery.tweet.min.js'></script>
	</body>

<!-- Mirrored from eco-nature-html.cmsmasters.net/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 13:10:07 GMT -->
</html>
