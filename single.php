<?php get_header(); ?>

<div class='single_post'>
    <div class='row'>
        <div class='small-12 medium-8 medium-centered columns'>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class='title'><?php the_title(); ?></h1>
                <div class='content'><?php the_content(); ?></div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
