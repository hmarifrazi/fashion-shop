<!DOCTYPE html>
<html<?php language_attributes();?>>
<head>
	<title>Fashion Shop | Home</title>
	<meta charset="<?php bloginfo('cherset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	
	<!----slider use---->


<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header-area">
	<!-- Top Header -->
	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-12">
					<ul class="top-header-contact-info">
						<li><i class="fa fa-envelope-o"></i> info@yourcompany.com</li>
						<li><i class="fa fa-phone"></i> Emergancy Helpline: <a href="tel:+44587154756">+91 123 456-7890</a></li>
					</ul>
				</div>
				
				<div class="col-lg-4 col-md-12">
					<ul class="top-header-social header_account">
						<li><a href="login.html"><i class="fa fa-sign-in"></i> Login <span>/</span></a> </li>
						<li><a href="register.html"><i class="fa fa-pencil-square-o"></i> Register</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- End Top Header -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="fashion-responsive-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="fashion-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<img src="<?= get_template_directory_uri(); ?>/assets/image/logo/logo.png" alt="logo">
							</a>
						</div>
						
						
						<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="cart.html"><i class="fa fa-shopping-cart"></i><span>1</span></a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div>

									<!--<div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div>-->
								</div>
					<!--mobile Menu  -->

					<div id="mySidenav" class="sidenav">
						<div class="menu_slid_bg">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
							
								<div class="col-sm-12" style="padding:0px;">
									<h3>Categories</h3>
									
									<ul class="accordion" id="accordion-category">
										<li class="panel mobile_menu_li">
											<a href="index.html" class=""></i> Home</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="about_us.html" class=""></i> about us</a>
										</li>
										
										
								<!--	<li class="panel mobile_menu_li">
											<a href="#" class="">Accessories</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category83" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category83" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.html">Services</a>
														</li>
														<li>
															 <a href="full_services_page.html">Services Full Page</a>
														</li>
													</ul>
												</div>
										</li>
										-->
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Shop</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category84" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category84" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="products.html">Coats</a>
														</li>
														<li>
															 <a href="products.html">Outwear</a>
														</li>
														<li>
															 <a href="products.html">T-shirt</a>
														</li>
														<li>
															 <a href="products.html">Caps</a>
														</li>
														<li>
															 <a href="products.html">Shoes</a>
														</li>
														<li>
															 <a href="products.html">Innerwear</a>
														</li>
														<li>
															 <a href="products.html">Suits</a>
														</li>
														<li>
															 <a href="products.html">Shirt</a>
														</li>
														<li>
															 <a href="products.html">Bags</a>
														</li>
														<li>
															 <a href="products.html">Dresses</a>
														</li>
														<li>
															 <a href="products.html">Swimwear</a>
														</li>
														<li>
															 <a href="products.html">Sweatshirts & Hoodies</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Shop</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category85" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category85" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.html">Products List</a>
														</li>
														<li>
															 <a href="cart.html">Cart</a>
														</li>
														<li>
															 <a href="checkout.html">Checkout</a>
														</li>
														<li>
															 <a href="single-products.html">Products Details</a>
														</li>
														<li>
															 <a href="404.html">404</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Blog</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category86" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category86" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="blog.html">Blog Grid</a>
														</li>
														<li>
															 <a href="blog-left.html">Blog Grid View Left</a>
														</li>
														<li>
															 <a href="blog-right.html">Blog Grid View right</a>
														</li>
														<li>
															 <a href="blog-details.html">Blog Details</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">my Account</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category87" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category87" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="login.html"> Login </a>
														</li>
														<li>
															 <a href="register.html"> Register</a>
														</li>
													</ul>
												</div>
										</li>

										<li class="panel mobile_menu_li">
											<a href="contact_us.html" class=""> Contact Us</a>
										</li>
									</ul>
							<div class="clear"></div>
							</div>
							 
						</div>
					</div>

					<span class="menu_open" onclick="openNav()">&#9776; Menu</span>
					<!-- mobile Menu  end-->
					</div>
				</div>
			</div>
		</div>

		<div class="fashion-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="header_menu_wrapper">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="index.html">
								<?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else { ?>
                            <?php bloginfo('title') ?>
                    <?php } ?>
							</a>

							<div class="collapse navbar-collapse mean-menu" style="display: block;">
								<?php
                            wp_nav_menu(array(
														'theme_location'	=> 'topmenu',
														'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
														'container'			=> 'nav',
														'container_class'	=> 'navbar navbar-expand-md navbar-light',
														'container_id'		=> 'navbar',
														'menu_class'		=> 'navbar-nav',
														'menu_id'			=> 'navbar',
														'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
														'walker'          	=> new WP_Bootstrap_Navwalker(),
														));
                        ?>

								<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="cart.html">
												<?php
                    global $woocommerce; 
                    $quantity=0;
                    foreach ( WC()->cart->get_cart() as $cart_item ) {
                        $item = $cart_item['data'];
                        if(!empty($item)) {
                            $quantity += $cart_item['quantity'];
                        }
                    }
                ?>
                <a href="<?= get_site_url() ?>/cart" class="btn border">
                    <i class="fa fa-shopping-cart text-primary"></i>
                    <span class="badge"><?= $quantity ?></span>
                </a>
											</a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
														<?php if( is_active_sidebar( 'search_bar' ) ) : ?>
														<?php dynamic_sidebar( 'search_bar' ); ?>
														<?php endif; ?>
										</div>
									</div>

									<!--<div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div>-->
								</div>
							</div>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar Area --> 
<div id="search" class="input-group header">
	<span class="close">x</span>
		<form>
			<input value="" name="search" type="search" placeholder="Search">
			 <span class="input-group-btn">
				<button type="button" class="btn"><i class="fa fa-search"></i></button>
			</span>
			<div class="clear"></div>
		</form>
</div>	
</header>
<!-- Header End -->
