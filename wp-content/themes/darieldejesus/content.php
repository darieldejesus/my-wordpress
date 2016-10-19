<div class="popular-posts-area">
    <h2 class="section-title">popular posts</h2>
    <div class="row">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'components/popular-post', get_post_format() );
        endwhile;
    ?>
    <div id="pagination-container" class="col-xs-12">
    <?php
        if ( get_next_posts_link() ) {
            next_posts_link( 'Older blogs' );
        }
        if ( get_previous_posts_link() ) {
            previous_posts_link( 'Newer blogs' );
        }
    ?>
    </div>
    <?php
    endif;
    ?>
    </div>
</div><!-- /.popular-posts-area -->