<header class="entry-header">

  <div class="featured-media">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d694.192368005273!2d170.50025812924164!3d-45.89592349869428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa82eaea5cd5aefd1%3A0x285f496e71cd7511!2s278A%20King%20Edward%20Street%2C%20South%20Dunedin%2C%20Dunedin%209012!5e0!3m2!1sen!2snz!4v1614552205007!5m2!1sen!2snz"
    allowfullscreen=""
    loading="lazy"
    style="height: 240px;">
    </iframe>
  </div>

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
