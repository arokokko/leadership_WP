<?php

	get_header();

?>

            <div class="promo__wrapper">
                <h1 class="promo__header"><?php bloginfo('description'); ?></h1>
                <h2 class="promo__subheader"><?php the_field('promo_subheader', 2); ?></h2>
                <div class="promo__icons">
                    <a class="promo__item" href='http://localhost/leadership/legal-advice-info/'>
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/consulting.svg" alt="timer"><br />
                        Legal advice
                    </a>
                    <a class="promo__item" href='http://localhost/leadership/real-estate-info/'>
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/real_estate.svg" alt="hand-cart"><br />
                        Real estate
                    </a>
                    <a class="promo__item" href='http://localhost/leadership/accounting-info/'>
                        <img class="promo__icon" src="<?php echo bloginfo('template_url');?>/assets/icons/accounting1.svg" alt="messages"><br />
                        Accounting
                    </a>
                </div>
                <button data-modal="consultation" class="button promo_btn">Book consultation</button>
                <div class="promo__link">
                    or
                    <a href="#catal"><span>go to services</span></a>
                </div>
            </div>

        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h2 class="title advantages__subheader"><?php the_field( 'title', 2 ); ?></h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                <iframe width="320" height="180" src="https://www.youtube.com/embed/HJVvVm-xR3o" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/HJVvVm-xR3o?autoplay=1><img src=https://img.youtube.com/vi/HJVvVm-xR3o/mqdefault.jpg><span>▶</span></a>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="advantages__item">
                <iframe width="320" height="180" src="https://www.youtube.com/embed/SQuQtYCgki0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/SQuQtYCgki0?autoplay=1><img src=https://img.youtube.com/vi/SQuQtYCgki0/mqdefault.jpg><span>▶</span></a>"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3 class="subtitle advantages__title">Find <a href="https://www.youtube.com/channel/UCdOMrlvsxmdaPfy9DDplSzg" target="_blank" title="Vietnam Story - youtube.com">more videos</a> about doing business in Vietnam</h3>
                    
                </div>
                <div class="advantages__item">
                <iframe width="320" height="180" src="https://www.youtube.com/embed/Zya9EyL16sE" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/Zya9EyL16sE?autoplay=1><img src=https://img.youtube.com/vi/Zya9EyL16sE/mqdefault.jpg><span>▶</span></a>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/template_consultation' ); ?>

    <section id="catal" class="catalog">
        <div class="container">
            <h2 class="title"><?php the_field( 'title_tabs', 2 ); ?></h2>
            <ul class="catalog__tabs">
                <li class="catalog__tab catalog__tab_active"><div><?php the_field( 'first_tab', 2 ); ?></div></li>
                <li class="catalog__tab"><div><?php the_field( 'second_tab', 2 ); ?></div></li>
                <li class="catalog__tab"><div><?php the_field( 'third_tab', 2 ); ?></div></li>
            </ul>
            <div class="catalog__content catalog__content_active">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'legal_advice_catalog',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="card catalog__card">
                                <div class="card__wrapper">
                                    <div class="card__content card__content_active">
                                        <img src="<?php the_field( 'service_image' ); ?>" alt="limited liability company" class="card__img">
                                        <h3 class="subtitle card__subtitle"><?php the_field( 'service_title' ); ?></h3>
                                        <div class="describe card__descr"><?php the_field( 'service_subtitle' ); ?></div>
                                        <div class="card__link">
                                            <a href="#" class="card__more">Learn more</a>
                                        </div>
                                    </div>
                                    <div class="card__info">
                                        <ul class="card__back">
                                            <li><?php the_field( 'list_element_1' ); ?></li>
                                            <li><?php the_field( 'list_element_2' ); ?></li>
                                            <li><?php the_field( 'list_element_3' ); ?></li>
                                            <li><?php the_field( 'list_element_4' ); ?></li>
                                            <li><?php the_field( 'list_element_5' ); ?></li>
                                            <li><?php the_field( 'list_element_6' ); ?></li>
                                            <li><?php the_field( 'list_element_7' ); ?></li>
                                        </ul>
                                        <div class="card__link">
                                            <a href="#" class="card__goback">back</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card__footer">
                                    <div class="card__prices">
                                        <div class="card__price"><?php the_field( 'service_price' ); ?></div>
                                    </div>
                                    <button class="button card_btn">book</button>
                                </div>
                                
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>

            <div class="catalog__content">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'accounting_catalog',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="card catalog__card">
                            <div class="card__wrapper">
                                <div class="card__content card__content_active">
                                    <img src="<?php the_field( 'service_image' ); ?>" alt="Business in Vietnam" class="card__img">
                                    <h3 class="subtitle card__subtitle"><?php the_field( 'service_title' ); ?></h3>
                                    <div class="describe card__descr"><?php the_field( 'service_subtitle' ); ?></div>
                                    <div class="card__link">
                                        <a href="#" class="card__more">Learn more</a>
                                    </div>
                                </div>
                                <div class="card__info">
                                    <ul class="card__back">
                                        <li><?php the_field( 'list_element_1' ); ?></li>
                                        <li><?php the_field( 'list_element_2' ); ?></li>
                                        <li><?php the_field( 'list_element_3' ); ?></li>
                                        <li><?php the_field( 'list_element_4' ); ?></li>
                                        <li><?php the_field( 'list_element_5' ); ?></li>
                                        <li><?php the_field( 'list_element_6' ); ?></li>
                                        <li><?php the_field( 'list_element_7' ); ?></li>
                                    </ul>
                                    <div class="card__link">
                                        <a href="#" class="card__goback">back</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card__footer">
                                <div class="card__prices">
                                    <div class="card__price"><?php the_field( 'service_price' ); ?></div>
                                </div>
                                <button class="button card_btn">book</button>
                            </div>
                            
                        </div>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>

            </div>
            <div class="catalog__content">
                <div class="catalog__text">This section in progress. You can find current offers for the sale of real estate on our web-site <a href="https://duan.asia/en/tag/apartments-under-construction" target="_blank" title="Real estate for sale">duan.asia</a> </div>
            </div>
                 
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <h2 class="title feedback__title"><a href="<?php the_field( 'feedback_link', 2 ); ?>" target="_blank" title="See reviews"><?php the_field( 'title_feedback' ); ?></a></h2>
            <div class="feedback__wrapper">
                <div class="feedback__inner fadeInUp wow" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="<?php the_field( 'first_review_img', 2 ); ?>" alt="photo" class="feedback__img">
                    <div class="feedback__text">
                        <div class="feedback__name"><?php the_field( 'first_name', 2 ); ?></div>
                        <div class="feedback__position"><?php the_field( 'first_position', 2 ); ?></div>
                        <div class="feedback__descr">    
                            <?php the_field( 'first_review', 2 ); ?> 
                        </div>
                    </div>
                </div>
                <hr>
                <div class="feedback__inner fadeInUp wow" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="<?php the_field( 'second_review_img', 2 ); ?>" alt="photo" class="feedback__img">
                    <div class="feedback__text">
                        <div class="feedback__name"><?php the_field( 'second_name', 2 ); ?></div>
                        <div class="feedback__position"><?php the_field( 'second_position', 2 ); ?></div>
                        <div class="feedback__descr">    
                            <?php the_field( 'second_review', 2 ); ?> 
                        </div>
                    </div>
                </div>
                <hr>
                <div class="feedback__inner fadeInUp wow" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="<?php the_field( 'third_review_img', 2 ); ?>" alt="photo" class="feedback__img">
                    <div class="feedback__text">
                        <div class="feedback__name"><?php the_field( 'third_name', 2 ); ?>
                        <div class="feedback__position"><?php the_field( 'third_position', 2 ); ?></div>
                        <div class="feedback__descr">    
                            <?php the_field( 'third_review', 2 ); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer();
?>
   