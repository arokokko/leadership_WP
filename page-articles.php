<?php
/*
Template Name: Articles
*/
?>

<?php 
    get_header('article');
?>

            <div class="promo__wrapper_article">
                <h1 class="promo__header"><?php the_title(); ?></h1>
				
            </div>
        </div>
    </section>


	<section id="catal" class="catalog">
        <div class="container">
            <ul class="catalog__tabs margin-top_zero">
                <li class="catalog__tab catalog__tab_active"><div><?php the_field( 'first_tab', 2 ); ?></div></li>
                <li class="catalog__tab"><div><?php the_field( 'second_tab', 2 ); ?></div></li>
                <li class="catalog__tab"><div><?php the_field( 'third_tab', 2 ); ?></div></li>
            </ul>
            <div class="catalog__content catalog__content_active margin-top_zero">
                <div class="catalog__info">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'legal_advice_info',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="card catalog__card">
                                    <a href="<?php the_field( 'card_info_link' ); ?>" class="card__inner">
                                        <img src="<?php the_field( 'card_info_img' ); ?>" class="card__img">
                                        <h3 class="subtitle card__subtitle"><?php the_field( 'card_info_title' ); ?></h3>
                                        <div class="describe card__descr describe__info"><?php the_field( 'card_info_descr' ); ?></div>
                                        <div class="card__link">
                                            <div>learn more</div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); 
                    ?>

                </div>
            </div>

            <div class="catalog__content margin-top_zero">
                <div class="catalog__info">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'accounting_info',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="card catalog__card">
                                    <a href="<?php the_field( 'card_info_link' ); ?>" class="card__inner">
                                        <img src="<?php the_field( 'card_info_img' ); ?>" class="card__img">
                                        <h3 class="subtitle card__subtitle"><?php the_field( 'card_info_title' ); ?></h3>
                                        <div class="describe card__descr describe__info"><?php the_field( 'card_info_descr' ); ?></div>
                                        <div class="card__link">
                                            <div>learn more</div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); 
                    ?>

                </div>
            </div>
            <div class="catalog__content margin-top_zero">
                <div class="catalog__info">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'real_estate_info',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="card catalog__card">
                                    <a href="<?php the_field( 'card_info_link' ); ?>" class="card__inner">
                                        <img src="<?php the_field( 'card_info_img' ); ?>" class="card__img">
                                        <h3 class="subtitle card__subtitle"><?php the_field( 'card_info_title' ); ?></h3>
                                        <div class="describe card__descr describe__info"><?php the_field( 'card_info_descr' ); ?></div>
                                        <div class="card__link">
                                            <div>learn more</div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); 
                    ?>

                </div>
            </div>
                 
        </div>
    </section>

    <?php get_template_part( 'template-parts/template_consultation' ); ?>

    <section class="space"></section>

<?php
    get_footer();
?>