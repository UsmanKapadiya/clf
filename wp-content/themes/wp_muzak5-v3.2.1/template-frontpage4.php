<?php
/*
Template Name: Homepage (Sidebar #1 / Content)
*/
?>

<?php get_header(); ?>
<?php get_template_part('inc_slider'); ?>


    <!-- ########################### MAIN ########################### -->
    <div class="row">
        <div class="sixteen columns">
            <!-- page content-->
            <div id="home_page_content">
                <article class="post static">
                    <div class="post-body hyphenate group">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php
                            if(ci_setting('featured_single_show')=='enabled') {
                                the_post_thumbnail('ci_fullwidth', array('class' => 'scale-with-grid img-fullwidth'));
                            }
                            ?>
                            <?php ci_e_content(); ?>
                            <?php wp_link_pages(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid home_post_back">
    <div class="container">
        <div class="row">
            <div class="sixteen columns">
                <div id="home_post_content">

                    <?php if (ci_setting('homepage-page-id') == ""): ?>

                        <div>
                            <h1 class="widget-title pull-left">
                                <?php _e('Latest News','ci_theme'); ?>
                            </h1>
                            <div class="navigation_controls pull-right">
                                <a href="#" class="previous slide">&#8249;</a>
                                <a href="#" class="next slide">&#8250;</a>
                            </div>    
                            <div class="clearfix"></div>
                        </div>
                        <hr class="title-underline">
                        <?php
                        global $post;
                        $paged = get_query_var('page') ? get_query_var('page') : 1;
                        $args = array(
                            'post_type'=>'post',
                            'paged' => $paged,
                            'posts_per_page' => -1,//ci_setting('news-no'),
                            'cat' => ci_setting('news-cat')
                        );
                        ?>
                        <div class="flexslider carousel" id="post-loop-container">
                          <ul class="slides">
                              <?php
                            query_posts($args);
                        
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                              <li>
                                 <div class="eight columns omega content">
                                    <article class="post group post-container">
                                        <div class="post-intro post-intro-homepage">
                                            <?php
                                            if(ci_setting('featured_single_show')=='enabled') {
                                                $attr = array('class'=> "scale-with-grid");
                                                the_post_thumbnail('ci_home_listing_long', $attr);
                                            }
                                            ?>
                                            <h2><a href="<?php the_permalink(); ?>" title="<?php echo __('Permalink to', 'ci_theme').' '.esc_attr(get_the_title()); ?>"><?php the_title(); ?></a></h2>
                                            <p class="meta"><time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time> <!-- <span class="bull">&bull;</span><a href="<?php /*comments_link(); */?>"><?php /*comments_number(); */?></a>--></p>
                                        </div><!-- /intro -->
                                        <div class="post-body post-body-homepage">
                                            <?php ci_e_content(); ?>
                                        </div>
                                    </article><!-- /post -->
                                </div>
                              </li>
                    <?php 
                        endwhile; endif; 
                    ?>
                            
                            <!-- items mirrored twice, total of 12 -->
                          </ul>
                        </div>
                        <?php  wp_reset_query(); ?>
                    <?php else: ?>

                        <?php
                        $the_page = new WP_Query( 'page_id=' . ci_setting('homepage-page-id') );
                        if ( $the_page->have_posts() ) : while ( $the_page->have_posts() ) : $the_page->the_post(); ?>
                            <div class="eight columns omega content">
                                <h3 class="widget-title"><?php the_title(); ?></h3>
                                <article class="post group">
                                    <div class="post-intro">
                                        <?php
                                        if(ci_setting('featured_single_show')=='enabled') {
                                            $attr = array('class'=> "scale-with-grid");
                                            the_post_thumbnail('ci_home_listing_long', $attr);
                                        }
                                        ?>
                                    </div><!-- /intro -->
                                    <div class="post-body post-page-id">
                                        <?php the_content(); ?>
                                    </div>
                                </article><!-- /post -->
                            </div>
                        <?php endwhile; endif; wp_reset_query(); ?>

                    <?php endif; ?>





                </div><!-- end of home_post_content-->

            </div><!-- /sixteen columns -->
        </div><!-- /row -->
    </div>

<?php get_footer(); ?>