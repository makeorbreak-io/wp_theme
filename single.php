<?php get_header(); ?>
<div class='content'>
    <div class='single_post'>
        <div class='row'>
            <div class='small-12 medium-7 medium-centered columns'>
                <?php while (have_posts()) : the_post(); ?>
                    <h3 class='title'><?php the_title(); ?></h3>
                    <div class='content'><?php the_content(); ?></div>
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
                                            <h6><?php echo $prev_post->post_title; ?></h6>
                                        </div>
                                    </div>
                                </a>
                            <?php endif ?>
                        </div>
                        <div class='small-12 medium-6 columns next'>
                            <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post )): ?>
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                                <div class='row'>
                                    <div class='small-8 columns'>
                                        <p>Next</p>
                                        <h6><?php echo $next_post->post_title; ?></h6>
                                    </div>
                                    <div class='small-4 columns'>
                                        <?php echo get_the_post_thumbnail($next_post, 'thumbnail') ?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
