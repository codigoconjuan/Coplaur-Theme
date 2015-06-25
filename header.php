<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.3&amp;sensor=false"></script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
<?php 
 print file_get_contents("http://portal.guadalajara.gob.mx/barra/");
?>
	    
            <?php
                 if(is_page('reglamentos') || is_page('capacitacion') || is_single() ) {
                        echo " <div id='top'></div>";
                }
            ?>
           

		<!-- wrapper -->
		<div class="container">

			<!-- header -->
			<header class="header clear row" role="banner">

					<!-- logo -->
					<div class="logo col-sm-4 hidden-xs">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                                        
                    <div class="sitename">
                        
                        <h1> <?php echo $blog_title = get_bloginfo(); ?></h1>
                    </div>


			</header>
			<!-- /header -->
                        

                </div>
                
                
                <div class="container">    
                <div class="clear"></div>

                
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

                        <div class=" row buscador clear">
                            <div class="col-sm-3 col-sm-offset-9">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
