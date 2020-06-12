<footer class="footer">
        <div class="footer__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.0890137565843!2d24.13462201519957!3d56.964407705363364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb5269ce9db%3A0x9285344dd284540b!2zQ8STc3UgaWVsYSA1YiwgVmlkemVtZXMgcHJpZWvFoXBpbHPEk3RhLCBSxKtnYSwgTFYtMTAxMiwg0JvQsNGC0LLQuNGP!5e0!3m2!1sru!2s!4v1590760020557!5m2!1sru!2s" width="100%" height="630" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
        <div class="footer__contacts">
            <address class="footer__addr"><?php the_field('address', 2); ?></address>
            <div class="footer__mail"><a href="mailto:<?php the_field('email', 2); ?>"><?php the_field('email', 2); ?></a></div>
            <div class="footer__phone"><a href="tel:<?php the_field('phone_link', 2); ?>"><?php the_field('phone_displayed', 2); ?></a></div> 
            <div class="footer__social">
                <a href="<?php the_field('facebook', 2); ?>" class="footer__social_item" target='_blank'><span class="icon-facebook"></span></a>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="modal" id="question">
            <div class="modal__close">&times;</div>
            <h2 class="modal__subtitle">Fill the form</h2>
            <div class="modal__descr">and we will reply you nearest time</div>
            <form method="POST" action="#" class="form__feed modal_form">
                <input name="name" required placeholder="Your name" type="text">
                <input name="phone" required placeholder="Your phone number" type="text">
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
                <input name="phone" required placeholder="Your phone number" type="text">
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
                <input name="name" required placeholder="Your name" type="text">
                <input name="phone" required placeholder="Your phone number" type="text">
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
    

</body>
</html>