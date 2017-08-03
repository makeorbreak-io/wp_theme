<?php get_header(); ?>
<div class='banner' style="background-image:url(<?php header_image(); ?>)">
    <!-- <img src="" /> -->
    <h1 style='margin-left:-7px'>MAKE OR</h1>
    <h1 style='margin-left:-7px'>BREAK</h1>
    <hr class='separator' />
    <h2>8-10 September 2017</h2>
    <div class="ctas">
        <a class='large secondary button' target='_blank' href='https://makeorbreak.portosummerofcode.com'>Apply Now!</a>
        <a class='large secondary button' target='_blank' href='https://makeorbreak.portosummerofcode.com/rules'>Know more</a>
    </div>
</div>

<div class='blog_latest'>
    <div class="row">
        <div class="small-10 small-centered columns">
            <h4>Latest on the Blog</h4>
            <hr class='separator' />
        </div>
    </div>
    <div class="row">
        <div class="small-10 small-centered columns">
            <div class="row">
                <?php
                $args = array( 'numberposts' => 2 );
                $lastposts = get_posts( $args );
                foreach ($lastposts as $post) : setup_postdata($post); ?>
                    <div class="small-12 medium-6 columns post_thumbnail">
                        <a class='' href="<?php the_permalink(); ?>">
                            <div class='thumb_wrapper'>
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class='preview_wrapper'>
                                <h3><?php the_title(); ?></h3>
                                <p class='show-for-medium'><?php echo get_the_excerpt($post->ID); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
