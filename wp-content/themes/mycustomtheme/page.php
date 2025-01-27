<?php get_header(); ?>

<h1> --- <?php  the_title();?> --- </h1>
<p><?php echo get_the_content(); ?></p>
<?php the_post_thumbnail('large') ?>
<!--    For logo Image -->
    


<?php get_footer(); ?>
