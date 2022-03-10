<?php get_header(); ?>

	<div class="page-main container">
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'main' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

	<?php
			add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
			function my_navigation_template( $template, $class ){
			
				return '
				<nav class="navigation %1$s" role="navigation">
					<div class="nav-links">%3$s</div>
				</nav>    
				';
			}
			
			the_posts_pagination( array(
				'mid_size' => 3,
				'prev_next'    => true,
				'prev_text'    => __('«'),
				'next_text'    => __('»'),
			) ); 
		?>

<?php
// get_sidebar();
get_footer();
