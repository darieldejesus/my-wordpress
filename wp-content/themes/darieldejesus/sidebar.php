<div class="sidebar-area fix">
    <div class="single-sidebar-widget">
        <h6 class="widget-title">about me</h6>
        <div class="sidebar-content about-me">
            <div class="my-photo">
                <a href="#"><img class="img-circle" src="<?php bloginfo( 'template_url' ); ?>/img/sidebar/me.jpg" alt="My Image" /></a>
            </div>
            <p><?php the_author_meta( 'description' ); ?></p>
        </div><!-- /.sidebar-content -->
    </div><!-- /.single-sidebar-widget -->
    <div class="single-sidebar-widget">
        <h6 class="widget-title">follow me on</h6>
        <div class="sidebar-content">
            <div class="social-links-area">
                <div class="single-icon">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                        <p>Instagram</p>
                    </a>
                </div>
                <div class="single-icon">
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                        <p>Email</p>
                    </a>
                </div><!-- /.single-icon -->
            </div><!-- /.social-links-area -->
        </div><!-- /.sidebar-content -->
    </div><!-- /.single-sidebar-widget -->
</div><!-- /.sidebar-area -->