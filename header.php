<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="W2goSGi_hU8BYIBiSA50ebBKsfgy5JQPAzuLZ0uW33g" />
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/icons/favicon.ico">
    <?php 
        wp_head();
    ?>
</head>
<body>
    <section id="up" class="promo" style="background-image:url('<?php echo bloginfo('template_url');?>/assets/images/nhatrang.jpg')">
        <div class="container">
            <header class="header">
                <div class="header__logotype">
                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <nav class="promo__icons promo__icons_article">
                    <a class="promo__item promo__item_article" href='https://leadershipnt.com/articles/'>
                        Articles
                    </a>
                    <a class="promo__item promo__item_article" href='https://leadershipnt.com/about-company/'>
                        About us
                    </a>
                    <a class="promo__item promo__item_article" href='https://leadershipnt.com/our-contacts/'>
                        Contacts
                    </a>
                </nav>
                <div class="header__contact">
                    <button data-modal="question" class="button header_btn">Ask your question</button>
                </div>
            </header>