<?php $topPage = get_field('top_title'); ?>
<section class="top-main">
    <i class="fas fa-shopping-cart cart-art"></i>
    <div class="head">
        <h1><?php echo $topPage['title']; ?></h1>
        <h5><?php echo $topPage['location_title']; ?></h5>
    </div>
    <div class="time-con">
        <h6>Opens At</h6>
        <p><?php echo $topPage['time']['opening_time']; ?> To <?php echo $topPage['time']['closing_time']; ?></p>
    </div>
    <div class="contact-con">
        <i class="fas fa-phone"></i>
        <h5>+91-<?php echo $topPage['phone']; ?></h5>
    </div>
</section>