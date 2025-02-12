<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>
<?php $sixth_section = get_field('sixth_section');?>
<?php get_header(); ?>

<!-- banner-end -->
<section class="sec-one spad" style="background: url(<?php echo $first_section['image'];?>) center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <div class="s1-cnt">
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <h2 class="main-head theme-head"><?php echo $first_section['sub_heading'];?></h2>
                    <p class="mb-0"><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-two spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s2-cnt">
                    <h2 class="main-head"><?php echo $second_section['heading'];?></h2>
                    <p class="mb-0"><?php echo $second_section['content'];?></p>
                </div>
            </div>
            <div class="col-md-6 wow bounceInRight">
                <figure><img src="<?php echo $second_section['image'];?>" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<section class="sec-abt-2 spad pt-0">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown">
            <h2 class="main-head"><?php echo $third_section['heading'];?></h2>
        </div>
        <div class="row">
            <div class="col-md-6 wow bounceInLeft">
                <figure><img src="<?php echo $third_section['image'];?>" alt=""></figure>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="s5-cnt">
                    <h2 class="main-head mb-3"><?php echo $third_section['sub_heading'];?></h2>
                    <p class="mb-3"><?php echo $third_section['content'];?></p>

                    <p><?php echo $third_section['content_2'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-three spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInRight">
                <h2 class="main-head"><?php echo $fourth_section['heading'];?></h2>
                <p class="mb-3"><?php echo $fourth_section['content'];?></p>

                <p><?php echo $fourth_section['content_2'];?></p>
            </div>
            <div class="col-md-6 wow bounceInLeft">
                <figure><img src="<?php echo $fourth_section['image'];?>" alt=""></figure>
            </div>
        </div>
    </div>
</section>

<section class="sec-abt-4 spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow bounceInLeft">
                <figure><img src="<?php echo $fifth_section['image'];?>" alt=""></figure>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="s5-cnt">
                    <h2 class="main-head mb-3"><?php echo $fifth_section['heading'];?></h2>
                    <p class="mb-3"><?php echo $fifth_section['content'];?></p>
                    <p class="mb-3"><?php echo $fifth_section['content_2'];?></p>
                    <p><?php echo $fifth_section['content_3'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-six spad pt-0">
    <div class="container">
        <div class="bg-s6-inner"
            style="background: url(<?php echo $sixth_section['image'];?>) center / cover no-repeat;">
            <div class="row ">
                <div class="col-md-6 text-center wow zoomIn">
                    <div class="s6-cnt">
                        <img src="<?php echo $sixth_section['image_2'];?>" alt="">
                        <h3><?php echo $sixth_section['heading'];?></h3>
                        <p><?php echo $sixth_section['para'];?></p>
                    </div>
                </div>
                <div class="col-md-6 wow zoomIn">
                    <figure><img src="<?php echo $sixth_section['image_3'];?>" alt=""></figure>
                </div>
                <div class="col-md-12 wow fadeInUp">
                    <p class="para"><?php echo $sixth_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>