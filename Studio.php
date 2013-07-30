<?php 
    $page_class = 'bio';
    include('partials/header.php');  
?>
        <div class="spacer"></div>
        <div class="container">
          <div class="row top-spacing">
                <h2>Estrella Flamenco Dance Studio</h2>
            </div>
            <div class="row">
                    <div class="span4 leftNav">
                        <ul>
                            <li > <a href="#">Classes</a></li>
                            <li ><a href="#">Workshops</a></li>
                            <li ><a href="#">Student Shows</a></li>
                            <li ><a href="#">Fees and Registration</a></li>
                        </ul>
                    </div>
                    <div class="span8 rightNav">
                        <section>
                        <h3>CLASS SCHEDULE</h3>
                        <div style="margin-bottom:3em">
                    <table class="table table-striped table-bordered table-hover">
                           <tr>
                               <td><strong>Advanced</strong></td>
                               <td>Mondays</td>
                               <td>7-9pm</td>
                           </tr>
                           <tr>
                               <td></td>
                               <td>Wednesdays</td>
                               <td>7-9pm</td>
                           </tr>
                           <tr>
                               <td></td>
                               <td>Saturdays</td>
                               <td>1-3pm</td>
                           </tr>
                           <tr>
                               <td><strong>Beginner / Intermediate</strong></td>
                               <td>Mondays</td>
                               <td>9-10pm</td>
                           </tr>
                           <tr>
                               <td></td>
                               <td>Tuesdays</td>
                               <td>9-10pm</td>
                           </tr>
                           <tr>
                               <td><strong>Beginner</strong></td>
                               <td>Fridays</td>
                               <td>5-6pm</td>
                           </tr>
                           <tr>
                               <td></td>
                               <td>Saturdays</td>
                               <td>4-5pm</td>
                           </tr>
                           <tr>
                               <td><strong>Kids (Age 6+)</strong></td>
                               <td>Saturday</td>
                               <td>11-12pm</td>
                           </tr>
                           <tr>
                               <td><strong>Master Classes</strong></td>
                               <td>By Appointment</td>
                               <td></td>
                           </tr>
                                                  </table>
                            <img src="img/studioestrella1.jpg" class="studio"/></div>                         
                           <br>
                           <p>Estrella’s objective is for her students to learn traditional dance forms as they are taught in Spain.  Her extensive education and training in flamenco has exposed her to the best teaching and choreography.  Laying the foundation for each level, the beginning student will learn proper heel-toe technique, flat foot technique, proper body placement to strengthen the body as a whole, movement of the hands and arms during dance, “palmas” (rhythmic hand-clapping), as well as introduction to different “compas” (beat, rhythm, melody and harmony).</p>
                           <ul>
                             <li>Beginning students will learn sevillanas, rumba and fandangos.</li>
                             <li>Students in the Intermediate level will learn tangos, alegrias, garrotin and introduction to buleria.</li>
                             <li>Curriculum for the Advanced student will include solea, seguidillas, bulerias, fan and manton, as well as more advanced footwork technique and live dancing with voice, guitar and cajon (percussion).</li>
                             <li>Children 6  and older – Saturdays at 11:00 a.m. (THIS SHOULD GO UNDER SCHEDULES)</li>
                           </ul>
                           <p>Placement of students at their particular level will be based on Estrella’s evaluation.</p>


                        </section>
                        <section style="display:none">
                        <h3>Workshops</h3>
                          <p>Yearly workshops are offered by artist Jose Moreno for the intermediate/advanced/professional students.  Classes cover technique, choreography and cajon.</p>
                      </section>
                        <section style="display:none">
                        <h3>Student Performances</h3>
                          <p>Yearly performances are in the month of July.  Students are encouraged to participate to demonstrate what they have learned throughout the year.  Performance provides students an avenue for developing a passion to learn, grow and improve, an outlet for artistic expression, as well as preparation into professional careers, whether it be performing or teaching.  Yearly performances will also feature invited artists.</p>
                      </section>
                        <section style="display:none">
                        <h3>Fees and Registration</h3>
                          <p>There is a $65.00 yearly registration fee.  Individual group classes are $15.00/hour.  Economical monthly packages are also available, as well as tailored packages to meet the student’s needs.  Private $50/hour.  Please call Estrella directly to discuss packages.</p>
                      </section>
                </div>     
        </div>
<script>
jQuery(document).ready(function($){
    $('.row .span4.leftNav ul li').click(function(){
      $('.row .span4.leftNav ul li a').css('color','gray')
      $('.rightNav section').hide();
      var text = $(this).index();
      $(this).children().css('color','#5C0A17');
      $('.rightNav section').eq(text).fadeToggle();
    })
    // Check for which panel they chose on navigation
      var galleryURLs = ['#Classes','#Workshops','#StudentShows', 'Fees'];
      var baseURL = 'http://estrellamorena.com/Studio.php';

      for (var i = 0; i < galleryURLs.length; i++) {
          var fullURL = baseURL+galleryURLs[i];
          if (document.URL===fullURL) {
              // Set galelry to default
              $('.leftNav ul li a').css('color','gray');
              $('.leftNav ul li').eq(i).find('a').css('color','#5C0A17');
              $('.span8 section').hide().eq(i).fadeToggle();
          }
      };
      $('#menu1 li').click(function(){
        var getIndex = $(this).index();
        $('.leftNav ul li a').css('color','gray');
        $('.leftNav ul li').eq(getIndex).find('a').css('color','#5C0A17');
        $('.span8 section').hide().eq(getIndex).fadeToggle();
      })
})    

</script>                        
      
<?php 
include('partials/footer.php');  
?>
