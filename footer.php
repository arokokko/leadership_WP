<footer class="footer">
        <!-- <div class="footer__map">
            <iframe id='map' src="" width="100%" height="630" frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
        </div> -->
        <div class="footer__top">
            <div class="footer__contacts">
                <div class="footer__contacts-title">Contact information</div>
                <div class="footer__contacts-wrapper">
                    <div class="footer__contact">
                        <div class="footer__addr"><?php the_field('address', 2); ?></div>
                        <div class="footer__map" data-modal="map" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7798.40626024172!2d109.18995827436449!3d12.234521203319698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067abd48056bb%3A0xcbba08a13cd1b44b!2sLeadership%20TSC!5e0!3m2!1sru!2s!4v1617514419581!5m2!1sru!2s">show on the map</div>
                        <div class="footer__mail">
                            <span>Email: </span><a href="mailto:<?php the_field('email', 2); ?>"><?php the_field('email', 2); ?></a>
                        </div>
                        <div class="footer__phone">
                            <span>Phone: </span><a href="tel:<?php the_field('phone_link', 2); ?>"><?php the_field('phone_displayed', 2); ?></a>
                        </div> 
                        <div class="footer__social">
                            <a href="<?php the_field('facebook', 2); ?>" class="footer__social_item" target='_blank' title='Facebook'><span class="icon-facebook"></span></a>
                            <a href="<?php the_field('facebook', 2); ?>" class="footer__social_item" target='_blank' title='Facebook'><span class="icon-facebook"></span></a>
                            <a href="<?php the_field('facebook', 2); ?>" class="footer__social_item" target='_blank' title='Facebook'><span class="icon-facebook"></span></a>
                        </div>
                    </div>
                    <div class="footer__contact">
                        <address class="footer__addr"><?php the_field('address', 2); ?></address>
                        <div class="footer__map" data-modal="map" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7798.40626024172!2d109.18995827436449!3d12.234521203319698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067abd48056bb%3A0xcbba08a13cd1b44b!2sLeadership%20TSC!5e0!3m2!1sru!2s!4v1617514419581!5m2!1sru!2s">show on the map</div>
                        <div class="footer__mail">
                            <span>Email: </span><a href="mailto:<?php the_field('email', 2); ?>"><?php the_field('email', 2); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__navigation">
                <div class="footer__navigation-title">Navigation</div>
                <nav class="footer__navigation-wrapper">
                    <ul class="nav__list">
                        <ol class="nav__item">
                            <a href="https://leadershipnt.com/">Home</a>
                        </ol>
                        <ol class="nav__item">
                            <a href="https://leadershipnt.com/articles/">Articles</a>
                            <ul class="nav__sublist">
                                <ol class="nav__subitem">
                                    <a href="https://leadershipnt.com/legal-advice-info-in-vietnam/">Legal advice</a>
                                </ol>
                                <ol class="nav__subitem">
                                    <a href="https://leadershipnt.com/accounting-info-in-vietnam/">Accounting</a>
                                </ol>
                                <ol class="nav__subitem">
                                    <a href="https://leadershipnt.com/real-estate-info-in-vietnam/">Real estate</a>
                                </ol>
                            </ul>
                        </ol>
                        <ol class="nav__item">
                            <a href="https://leadershipnt.com/about-company/">About us</a>
                        </ol>
                        <ol class="nav__item">
                            <a href="https://leadershipnt.com/our-contacts/">Contacts</a>
                        </ol>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__copyright">2020 © LEADERSHIP TSC. All rights reserved</div>
            <div class="footer__privacy"><a href="https://leadershipnt.com/privacy-policy/">Privacy Policy</a></div>   
        </div>
    </footer>

    <div class="overlay">
        <div class="modal_maxi" id="map">
            <div class="modal__close">&times;</div>
            <iframe id='google_map' src="" width="100%" frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
        <div class="modal" id="question">
            <div class="modal__close">&times;</div>
            <h2 class="modal__subtitle">Fill the form</h2>
            <div class="modal__descr">and we will reply you nearest time</div>
            <form method="POST" action="#" class="form__feed modal_form">
                <input name="name" required placeholder="Your name" type="text">
                <input name="phone" required placeholder="Your phone number" type="number">
                <input type="email" name="email" required placeholder="Your E-mail">
                <textarea name="text" placeholder="Your question"></textarea>
                <button class="button consultation_btn modal_btn">Ask</button>
            </form>
        </div>

        <div class="modal" id="consultation">
            <div class="modal__close">&times;</div>
            <h2 class="modal__subtitle">Fill the form</h2>
            <div class="modal__descr">and we will reply you nearest time</div>
            <form method="POST" action="#" class="form__feed modal_form">
                <input name="name" required placeholder="Your name" type="text">
                <input name="phone" required placeholder="Your phone number" type="number">
                <input type="email" name="email" required placeholder="Your E-mail">
                <textarea name="text" placeholder="Theme of consultation"></textarea>
                <button class="button consultation_btn modal_btn">Book consultation</button>
            </form>
        </div>

        <div class="modal" id="order">
            <div class="modal__close">&times;</div>
            <h2 class="modal__subtitle">Your order:</h2>
            <div class="modal__descr">Пульсометер FT-1</div>
            <form method="POST" action="#" class="form__feed modal_form">
                <input name="order" type="hidden" id="hidden_field" value="">
                <input name="name" required placeholder="Your name" type="text">
                <input name="phone" required placeholder="Your phone number" type="number">
                <input type="email" required name="email" placeholder="Your E-mail">
                <textarea name="text" placeholder="Additional questions"></textarea>
                <button class="button consultation_btn modal_btn">Book</button>
            </form>
        </div>

        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <h2 class="modal__subtitle">Thank you for your request!</h2>
            <div class="modal__descr">We will connect to you nearest time!</div>
        </div>
    </div>
    <a href="#up" class="pageup">
        <img src="<?php echo bloginfo('template_url');?>/assets/icons/circle-up.svg" alt="arrow_up" title="Up">
    </a>
    
    <?php 
        wp_footer();
    ?>
    
    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(75462550, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/75462550" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>