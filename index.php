<?php 
    $page_class = 'home';
    $swiper = true;
    $pretty_Photo = false;
    include('partials/header.php');
    
?>
        <div class="spacer"></div>

<style>
  .swiper-container {
    width: 100%;
    height: 400px;
    color: #fff;
    text-align: center;
    overflow: hidden;
    position: relative;
  }

  .pagination {
    position: absolute;
    z-index: 20;
    left: 10px;
    top: 10px;
  }
  .swiper-pagination-switch {
    display: block;
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background: #555;
    margin: 0 0px 5px;
    opacity: 0.8;
    border: 1px solid #fff;
    cursor: pointer;
  }
  .swiper-active-switch {
    background: #fff;
  }
</style>

    <section class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/Estrella-slide3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="img/Estrella-slide2.jpg" alt="">
            </div>
        </div>
        <div class="pagination"></div>
    </section>        
        <div class="spacer"></div>  
        <div class="banner-bottom-bg">
            <div class="container">
                <section class="span12">
                    <p style="font-weight:bold">Flamenco DANCE STUDIO<span class="hidden-phone"> | </span><br class="visible-phone">8410 W. Flagler St. Miami, FL 33144 #115-B<span class="hidden-phone"> | </span><br class="visible-phone">(305) 554-7282</p>
                </section>
            </div>
        </div>
        <div class="spacer"></div>  
        <footer class="bottom-bg">
            <div class="container">
                <section class="row">
                    <div class="span12" align="center">
                      <a href="http://www.facebook.com/pages/Estrella-Morena-Flamenco-Dance-Studio/123334454361500"><img src="img/facebook.png" class="padding"></a>
                      <a href="mailto:estrellamorena@att.net"><img src="img/email.png" class="padding"></a>
                      <a href="#"><img src="img/Vimeo.png" class="padding"></a>
                    </div>
                </section>
                <section class="row">
                  <div class="span4 offset8">
                    <p class="PD-stamp">Site by <a href="http://PradaDesigners.com" target="_blank">Prada Designers</a></p>
                  </div>
                </section>
            </div>
        </footer>

<script src="js/idangerous.swiper-2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script>
    var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    mode: 'vertical',
    speed:1000,
    autoplay: 4000,
    })
</script>
<script>
    jQuery(document).ready(function($){
        function ChangeNavClasses () {
            // Fixes an issue on homepage responsiveness
            var bodyWidth = $('body').width();
            if (bodyWidth > 908 && bodyWidth < 1214) {
                $('nav .span6.offset2').removeClass('span6 offset2').addClass('span7 offset1');
            } else {
                $('nav .span7.offset1').removeClass('span7 offset1').addClass('span6 offset2')
            }
        }
        

        function fixSwiper () {
            var bodyWidth = $('body').width();
            var SwiperHeight = bodyWidth*0.32;
            if (SwiperHeight>400) {
              var SwiperHeight = 400;
            }
            $('.swiper-container').css('height',SwiperHeight)            
        }

        // Call on DOM load and window resize
        fixSwiper();
        ChangeNavClasses();
        $(window).resize(function(){
            fixSwiper();
            ChangeNavClasses();
        })
    })
</script>
<?php 
include('partials/footer.php');  
?>