<div class="col-md-12">
    <div class="single-review">
        <div class="post-img">
            <a href="#"><img src="https://devitems.com/tf/blogging-preview/img/blog/5.jpg" alt="Popular Post" /></a>
            <div class="post-info">
                <p>
                    <span class="post-date"><a href="#"><?php the_date(); ?></a></span>
                    <span class="post-social-links">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    </span>
                </p>
            </div>
        </div>
        <div class="post-content">
            <h6 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <p class="post-short-desc"><?php the_excerpt(); ?></p>
            <a href="#" class="continue-link">Continue Reading...</a>
        </div>
    </div><!-- /.single-review -->
</div>