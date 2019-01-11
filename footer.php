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

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    document.getElementsByClassName('ham-menu')[0].addEventListener('click', function(){
        document.getElementsByClassName('menu-con')[0].classList.toggle('active');
    })
    console.log('hi');

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