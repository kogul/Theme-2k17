<?php get_header('single'); ?>

    <div class="col-md-9 posts">
        <div class="col-md-offset-1 col-md-10 searchInf">
            <h2>Search</h2>
            <hr>
            <h5>Search Results For : <?php the_search_query(); ?></h5>
        </div>
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
    <div class="col-md-3 sidebar">
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>