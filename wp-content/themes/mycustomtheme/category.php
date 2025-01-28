<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <a href="<?php the_permalink() ?>"><input type="button" value="Continue Reading"></a>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>


<footer>
    <?php get_footer(); ?>
</footer>

</html>