
<div class="col-md-offset-1 col-md-10 cform commWrap">
    <?php
      foreach ($comments as $comment){
          ?>
          <h3><?php echo comment_author()?></h3>
          <h5><?php echo comment_date(); ?></h5>
          <div class="comment-body">
              <p><?php echo comment_text(); ?></p>
          </div>
    <?php
      }
    ?>
</div>
<?php

if (comments_open()){
    ?>
    <div class="col-md-offset-1 col-md-10 cform">
        <h2>Add a Comment</h2>
    <form action="<?php echo site_url('wp-comments-post.php') ?>" method="post" class="form-horizontal col-md-12" id="commentform">
        <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <input type="text" name="author" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <input type="text" name="url" class="form-control" placeholder="Website">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <textarea class="form-control" rows="4" name="comment" placeholder="Comment"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <button type="submit" class="btn btn-default">Add Comment</button>
            </div>
        </div>
    </form>
    </div>
<?php

}else{
    _e("Comments are closed","Theme 2k17");
}
?>