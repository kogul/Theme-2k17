<?php get_header(); ?>

    <div class="col-md-12 posts">
        <?php
        if (have_posts()){
            while(have_posts()){
                the_post();
                ?>
                <div class="col-md-offset-1 col-md-10 post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_time('g:i a'); ?></p>
                    <hr>
                    <?php the_content(); ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
<?php get_footer(); ?>