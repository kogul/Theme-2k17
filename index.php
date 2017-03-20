<?php get_header(); ?>

    <div class="col-md-9 posts">
        <div class="innerWrap">
        <?php
        if (have_posts()){
            while(have_posts()){
                the_post();
                ?>
        <div class="col-md-offset-1 col-md-10 post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('g:i a'); ?></p>
                <p class="cat"><?php the_category(','); ?></p>
                <hr>
                <p><?php the_excerpt(); ?></p>
        </div>
                <?php
            }
        }
        ?>
        </div>
        <div class="col-md-offset-4 col-md-4 dirwrap">
            <div class="col-md-6" id="previous"><?php previous_posts_link('<span class="btn btn-primary" >Previous Post</span>'); ?></div>
            <div class="col-md-6" id="next"><?php next_posts_link('<span class="btn btn-primary">Next Post</span>'); ?></div>
        </div>
    </div>
    <div class="col-md-3 sidebar">
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>