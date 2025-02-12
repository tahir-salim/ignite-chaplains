<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>
<?php $sixth_section = get_field('sixth_section');?>
<?php $seventh_section = get_field('seventh_section');?>
<?php $eight_section = get_field('eight_section');?>
<?php $ninth_section = get_field('ninth_section');?>


<?php get_header(); ?>
<section class="mainBanner" style="background-image:url(<?php echo $banner_section['image'];?>); ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow bounceInDown">
                <div class="mb-cnt">
                    <h1><?php echo $banner_section['heading'];?></h1>
                    <p><?php echo $banner_section['content'];?></p>
                    <a href="<?php echo $banner_section['button_link'];?>"
                        class="theme-btn btn-blue"><?php echo $banner_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->
<section class="sec-one spad" style="background: url(<?php echo $first_section['image'];?>) center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <div class="s1-cnt">
                    <h6 class="sub-head"><?php echo $first_section['heading'];?></h6>
                    <h2 class="main-head theme-head"><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                    <a href="<?php echo $first_section['button_link'];?>"
                        class="theme-btn"><?php echo $first_section['button_text'];?></a>
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
                    <p><?php echo $second_section['content'];?></p>
                    <a href="<?php echo $second_section['button_link'];?>"
                        class="theme-btn"><?php echo $second_section['button_text'];?></a>
                </div>
            </div>
            <div class="col-md-6 wow bounceInRight">
                <ul class="image-slider">
                    <?php $box_list = $second_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li>
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-three spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow bounceInLeft">
                <div class="video-wrap">
                    <video src="" poster="<?php echo $third_section['image'];?>" controls></video>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <h2 class="main-head"><?php echo $third_section['heading'];?></h2>
                <p><?php echo $third_section['content'];?></p>
            </div>
        </div>
    </div>
</section>
<section class="sec-four spad"
    style="background: url(<?php echo $fourth_section['image'];?>) center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s4-cnt">
                    <h6 class="sub-head"><?php echo $fourth_section['heading'];?></h6>
                    <h2 class="main-head theme-head"><?php echo $fourth_section['sub_heading'];?></h2>
                    <p><?php echo $fourth_section['content'];?></p>
                    <a href="<?php echo $fourth_section['button_link'];?>"
                        class="theme-btn"><?php echo $fourth_section['button_text'];?></a>
                </div>
            </div>
            <div class="col-md-6 wow bounceInRight">
                <ul class="image-slider">
                    <?php $box_list = $fourth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li>
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-five spad">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown">
            <h2 class="main-head"><?php echo $fifth_section['heading'];?></h2>
        </div>
        <div class="row">
            <div class="col-md-6 wow bounceInLeft">
                <ul class="image-slider">
                    <?php $box_list = $fifth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li>
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="s5-cnt">
                    <h4><?php echo $fifth_section['sub_heading'];?></h4>
                    <p><?php echo $fifth_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-six spad">
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
    <div class="elem-s6 wow bounceInDown">
        <img src="<?php echo $sixth_section['image_4'];?>" alt="">
    </div>
</section>
<section class="sec-seven" style="background: url(<?php echo $seventh_section['image'];?>) center / cover no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s7-cnt">
                    <h2 class="main-head theme-head"><?php echo $seventh_section['heading'];?></h2>
                    <p><?php echo $seventh_section['content'];?></p>
                </div>
            </div>
            <div class="col-md-6 wow bounceIn">
                <figure><img src="<?php echo $seventh_section['image_2'];?>" alt=""></figure>
            </div>
        </div>
    </div>
    <div class="elem-s7 wow fadeInUp">
        <img src="<?php echo $seventh_section['image_3'];?>" alt="">
    </div>
</section>
<section class="sec-eight spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 wow fadeInUp">
                <figure><img src="<?php echo $eight_section['image'];?>" alt=""></figure>
            </div>
            <div class="col-md-7 wow fadeInDown">
                <div class="s8-cnt">
                    <h2 class="main-head"><?php echo $eight_section['heading'];?></h2>
                    <h4><?php echo $eight_section['sub_heading'];?></h4>
                    <p><?php echo $eight_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-nine">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="sec9-logos">
                    <?php $box_list = $ninth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li class="wow zoomIn"><img src="<?php echo $boxlist['image']; ?>" alt=""></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-ten">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="s10-cnt">
                    <h2 class="main-head wow fadeInDown"><?php echo $ninth_section['heading'];?></h2>
                    <p><?php echo $ninth_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>