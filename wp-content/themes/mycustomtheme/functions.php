<!--  Registering Menu    -->
<?php
register_nav_menus(
    array('primary_menu' => 'Top Menu'),
);

// Registering Thumbnail In Admin
add_theme_support('post-thumbnails');

// Registering Logo In Admin
add_theme_support('custom-header');

// Registering Sidebar In Admin
register_sidebar(
    array(
        'name' => 'Main Sidebar',
        'id' => 'sidebar01',
        'description' => 'just my first custom sidebar'
    )
)

?>
