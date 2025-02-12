<?php /** * Template Name: Training Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>
<section class="sec-four spad training-sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="s4-cnt">
                    <h6 class="sub-head"><?php echo $first_section['h_1'];?></h6>
                    <h2 class="main-head"><?php echo $first_section['h_2'];?></h2>
                    <p class="mb-0"><?php echo $first_section['c_1'];?></p>
                </div>
            </div>
            <div class="col-md-6 wow bounceInRight">
                <figure><img src="<?php echo $first_section['i_1'];?>" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<section class="training-sec bg-gray spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <figure><img src="<?php echo $first_section['i_2'];?>" alt=""></figure>
            </div>
            <div class="col-md-6">
                <div class="train-cnt">
                    <h2 class="main-head"><?php echo $first_section['h_3'];?></h2>
                    <p><?php echo $first_section['c_2'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="training-sec spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="train-cnt">
                    <h2 class="main-head"><?php echo $first_section['h_4'];?></h2>
                    <p><?php echo $first_section['c_3'];?></p>
                </div>
            </div>
            <div class="col-md-6">
                <figure><img src="<?php echo $first_section['i_3'];?>" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<section class="training-sec bg-gray spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <figure><img src="<?php echo $first_section['i_4'];?>" alt=""></figure>
            </div>
            <div class="col-md-6">
                <div class="train-cnt">
                    <h2 class="main-head"><?php echo $first_section['h_5'];?></h2>
                    <p><?php echo $first_section['c_4'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-nine pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="sec9-logos">

                    <?php $box_list = $first_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li class="wow zoomIn"><img src="<?php echo $boxlist['image']; ?>" alt=""></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="training-sec spad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <figure><img src="<?php echo $first_section['i_5'];?>" alt=""></figure>
            </div>

            <?php $box_list = $first_section['box_list_2'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>

            <div class="col-md-<?php if ($x==1) {echo 6;} else { echo 12; }?>">
                <div class="train-<?php if ($x==1) {echo 'cnt';} else { echo 'last'; }?>">
                    <h2 class="main-head"><?php echo $boxlist['heading']; ?></h2>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php $x++; }?>
        </div>
    </div>
</section>
<?php get_footer(); ?>