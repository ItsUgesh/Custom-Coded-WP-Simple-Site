<?php wp_head(); ?>

<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?> <?php if(is_front_page()){echo "| "; bloginfo('description');}  ?> </title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<header class="site-header">
    <div class="container">
        <h1 class="site-title">
            <a href="<?php the_permalink(10) ?>">My Portfolio</a>
        </h1>
        <nav class="site-menu">
            <ul class="menu">

                <?php
                //Calling the menu from function.php
                wp_nav_menu(array('theme_location' => 'primary_menu'),);
                ?>

            </ul>
        </nav>
    </div>
</header>