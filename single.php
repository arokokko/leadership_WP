<?php
/**
 * The template for displaying all single posts
 */

	get_header('article');

?>

		<div class="promo__wrapper_article">
                <h1 class="promo__header"><?php the_field( 'page_article_title' ); ?></h1>
				<h2 class="promo__subheader"><p class="has-medium-font-size">Modified <?php the_modified_date(' d.m.Y '); ?></p></h2>
            </div>
        </div>
    </section>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_template_part( 'template-parts/template_consultation' ); ?>
<section class="space"></section>
<?php
get_footer();
