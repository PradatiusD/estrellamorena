<?php 
    $page_class = 'home';
    include('partials/header.php');
    
?>
        <div class="spacer"></div>                
        <div id="myCarousel" class="carousel slide vertical hidden-phone">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/Estrella-slide3.png" alt="">
                  </div>
                  <div class="item">                    
                    <img src="img/Estrella-slide2.png" alt="">
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
<!--                     <div class="span2">
                        <a href="http://goo.gl/maps/dZPGV"><img src="img/maps.png" class="estrella" style="display:none"></a>
                    </div> -->
                    <div class="span12" align="center">
                      <a href="http://www.facebook.com/pages/Estrella-Morena-Flamenco-Dance-Studio/123334454361500"><img src="img/facebook.png" class="padding"></a>
                      <a href="mailto:estrellamorena@att.net"><img src="img/email.png" class="padding"></a>
                      <a href="#"><img src="img/Vimeo.png" class="padding"></a>
                    </div>
                </section>
            </div>
        </footer>        
        <script src="js/vendor/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel(
        {interval: 7000}
  )
</script>
       <!-- Javascript additional 
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>



        <script src="js/main.js"></script> -->
    </body>
</html>
