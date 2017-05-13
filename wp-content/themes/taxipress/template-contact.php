<?php 
/**
 * Template Name: Contact Page
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <!-- Content -->
    <div class="inner">

        <!-- Back -->
        <div class="back-left"></div>
        <div class="back-right"></div>

        <!-- Content -->
        <div class="wrap cf">
            <div class="col-6 left">
                <h2><?php echo ale_get_meta('title_one');?><span><?php echo ale_get_meta('title_two');?></span></h2>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>

                <div class="line"></div>

                <span><?php echo ale_get_meta('title_address');?>:</span>
                <p><?php echo ale_get_meta('address');?></p>
                <br/>
                <span><?php echo ale_get_meta('title_phone');?>:</span>
                <p class="phone"><?php echo ale_get_meta('phone');?></p>
                <br/>
                <div class="line"></div>

                <div class="social">
                    <?php if(ale_get_option('twi')) {?><a href="<?php echo ale_get_option('twi');?>"    target="_blank" class="twitter"></a>    <?php } ?>
                    <?php if(ale_get_option('fb'))  {?><a href="<?php echo ale_get_option('fb');?>"     target="_blank" class="facebook"></a>   <?php } ?>
                    <?php if(ale_get_option('you')) {?><a href="<?php echo ale_get_option('you');?>"    target="_blank" class="youtube"></a>    <?php } ?>
                </div>

            </div>
            <div class="col-6 right">
                <h3><?php echo ale_get_meta('title_form');?></h3>

                <div class="form">
                    <form method="post" id="contact-form" action="<?php the_permalink();?>" onsubmit="">

                        <label for="name"><?php _e('Name','aletheme');?>:</label>
                        <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />

                        <label for="email"><?php _e('Email','aletheme');?>:</label>
                        <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />

                        <label for="message"><?php _e('Message','aletheme');?>:</label>
                        <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>

                        <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>"/>

                        <?php wp_nonce_field() ?>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Map -->
<?php if(ale_get_meta('address')){?>
    <section class="map">
        <!--<img src="css/images/map.jpg" alt=""/>-->
        <!--iframe class="grayscale" src="https://maps.google.com/maps?q=google+maps+london&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%B1%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%8F&amp;gl=md&amp;ll=51.511214,-0.119824&amp;spn=0.191731,0.528374&amp;t=m&amp;z=12&amp;output=embed">
        </iframe-->
        <?php echo do_shortcode('[ale_map address="'.ale_get_meta('address').'" width="100%" height="400px"]') ;?>
    </section>
<?php } ?>









<?php get_footer(); ?>