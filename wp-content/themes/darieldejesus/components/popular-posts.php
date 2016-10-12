<div class="popular-posts-area">
    <h2 class="section-title">popular posts</h2>
    <div class="row">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'components/popular-post', get_post_format() );
        endwhile;
    endif;
    ?>
    </div>
</div><!-- /.popular-posts-area -->