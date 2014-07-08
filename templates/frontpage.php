<div class="jumbotron">
  <div class="container">
          <h2 class="mbot0" style="letter-spacing:-2px;">
Welcome to Redhot Forex -
<strong class="inverted"># 1 Forex Blog</strong>
- For Free
</h2>
        <h1 class="headerfp">FX Price Action Strategy</h1>

        <p>Take your trading to the next level. Forex trading system using 4 hour, daily and weekly charts. The system is a low-maintenance, simple price action strategy, using exponential moving averages and pivot points for support and resistance.</p>

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
                            <p class="tall">All Metatrader 4 platforms supported</p>
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
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="shorter">Proven system</h4>
                            <p class="tall">Combine with strict money management for success</p>
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
            <h3 class="h3index">About me...</h3>
            <div class="contentabout">
                <p>My system is simple price action based trading using support and resistance. Does it work 100%. Sure not, but followed by
                strict moneymanagement, can be very profitable. Follow and see for yourself.  </p>
            </div>
            <a class="btn btn-lg btn-primary" href="http://www.twitter.com/leviceroy" target="_blank"> <i class="fa fa-twitter"></i> Follow me on twitter!</a>
        </div>
    </div>
</div>
</div> <!-- end Benefits-->


<!--
<div class="aboutsection">
 <div class="container">
  <div class="row text-center">


    <!--Section 1--
    <div class="col-sm-4 about">
      <i class="fa fa-laptop fa-4x light-gray"></i>
      <h3>Technical Analysis</h3>
      <p>Enjoy Wordpress with all of the benefits of Bootstrap.  Quickly build themes while utilizing one of the most powerful frameworks available on the web.</p>
    </div>

    <!--Section 2--
    <div class="col-sm-4 about">
      <i class="fa fa-jpy fa-4x light-gray"></i>
      <h3>Free for now!</h3>
      <p>BREW pulls together some of the best open source projects in to one awesome starter theme.  Feel free to fork, edit and contribute.</p>
    </div>

    <!--Section 3--
    <div class="col-sm-4 about">
      <i class="fa fa-money fa-4x light-gray"></i>
      <h3>Money Management</h3>
      <p>Font Awesome 4 support is already baked in.  Quickly and easily place icons in menus, buttons, headers, lists and more.</p>
    </div>

  </div>
 </div>
</div>
-->

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

<!--
        <?php if ( function_exists( 'ot_get_option' ) ) {
            $blog_title = ot_get_option( 'blog_title' );
        } ?>
        <h1><?=$blog_title?></h1> -->

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

<!--        <?php if ( function_exists( 'ot_get_option' ) ) {
            $text_read_blog = ot_get_option( 'text_read_blog' );
            $select_blog_page = ot_get_option( 'select_blog_page' );
            if ($select_blog_page) {
                $blog_url = get_permalink($select_blog_page);
                echo "<p><a class=\"btn btn-red btn-big btn-round\" href=\"" . $blog_url . "\" target=\"_blank\">" . $text_read_blog . "</a></p>";
            }
        } ?>
-->
<p><a class="btn btn-lg btn-outline" href="<?php get_bloginfo('name'); ?>blog" title="Follow my Blog"> <i class="fa fa-comment"></i> Follow my Blog</a></p>


    </div>
  </div>
</section>
<!-- End of Blog Section -->


<!-- Start of FAQ
<div class="bs-example">
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. What is HTML?</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What is Twitter Bootstrap?</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What is CSS?</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
      </div>
    </div>
  </div>
</div>
</div>
-->
<!--
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/cabin.png" class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/cake.png" class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/circus.png" class="img-responsive" alt="" />
                    </a>
                </div>

            </div>
        </div>
    </section>
-->

<!-- Start About Section
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About section</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>
-->

    <!-- Portfolio Modals
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->


