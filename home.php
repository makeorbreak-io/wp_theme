<?php
/*
Template Name: Blog Index
*/
get_header(); ?>
<div class='content'>
    <div class='blog'>
        <div class='row'>
            <div class='small-12 medium-5 medium-centered columns'>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $counter++ ?>
                    <a class='go_to_post' href='<?php echo get_post_permalink(); ?>'>
                        <?php if($counter == 1) : ?>
                            <div class='row'>
                                <div class='small-12 columns first_post'>
                                    <?php the_post_thumbnail(); ?>
                                    <time><?php the_date(); ?></time>
                                    <h4><?php the_title(); ?></h4>
                                    <p class='excerpt'><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class='row'>
                                <div class='small-4 columns'>
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <div class='small-8 columns'>
                                    <time><?php the_date(); ?></time>
                                    <h5><?php the_title(); ?></h5>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endwhile; else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
