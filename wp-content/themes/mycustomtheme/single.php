<?php get_header();
the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<p> <?php echo get_the_date(); ?></p>
<?php comments_template(); ?>
<strong>
    <p> - <?php the_author(); ?></p>
</strong>