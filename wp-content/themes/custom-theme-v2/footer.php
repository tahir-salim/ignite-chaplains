<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <a href="<?php echo site_url();?>" class="ft-logo"><img src="<?php echo $options['logo'];?>" alt=""></a>
                    <ul class="social-icons">
                        <li><a href="<?php echo $options['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $options['youtube'];?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget">
                            <h5>Quick links</h5>
                            <!-- <ul class="menu-ft">
                                <li><a href="./">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="training.php">training programs</a></li>
                                <li><a href="contact-us.php">contact</a></li>
                            </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'menu-ft' ) ); ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h5>Contacts Info</h5>
                            <ul class="cta-links">
                                <li><i class="fas fa-phone"></i>
                                    <span>Call us
                                        <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a></span>
                                </li>
                                <li><i class="fas fa-envelope"></i>
                                    <span>Mail Us
                                        <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></span>
                                </li>
                                <li><i class="fas fa-map-marker-alt"></i>
                                    <span>Visit Us <br><?php echo $options['address'];?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget">
                            <h5>Subscribe to Our Newsletter</h5>
                            <p><?php echo $options['footer_about'];?>
                            </p>
                            <div class="newsltrWrap">
                            <?php echo do_shortcode('[email-subscribers-form id="1"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</footer>

<div class="copyright text-center">
    <div class="container">
        <p><?php echo $options['copyright'];?></p>
    </div>
</div>
<!-- <div class="overlay"></div>
<div class="popup">
    <div class="closePop">
        <i class="fas fa-times"></i>
    </div>
    <div class="container">
        <div class="pop-inner">
        </div>
    </div>
</div> -->

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>