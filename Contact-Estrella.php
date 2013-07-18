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
            <section class="row">
                <div class="span6">
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
                            <p>Comments:</p>
                            <textarea name="how" style="width:308px"></textarea><br>
                            <input type="submit" value="¡Olé!" class="btn">
                        </form>
                </div>
                <div class="span6">
                    <div id="map-canvas" style="height:200px;"></div>
                    <h3>Estrella Morena Flamenco Dance Studio</h3>
                    <h5>8410 W Flagler St Miami, FL 33144 Suite 115b</h5>
                    <h5>(305) 554-7282</h5>
                    <h5>contact@estrellamorena.com</h5>                
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
    }



    google.maps.event.addDomListener(window, 'load', initialize);
    </script>       
    </body>
</html>


