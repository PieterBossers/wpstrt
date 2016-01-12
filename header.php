<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo ( get_the_title() ) ? html_entity_decode( strip_tags( get_the_title() ) ) . " - " . __( 'site_title' , 'bmwcth' ) : __( 'site_title' , 'bmwcth' ); ?></title>
  	<meta property="og:title" content="<?php echo ( get_the_title() ) ? html_entity_decode( strip_tags( get_the_title() ) ) : __( 'site_title' , 'bmwcth' ); ?>"/>
	<meta property="og:image" content="<?php echo ( get_field('main_image') ) ? get_field('main_image')['url'] : get_stylesheet_directory_uri() . "blah.png"; ?>" />
	<meta property="og:site_name" content="<?php echo __( 'site_title' , 'bmwcth' ); ?>"/>
	<meta property="og:description" content="<?php echo ( get_the_excerpt() ) ? html_entity_decode( strip_tags( get_the_excerpt() ) ) : __( 'site_description' , 'bmwcth' ); ?>"/>
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<meta name="description" content="<?php echo ( get_the_excerpt() ) ? html_entity_decode( strip_tags( get_the_excerpt() ) ) : __( 'site_description' , 'bmwcth' ); ?>" />



    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

</head>

<body <?php body_class(); ?>>

    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TWB267"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TWB267');</script>


