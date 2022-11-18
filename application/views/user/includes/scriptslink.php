<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('public/user/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('public/user/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('public/user/'); ?>assets/js/isotope.min.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/owl-carousel.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/lightbox.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/tabs.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/video.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/slick-slider.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/myjs.js"></script>
<script src="<?php echo base_url('public/user/'); ?>assets/js/gallery.js"></script>

<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<script>
    $(function() {
        $('ul.myactivebtn li').on('click', function() {
            $(this).parent().find('li.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

</body>

</body>

</html>