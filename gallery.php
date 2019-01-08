<?php $topcarousal = get_field('carousal'); ?>
<section class="gallery-main">
    <div class="banner">
        <div class="arrow left" data-pos="left"></div>
        <div class="arrow right" data-pos="right"></div>
        <div class="img-con">
            <div class="banner-img" style="background-image: url(<?php echo $topcarousal['banner_one']['url'] ?>)"></div>
            <div class="banner-img" style="background-image: url(<?php echo $topcarousal['banner_two']['url'] ?>)"></div>
            <div class="banner-img" style="background-image: url(<?php echo $topcarousal['banner_three']['url'] ?>)"></div>
            <div class="banner-img" style="background-image: url(<?php echo $topcarousal['banner_four']['url'] ?>)"></div>
        </div>
    </div>
</section>
<section class="gallery-main">
    <div class="head">
        <h1>Gallery</h1>
    </div>
    <div class="gallery-con">
    <?php
        $posts = get_posts(array(
            'post_type'			=> 'post'
        ));
        if( $posts ):
    ?>
    <?php
        foreach( $posts as $post ):
        setup_postdata( $post );
    ?>
        <div class="item" title=<?php the_title(); ?> 
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            style="background-image: url('<?php echo $image[0]; ?>');">
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</section>