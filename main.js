// jQuery(document).ready(function(){
    
// });

console.log('hi');

jQuery('section.gallery-main .banner .arrow').on('click', function(){
    if(this.data('pos') == "left") {
        var first = jQuery('section.gallery-main .banner .img-con .banner-img:last-child');
        jQuery('section.gallery-main .banner .img-con').prepend(first);
        jQuery('section.gallery-main .banner .img-con .banner-img:last-child').remove();
    } else if(this.data('pos') == "right") {
        var first = jQuery('section.gallery-main .banner .img-con .banner-img:first-child');
        jQuery('section.gallery-main .banner .img-con').append(first);
        jQuery('section.gallery-main .banner .img-con .banner-img:first-child').remove();
    }
});