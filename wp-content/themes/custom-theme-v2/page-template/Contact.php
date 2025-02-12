<?php /** * Template Name: Contact Template */ ?>
<?php global $options; ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="contact-us spad">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="cont_cnt">
                    <div class="cta-bx">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <b>Location</b>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                    <div class="cta-bx">
                        <div><i class="fas fa-envelope"></i></div>
                        <div>
                            <b>Email Us</b>
                            <p><a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></p>
                        </div>
                    </div>
                    <div class="cta-bx">
                        <div><i class="fas fa-phone-volume"></i></div>
                        <div>
                            <b>Call Us</b>
                            <p><a
                                    href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact_form">
                <?php echo do_shortcode('[contact-form-7 id="77605ef" title="Contact form 1"]');?>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="map-cnt">
    <h2 class="main-head text-center mb-3">We Provide Best Services. Need Help?</h2>
    <iframe src="<?php echo $first_section['link'];?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php get_footer(); ?>