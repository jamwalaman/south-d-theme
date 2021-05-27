<?php

/*
Template Name: Full Width Image
Template Post Type: post, page
*/

get_header(); ?>

<main id="site-content">

	<?php

	if ( have_posts() ) :
		while ( have_posts() ) :

			the_post(); ?>

			<article <?php post_class( 'section-inner' ); ?> id="post-<?php the_ID(); ?>">

				<?php

				do_action( 'chaplin_entry_article_start', $post->ID );

				$_post_type = get_post_type();

				if ( get_field('show_map') ) {
					get_template_part( 'parts/page-header-contact' );
				} else {
					get_template_part( 'parts/page-header-full-width-img' );
				} ?>

				<div class="post-inner" id="post-inner">

					<div class="entry-content">

						<?php
						the_content();
						wp_link_pages( array(
							'before'           => '<nav class="post-nav-links bg-light-background"><span class="label">' . __( 'Pages:', 'chaplin' ) . '</span>',
							'after'            => '</nav>',
						) );
						if ( $_post_type !== 'post' ) {
							edit_post_link();
						}
						?>

					</div><!-- .entry-content -->

					<?php

					/*
					 * @hooked chaplin_maybe_output_single_post_meta_bottom - 10
					 * @hooked chaplin_maybe_output_author_bio - 20
					 * @hooked chaplin_maybe_output_single_post_navigation - 30
					 */
					do_action( 'chaplin_entry_footer', $post->ID );

					// Output comments wrapper if comments are open or if there are comments, and check for password
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) :
						?>

						<div class="comments-wrapper">
							<?php comments_template(); ?>
						</div><!-- .comments-wrapper -->

						<?php
					endif;
					?>

				</div><!-- .post-inner -->

				<?php do_action( 'chaplin_entry_article_end', $post->ID ); ?>

			</article><!-- .post -->


			<?php
			// Display related posts
			get_template_part( 'parts/related-posts' );

		endwhile;
	endif;

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
