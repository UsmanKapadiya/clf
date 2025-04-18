<?php get_header(); ?>
<?php get_template_part('inc_section_clf'); ?>

<div class="row">
	<div class="sixteen columns">

	<aside class="four columns sidebar alpha">
			<?php
			if ( woocommerce_enabled() and ( is_cart() or is_checkout() or is_woocommerce() or is_account_page() ) ) {
				dynamic_sidebar('shop-sidebar');
			} else {
				dynamic_sidebar('blog-sidebar');
			}
			?>
		</aside><!-- /sidebar -->

		<div class="twelve columns content alpha">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class(''); ?>>				
					<div class="post-intro">
						<?php 
							if(ci_setting('featured_single_show')=='enabled') {
								the_post_thumbnail('ci_home_listing_long', array('class' => 'scale-with-grid'));
							}
						?>
						<h2><a href="<?php the_permalink(); ?>" title="<?php echo __('Permalink to', 'ci_theme').' '.esc_attr(get_the_title()); ?>"><?php the_title(); ?></a></h2>							
					</div><!-- /intro -->
					<div class="post-body hyphenate group">
						<p class="meta"><time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time><!-- <span class="bull">&bull;</span> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>--></p>
						<?php ci_e_content(); ?>
					</div>
				</article><!-- /article -->	
											
			<?php endwhile; endif; ?>
			<?php ci_pagination(); ?>
		</div><!-- /twelve columns -->

	</div><!-- /sixteen columns -->	
</div><!-- /row -->

<?php get_footer("other"); ?>