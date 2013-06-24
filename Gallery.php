<?php 
    $page_class = 'bio';
    $pretty_Photo = true;
    include('partials/header.php');
    
?>
        <div class="spacer"></div>
        <div class="container">
            <div class="row top-spacing">
                <h2>Gallery</h2>
            </div>
            <section class="row">
                    <div class="span4 leftNav">
                        <ul>
                            <li > <a href="#" id="professional">Professional</a></li>
                            <li ><a href="#" id="personal">Personal</a></li>
                            <li ><a href="#" id="students">Student Shows</a></li>
                        </ul>
                    </div>
                        <div class="span8">
                            <div id="1" >
                                <ul class="gallery" >
                                    <li><a  href="img/Gallery-large/estrella-pro1.png" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro1.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro2.png" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro2.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro3.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro3.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro4.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro4.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro5.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro5.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro6.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro6.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro7.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrella-pro7.png"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/estrella-pro8.jpg" rel="prettyPhoto[gallery1]"><img src="img/Gallery-thumbnail/estrellay-pro8.png"  width="188" height="188" alt=""></a></li>
                                </ul>
                            </div>
                            <div id="2" style="display:none">
                                <ul class="gallery" >
                                    <li><a  href="img/Gallery-large/Personal1.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal1.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal2.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal2.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal3.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal3.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal4.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal4.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal5.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal5.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal6.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal6.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal7.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal7.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Personal8.jpg" rel="prettyPhoto[gallery2]"><img src="img/Gallery-thumbnail/Personal8.jpg"  width="188" height="188" alt=""></a></li>
                                </ul>
                            </div>
                            <div id="3" style="display:none">
                                <ul class="gallery" >
                                    <li><a  href="img/Gallery-large/Student-Shows1.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows1.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows2.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows2.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows3.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows3.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows4.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows4.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows5.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows5.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows6.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows6.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows7.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows7.jpg"  width="188" height="188" alt=""></a></li>
                                    <li><a  href="img/Gallery-large/Student-Shows8.jpg" rel="prettyPhoto[gallery3]"><img src="img/Gallery-thumbnail/Student-Shows8.jpg"  width="188" height="188" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
            </section>                
        </div>
            
      <script type="text/javascript">
    $(document).ready(

        function() {
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                show_title: false, /* true/false */
                allow_resize: true, /* Resize the photos bigger than viewport. true/false */
                default_width: 500,
                default_height: 344,
                counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
                modal: false /* If set to true, only the close button will close the window */
            });
            $('#professional').click(
                    function(){
                        $(this).css('color','#5C0A17');
                        $('#personal, #students').css('color','gray');
                        $('#2, #3').fadeOut('fast', function(){
                            $('#1').delay(200).fadeIn('fast')
                        })
                    }
                )
            $('#personal').click(
                    function(){
                        $(this).css('color','#5C0A17');
                        $('#professional, #students').css('color','gray');
                        $('#1, #3').fadeOut('fast', function(){
                            $('#2').delay(200).fadeIn('fast')
                        })
                    }
                )
            $('#students').click(
                    function(){
                        $(this).css('color','#5C0A17');
                        $('#personal, #professional').css('color','gray');
                        $('#1, #2').fadeOut('fast', function(){
                            $('#3').delay(200).fadeIn('fast')
                        })
                    }
                )            
        }
        )
      </script>
    </body>
</html>
