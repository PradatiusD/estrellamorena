<?php 
    $page_class = 'home';
    $swiper = true;
    $pretty_Photo = false;
    include('partials/header.php');
    
?>
        <div class="spacer"></div>                
        <div id="myCarousel" class="carousel slide vertical hidden-phone">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/Estrella-slide3.jpg" alt="">
                  </div>
                  <div class="item">                    
                    <img src="img/Estrella-slide2.jpg" alt="">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
        <div class="spacer"></div>  
        <div class="banner-bottom-bg">
            <div class="container">
                <section class="span12">
                    <p style="font-weight:bold">Flamenco DANCE STUDIO  | 8410 W. Flagler St. Miami, FL 33144 #115-B | (305) 554-7282</p>
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
            </div>
        </footer>
<style>
    .swiper-container {
  width: 640px;
  height: 250px;
  color: #fff;
  text-align: center;
}
.red-slide {
  background: #ca4040;
}
.blue-slide {
  background: #4390ee;
}
.orange-slide {
  background: #ff8604;
}
.green-slide {
  background: #49a430;
}
.pink-slide {
  background: #973e76;
}
.swiper-slide .title {
  font-style: italic;
  font-size: 42px;
  margin-top: 80px;
  margin-bottom: 0;
  line-height: 45px;
}
.swiper-slide p {
  font-style: italic;
  font-size: 25px;
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
          <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide blue-slide">
        <div class="title">Vertical Mode</div>
        <p>Swipe to the Top or to the Bottom</p>
      </div>
      <div class="swiper-slide red-slide">
        <div class="title">Slide 2</div>
        <p>Keep swiping</p>
      </div>
      <div class="swiper-slide orange-slide">
        <div class="title">Slide 3</div>
        <p>The last one</p>
      </div>
    </div>
    <div class="pagination"></div>
  </div>        
        <script src="js/vendor/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel(
        {interval: 7000}
  )
</script>
<script src="js/idangerous.swiper-2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    mode: 'vertical'
  })
  </script>
    </body>
</html>
