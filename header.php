<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Cory Fitzpatrick | Web & Print Design <?php echo $title; ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="/wp-images/favicon.png"> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/rwdgrid.min.css" />
<?php wp_head(); ?>
<script type='text/javascript' src='http://coryfitzpatrick.com/wp-content/themes/portfolio/vendor/modernizr.custom.js'></script>

<!--Google Analytics--> 
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-31471900-1']);
	_gaq.push(['_trackPageview']);
	(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})(); 
</script>
<!--end Google-->
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<nav class="side-menu">
			<?php wp_nav_menu( array('container' => false,'menu_class' => false,) ); ?>
		</nav>
		<div id="header">
			<div class="grid-d-12">
				<div id="logo">
					<a href="http://coryfitzpatrick.com">
						<h1>Cory Fitzpatrick |</h1>
						<h2>Web Developer</h2>
					</a> 
				</div><!-- end #logo -->
				<nav id="nav">
					<?php wp_nav_menu( array('container' => false,'menu_class' => false,) ); ?>
				</nav><!-- end nav -->
				<a href="#" id="side-menu-toggle">
					<div></div>
				</a>
			</div>
		</div> <!-- end #header -->
	
