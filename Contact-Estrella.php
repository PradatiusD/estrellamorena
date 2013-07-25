<?php 
    $page_class = '';
    include('partials/header.php');  
?>
        <div class="spacer"></div>
        <div class="container">
            <section class="row top-spacing">
                <h2>
                    Contact
                </h2>
            </section>
            <section class="row hidden-phone">
                <div class="span10 offset1">
                    <div id="map-canvas" style="height:500px;"></div>        
                </div>
            </section>
            <br><br>
            <section class="row">
                <div class="span4 offset1">
                        <h3>Contact Estrella</h3>
                        <form class="ContactPrada" action="http://PradaDesigners.com/Projects/Estrella/contact.php" method="post">
                            <input class="input-large" type="text" placeholder="Name"  name="Name"><br>
                            <input class="input-large" type="email" name="email" placeholder="E-mail"><br>
                            <input class="input-large" type="tel" name="phonenumber" placeholder="Phone Number"><br>
                            <p>I'm interested in</p>
                            <select name="what" id="">
                                <option value="Flamenco Lessons">Flamenco Lessons</option>
                                <option value="Hiring Fuego Flamenco">Hiring Fuego Flamenco</option>
                                <option value="Other">Other</option>
                            </select>
                            <textarea name="how" style="width:213px" placeholder="Comments or suggestions." rows="5"></textarea><br>
                            <input type="submit" value="¡Olé!" class="btn">
                        </form>
                </div>
                <div class="span4 offset2">
                    <h3>Address & Info:</h3>
                    <h5>8410 W Flagler St Miami, FL 33144 Suite 115b</h5>
                    <h5>(305) 554-7282</h5>
                    <h5><a href="mailto:contact@estrellamorena.com">contact@estrellamorena.com</a></h5>      
                </div>
            </section>             
        </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>    
    <script>
    // Enable the visual refresh
    google.maps.visualRefresh = true;


    var map;
    var estrellaLocation = new google.maps.LatLng(25.768852,-80.332557);
    function initialize() {
      var mapOptions = {
        zoom: 15,
        center: estrellaLocation,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: estrellaLocation,
            map:map,
            title:"Hello World!"
        });

    var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h4 id="firstHeading" class="firstHeading">Estrella Morena Flamenco</h4>'+
          '<div id="bodyContent">'+
          '<p>The studio is located at <b>8410 W Flagler St Miami, FL 33144 Suite 115b</b>. ' +
          '<p>To view a larger map, <a href="http://goo.gl/maps/2HsCo">click here.</a>'+'</p>'+
          '</div>'+
          '</div>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var marker = new google.maps.Marker({
          position: estrellaLocation,
          map: map,
          title: 'Uluru (Ayers Rock)'
      });

      
        infowindow.open(map,marker);

    }



    google.maps.event.addDomListener(window, 'load', initialize);
    </script>       
<?php 
include('partials/footer.php');  
?>

