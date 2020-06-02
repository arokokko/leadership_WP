<?php
/*
Template Name: Info Accounting
*/
?>

<?php 
    get_header( 'accounting' );
?>

            <div class="promo__wrapper">
                <h1 class="promo__header"><?php the_field( 'page_info_title' ); ?></h1>
                <h2 class="promo__subheader"><?php the_field('promo_subheader', 2); ?></h2>
                <div class="promo__icons">
                    <a class="promo__item" href='http://localhost/leadership/legal-advice-info/' target="_blank">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/consulting.svg" alt="timer"><br />
                        Legal advice
                    </a>
                    <a class="promo__item" href='http://localhost/leadership/real-estate-info/' target="_blank">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/real_estate.svg" alt="hand-cart"><br />
                        Real estate
                    </a>
                    <div class="promo__item" id="red" href='http://localhost/leadership/accounting-info/' target="_blank">
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/accounting1.svg" alt="messages"><br />
                        Accounting
                    </div>
                </div>
                <button data-modal="consultation" class="button promo_btn">Book consultation</button>
                <div class="promo__link">
                    or
                    <a href="#catal"><span>go to articles</span></a>
                </div>
            </div>

        </div>
    </section>

    <section  class="catalog">
        <div class="container">
            <h2 class="title" id="catal"><?php the_field( 'page_info_subtitle' ); ?></h2>
            <div class="catalog__info">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'accounting_info',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="card catalog__card">
                                <div class="card__inner">
                                    <img src="<?php the_field( 'card_info_img' ); ?>" class="card__img">
                                    <h3 class="subtitle card__subtitle"><?php the_field( 'card_info_title' ); ?></h3>
                                    <div class="describe card__descr describe__info"><?php the_field( 'card_info_descr' ); ?></div>
                                    <div class="card__link">
                                        <a href="<?php the_field( 'card_info_link' ); ?>" target="_blank">learn more</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/template_consultation' ); ?>

    <section class="space"></section>

<?php
    get_footer();
?>