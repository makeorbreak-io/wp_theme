<?php get_header(); ?>
<div class='content'>
    <div class='single_post'>
        <?php while (have_posts()) : the_post(); ?>
            <div class='row'>
                <div class='small-12 medium-7 medium-centered columns'>
                    <h3 class='title'><?php the_title(); ?></h3>
                    <div class='content'><?php the_content(); ?></div>
                </div>
            </div>

            <div class='navigation'>
                <div class='row'>
                    <div class='previous small-12 medium-10 medium-centered columns'>
                        <div class='row'>
                            <div class='previous small-12 medium-6 columns'>
                                <?php
                                $prev_post = get_previous_post();
                                if (!empty( $prev_post )): ?>
                                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                                        <div class='row'>
                                            <div class='small-4 columns'>
                                                <?php echo get_the_post_thumbnail($prev_post, 'thumbnail') ?>
                                            </div>
                                            <div class='small-8 columns'>
                                                <p>Previous</p>
                                                <h5><?php echo $prev_post->post_title; ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                            <div class='next small-12 medium-6 columns'>
                                <?php
                                $next_post = get_next_post();
                                    if (!empty( $next_post )): ?>
                                    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                                        <div class='row'>
                                            <div class='small-8 columns'>
                                                <p>Next</p>
                                                <h5><?php echo $next_post->post_title; ?></h5>
                                            </div>
                                            <div class='small-4 columns'>
                                                <?php echo get_the_post_thumbnail($next_post, 'thumbnail') ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
