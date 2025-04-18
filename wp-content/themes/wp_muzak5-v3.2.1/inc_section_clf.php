<?php if ( is_page() ) : ?>


	<?php if( get_the_title($post->post_parent)==""):?>
	<img class="clf_page_title" src="<?php echo get_bloginfo('template_directory')?>/images/<?php $path=strtolower(single_post_title()); echo $path; ?>/title.png" />
    <?php else: ?>
    <?php 
    	$family = get_post_ancestors( $post->ID);
    	$id = ($family) ? $family[count($family)-1]: $post->ID;
    	$top = get_page($id);
    	//echo $top->post_name;
    ?>
    <img class="clf_page_title" src="<?php echo get_bloginfo('template_directory')?>/images/<?php $ppath=strtolower($top->post_name); echo $ppath; ?>/title.png" />
    <?php endif ?>


	

 

  

	<?php elseif ( is_single() and ( get_post_type() == 'post' ) or get_post_type() == 'post' ): ?>
	<img class="clf_page_title" src="<?php echo get_bloginfo('template_directory')?>/images/news/title.png" />
<?php elseif ( is_single() and ( get_post_type() == 'cpt_discography' ) or is_post_type_archive('cpt_discography') ): ?>
	<h3 class="section-title"><?php ci_e_setting('title_discography'); ?></h3>
<?php elseif ( is_single() and ( get_post_type() == 'cpt_artists' ) or is_post_type_archive('cpt_artists') ): ?>
	<h3 class="section-title"><?php ci_e_setting('title_artists'); ?></h3>
<?php elseif ( is_post_type_archive('cpt_galleries') ): ?>
	<h3 class="section-title"><?php ci_e_setting('title_galleries'); ?></h3>
<?php elseif ( is_post_type_archive('cpt_videos') ): ?>
	<h3 class="section-title"><?php ci_e_setting('title_videos'); ?></h3>



<?php elseif ( is_single() and ( get_post_type() == 'cpt_galleries') ): ?>
 <?php 
    	$family = get_post_ancestors( $post->ID);
    	$id = ($family) ? $family[count($family)-1]: $post->ID;
    	$top = get_page($id);
    	//echo $top->post_name;
    ?>
    <img class="clf_page_title" src="<?php echo get_bloginfo('template_directory')?>/images/<?php $ppath=strtolower("gallery"); echo $ppath; ?>/title.png" />



<?php elseif ( is_single() and ( get_post_type() == 'cpt_events') ): ?>
	<h3 class="section-title"><?php _e('Events','ci_theme'); ?></h3>
<?php elseif ( is_category()): ?>
	<h3 class="section-title"><?php single_term_title(); ?></h3>	
<?php elseif ( is_month()): ?>
	<h3 class="section-title"><?php single_month_title(); ?></h3>	
<?php elseif ( is_search() ): ?>
	<h3 class="section-title"><?php _e('Search Results', 'ci_theme'); ?></h3>		
<?php elseif ( is_404() ): ?>
	<h3 class="section-title"><?php _e('Oops! 404', 'ci_theme'); ?></h3>	
<?php elseif ( is_tax('artist-category') ): ?>
	<h3 class="section-title">
		<?php
			$taxonomy = 'artist-category';
			$queried_term = get_query_var($taxonomy);
			$terms = get_terms($taxonomy, 'slug='.$queried_term);
			if ($terms) {
				foreach($terms as $term) {
					echo $term->name;
				}
			}
		?>
	</h3>
<?php elseif ( is_tax('section') ): ?>
	<h3 class="section-title">
		<?php
			$taxonomy = 'section';
			$queried_term = get_query_var($taxonomy);
			$terms = get_terms($taxonomy, 'slug='.$queried_term);
			if ($terms) {
				foreach($terms as $term) {
					echo $term->name;
				}
			}
		?>
	</h3>
<?php elseif ( is_tax('video-category') ): ?>
	<h3 class="section-title">
		<?php
			$taxonomy = 'video-category';
			$queried_term = get_query_var($taxonomy);
			$terms = get_terms($taxonomy, 'slug='.$queried_term);
			if ($terms) {
				foreach($terms as $term) {
					echo $term->name;
				}
			}
		?>
	</h3>	
<?php elseif ( is_tax('gallery-category') ): ?>
	

	    <img class="clf_page_title" src="<?php echo get_bloginfo('template_directory')?>/images/<?php $ppath=strtolower("gallery"); echo $ppath; ?>/title.png" />
				
<?php endif; ?>