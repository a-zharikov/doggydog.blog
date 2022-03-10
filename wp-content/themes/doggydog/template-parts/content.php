<article id="post-<?php the_ID(); ?>" <?php post_class('page-page_article'); ?>>

	<div class="page-page_article-head">
		<div class="page-page_article-head-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
			<?php the_post_thumbnail(); ?>  
		</div>
		<div class="page-page_article-head-text">
			<?php the_tags('<div class="page-page_article-head-text_tag"><object>','</object><object>','</object></div>'); ?>
			<div class="page-page_article-head-text_title">
			<div class="page-page_article-head-text_title_date"><?php the_time('d F Y') ?></div>
				<span><?php the_title() ?></span>
			</div>
			<div class="page-page_article-head-text_social">
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
			</div>
		</div>
	</div>

	<div class="page-page_article-content container">
		<?php
			the_content(
				sprintf(
					wp_kses(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fpv-design' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fpv-design' ),
					'after'  => '</div>',
				)
			);
		?>

	<div class="page-page_article-footer">
		<?php fpv_design_entry_footer(); ?>
	</div>
</article>