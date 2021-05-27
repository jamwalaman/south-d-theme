<header class="entry-header">

	<?php

	if ( has_post_thumbnail() && ! post_password_required() ) :
		?>

		<figure class="featured-media featured-media-full-width">

			<?php

			// featured-media-full-width {margin-top 0}

			do_action( 'chaplin_featured_media_start', $post->ID );

			the_post_thumbnail();

			$caption = get_the_post_thumbnail_caption();

			if ( $caption ) :
				?>

				<figcaption class="wp-caption-text"><?php echo wp_kses_post( $caption ); ?></figcaption>

				<?php
			endif;

			do_action( 'chaplin_featured_media_end', $post->ID );

			?>

		</figure><!-- .featured-media -->

		<?php
	endif; // has_post_thumbnail()

	if ( is_front_page() && is_home() ) {
		the_title( '<div class="entry-title faux-heading heading-size-1">', '</div>' );
	} else {
		the_title( '<h1 class="entry-title">', '</h1>' );
	}?>

	<div class="breadcrumbs-bg">

		<?php
		/*
		 * @hooked chaplin_maybe_output_breadcrumbs - 10
		 */
		do_action( 'chaplin_entry_header_start', $post->ID ); ?>

	</div>

	<?php if ( has_excerpt() ) : ?>

		<div class="intro-text section-inner thin max-percentage">
			<?php the_excerpt(); ?>
		</div>

		<?php
	endif;

	// On pages set to one of the cover templates, display a "To the content" link
	if ( is_page() && chaplin_is_cover_template() ) {
		?>

		<div class="to-the-content-wrapper">

			<a href="#post-inner" class="to-the-content">
				<div class="icon fill-children-current-color"><?php chaplin_the_theme_svg( 'arrow-down-circled' ); ?></div>
				<div class="text"><?php esc_html_e( 'Start exploring', 'chaplin' ); ?></div>
			</a><!-- .to-the-content -->

		</div><!-- .to-the-content-wrapper -->

		<?php

	// Default to displaying the post meta
	} else {
		chaplin_the_post_meta( $post->ID, 'single-top' );
	}

	do_action( 'chaplin_entry_header_end', $post->ID );

	?>

</header><!-- .entry-header -->
