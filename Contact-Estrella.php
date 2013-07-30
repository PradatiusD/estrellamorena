<?php 
$page_class = '';
include('partials/header.php');  
?>
<!--[if lte IE 9]>
  <style>
    .iedisplay {
      display:block;
    }
  </style>
  <![endif]-->
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
            <legend>Contact Estrella</legend>
            <form class="ContactPrada" action="http://PradaDesigners.com/Projects/Estrella/contact.php" method="post">
                <label class="iedisplay" for="Name">Name</label>
                <input class="input-large" type="text" placeholder="Name"  name="Name"><br>
                <label class="iedisplay" for="E-mail">E-mail</label>
                <input class="input-large" type="email" name="email" placeholder="E-mail"><br>
                <label class="iedisplay" for="E-mail">Phone Number</label>
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
          <legend>Address & Info:</legend>
          <address>
              <strong>Estrella Morena Flamenco Studio</strong><br>
              8410 W Flagler St, Suite 115b<br>
              Miami, FL 33144<br>
              <abbr title="Phone">P:</abbr>(305) 554-7282
          </address>
          <address>
              <strong>Estrella Morena</strong><br>
              <a href="mailto:contact@estrellamorena.com">contact@estrellamorena.com</a>
          </address>
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

