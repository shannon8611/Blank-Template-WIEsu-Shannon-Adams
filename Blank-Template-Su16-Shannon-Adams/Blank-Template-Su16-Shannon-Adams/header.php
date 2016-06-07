<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

	<title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
	
</head>

<body>
    <div class="container">
    <!--Begin Header-->
        <header class="row">
            <div class="twelve columns">
                <h1><a href="<?php 
                $url = home_url('/'); 
                echo $url; 
            ?>"><?php bloginfo('name'); ?></a></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
        </header>
    <!--End Header-->
        
    <!-- Add Menu Here -->
<div class="row">
    <div class="twelve columns">
        <?php wp_nav_menu(array(
            'sort_column' => 'menu_order', 
            'container_class' => 'blank-menu-header'
            ));
        ?>
    </div>
</div>