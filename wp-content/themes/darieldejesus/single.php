<?php get_header(); ?>
        <!-- main-content-area start -->
        <div id="main-content" class="main-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'content-single', get_post_format() );
                        endwhile;
                    endif;
                    ?>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-area end -->
<?php get_footer(); ?>