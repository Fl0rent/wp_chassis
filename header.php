<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title><?php balise_titre(); ?></title>
        
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<!-- ajout du fichier reset -->
			<link rel="stylesheet" href="#/reset.css" />		
		<!-- Google fonts -->

        <!-- Ajout de Favicon -->
        	<link rel="icon" type="image/png" href="images/favicon/favicon-32.png" />
        <!-- Ajout bouton iphone -->
        	<link rel="apple-touch-icon" href="images/boutoniphone/touch-icon-iphone.png" />
        <!-- code google verification-->
        
        
	    <!-- code google analytics-->
	    
	    
	    <!-- on appelle le jquery fournis ave WP pour éviter surcharge et conflits -->
			<?php
				wp_head();
				wp_enqueue_script("jquery");
			 ?>
	</head>


    <body>
        <div id="page">
        <!-- Intégralité de la page -->