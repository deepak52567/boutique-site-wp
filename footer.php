<?php $topPage = get_field('top_title'); ?>
<?php $footer = get_field('footer'); ?>
<footer>
    <div class="head">
        <h1>Contact</h1>
        <p><?php echo $footer['contact_about']; ?></p>
    </div>
    <div class="contact-foot">
        <div class="left-pt-1"></div>
        <div class="left-pt-2"></div>
        <div class="right">
            <div class="row">
                <i class="fas fa-envelope"></i>
                <p><?php echo $footer['email']; ?></p>
            </div>
            <div class="row">
                <label for="">
                    <i class="fas fa-phone"></i>
                </label>
                <p>+91-<?php echo $topPage['phone']; ?></p>
            </div>
            <div class="row">
                <label for=""><i class="fas fa-map-marked-alt"></i></label>
                <p><?php echo $footer['address']; ?></p>
            </div>
        </div>
        <i class="fas fa-envelope"></i>
    </div>
</footer>
</body>
<script>
    // document.querySelectorAll('.arrow').forEach(element => {
    //    element.addEventListener('click', function(e){
    //         e.preventDefault();
    //         var struct = document.getElementsByClassName('banner-img');
    //         if(e.toElement.classList[1] == 'left') {
    //             var divAppend = struct[struct.length - 1];
    //             console.log(divAppend);
                
    //             // document.getElementsByClassName('img-con')[0].appendChild(divAppend);
    //             // divAppend.removeChild('banner-img');
    //         } else if(e.toElement.classList[1] == 'right') {
    //             var divAppend = struct[struct.length - struct.length];
    //             console.log(divAppend);
    //         }
    //    }) 
    // });

    document.getElementsByClassName('ham-menu')[0].addEventListener('click', function(){
        document.getElementsByClassName('menu-con')[0].classList.toggle('active');
    })

    jQuery('section.gallery-main .banner .arrow').on('click', function(){
        if(jQuery(this).data('pos') == "left") {
            var first = jQuery('section.gallery-main .banner .img-con .banner-img:last-child');
            jQuery('section.gallery-main .banner .img-con').prepend(first);
            // jQuery('section.gallery-main .banner .img-con .banner-img:last-child').remove();
        } else if(jQuery(this).data('pos') == "right") {
            var first = jQuery('section.gallery-main .banner .img-con .banner-img:first-child');
            jQuery('section.gallery-main .banner .img-con').append(first);
            // jQuery('section.gallery-main .banner .img-con .banner-img:first-child').remove();
        }
    });
</script>
</html>