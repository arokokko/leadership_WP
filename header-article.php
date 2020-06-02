<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon.ico">
    <?php 
        wp_head();
    ?>
</head>
<body>
    <section id="up" class="promo_article" style="background-image:url('<?php echo bloginfo('template_url');?>/assets/images/vietnam.png')">
        <div class="container">
            <header class="header">
                <div class="header__logotype">
                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="promo__icons promo__icons_article">
                    <a class="promo__item promo__item_article" href='http://localhost/leadership/legal-advice-info/' target="_blank">
                        Legal advice
                    </a>
                    <a class="promo__item promo__item_article" href='http://localhost/leadership/real-estate-info/' target="_blank">
                        Real estate
                    </a>
                    <a class="promo__item promo__item_article" href='http://localhost/leadership/accounting-info/' target="_blank">
                        Accounting
                    </a>
                </div>
                <div class="header__contact">
                    <button data-modal="question" class="button header_btn">Ask your question</button>
                </div>
            </header>