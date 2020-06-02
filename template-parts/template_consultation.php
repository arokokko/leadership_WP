<section class="consultation">
    <div class="container">
        <h2 class="consultation__subheader">
            <?php the_field( 'title_consultation', 2 ); ?> 
        </h2>
        <div class="consultation__descr">
            <?php the_field( 'subtitle_consultation', 2 ); ?>
        </div>
        <form  id="consultation-form" method="POST" action="#" class="form__feed consultation_form">
            <input name="name" required placeholder="Your name" type="text">
            <input name="phone" required placeholder="Your phone number" type="number">
            <input type="email" required name="email" placeholder="Your E-mail">
            <textarea name="text" placeholder="Theme of consultation"></textarea>
            <button class="button consultation_btn">Book consultation</button>
        </form>
    </div>
</section>