<div class="jumbotron">
  <div class="container">
          <h2 class="mbot0" style="letter-spacing:-2px;">
Welcome to Redhot Forex -
<strong class="inverted"># 1 Forex Blog</strong>
- For Free
</h2>
        <h1 class="headerfp">FX Price Action Strategy</h1>

        <p class="mbot1">Take your trading to the next level. Forex trading system using 4 hour, daily and weekly charts. The system is a low-maintenance, simple price action strategy, using exponential moving averages and pivot points for support and resistance.</p>

        <!-- <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.png" class="img-responsive img-centered" alt=""></p> -->
          <p><a class="btn btn-lg btn-primary" href="<?php get_bloginfo('name'); ?>blog/" title="Follow my Blog"> <i class="fa fa-comment"></i> Follow my Blog</a></p>


          <?php putRevSlider("slider") ?>
      </div>

</div>


<div class="Benefits">
   <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="h3index"><strong>Benefits</strong> of my Trading Systems</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-cog fa-spin"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Price Action</h4>
                            <p class="tall">Profitable > 70%</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-signal"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Trend trading</h4>
                            <p class="tall">The trend is your friend</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Strict moneymanagement</h4>
                            <p class="tall">Its all about discipline</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Easy learning</h4>
                            <p class="tall">use of the most essential ema's</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Weekly FX Outlook</h4>
                            <p class="tall">Read and Learn</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-thumbs-o-up"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">100% Quality</h4>
                            <p class="tall">No bull strategy</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Twitter updates</h4>
                            <p class="tall">Follow on twitter for daily updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="h3index">About...</h3>
            <div class="contentabout">
                <p>My system is simple price action based trading using support and resistance. Does it work 100%. Sure not, but followed by
                strict moneymanagement, can be very profitable. Follow and see for yourself.  </p>
            </div>
            <a class="btn btn-lg btn-primary" href="http://www.twitter.com/leviceroy" target="_blank"> <i class="fa fa-twitter"></i> Follow me on twitter!</a>
        </div>
    </div>
</div>
</div> <!-- end Benefits-->

<!-- Blog Section -->
<?php
$args = array(
        'showposts' => '3',
        'post_type' => 'post'
    );

query_posts($args);
?>

<!-- Blog Section Title from option-tree-->
<section id="blog">
    <div class="container">
    <div class="row">


                <div class="col-lg-12 text-center">
                    <h3 class="h3index">Latest <strong>Blog</strong> Posts</h3>
                    <hr class="star-light">
                </div>


        <ul class="row blog-row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
            $title = str_ireplace('"', '', trim(get_the_title()));
            $permalink = get_permalink( $id );
            $desc = string_limit_words(get_the_excerpt(), 20);
        ?>

            <li class="col-sm-4 col-md-4 col-lg-4">
                <figure class="blog-item">
                <?php echo '<a href="'.$permalink.'" >'; ?>
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive'));
                        } else {
                            echo '<img width="260" height="320" class="img-responsive wp-post-image" src="'.get_bloginfo('template_directory').'/assets/img/blog-placeholder.png" alt="'.$title.'" >';
                        } ?>
                        <div class="caption-bg"></div>
                        <h3><?php echo $title?></h3>
                        <p class="blog-item-description"><?php echo strip_tags($desc); ?></p>
                    </a>
                </figure>
            </li>
        <?php endwhile; endif; ?>
        </ul>

<p><a class="btn btn-lg btn-outline" href="<?php get_bloginfo('name'); ?>blog" title="Follow my Blog"> <i class="fa fa-comment"></i> Follow my Blog</a></p>


    </div>
  </div>
</section>
<!-- End of Blog Section -->