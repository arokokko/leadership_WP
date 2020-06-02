<?php
/*
Template Name: Article
*/
?>

<?php 
    get_header();
?>

            <div class="promo__wrapper">
                <h1 class="promo__header"><?php the_field( 'page_info_title' ); ?></h1>
                <h2 class="promo__subheader"><?php the_field('promo_subheader', 2); ?></h2>
                <div class="promo__icons">
                    <div class="promo__item">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/consulting.svg" alt="timer">
                        <div class="promo__descr">Legal advice</div>
                    </div>
                    <div class="promo__item">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/real_estate.svg" alt="hand-cart">
                        <div class="promo__descr">Real estate</div>
                    </div>
                    <div class="promo__item">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/accounting1.svg" alt="messages">
                        <div class="promo__descr">Accounting</div>
                    </div>
                </div>
                <button data-modal="consultation" class="button promo_btn">Book consultation</button>
                <div class="promo__link">
                    or
                    <a href="#catal"><span>go to article</span></a>
                </div>
            </div>

        </div>
    </section>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
				the_post();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <?php get_template_part( 'template-parts/template_consultation' ); ?>

    <section class="space"></section>

<?php
    get_footer();
?>