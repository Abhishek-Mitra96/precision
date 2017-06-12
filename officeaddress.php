<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nirmal Group</title>

        <?php
            require_once 'header.php';
        ?>
        <div class="divide80"></div>
        <div class="container">

            <div class="row">
                <?php
                    require_once 'contact_sidebar.php';
                ?>
                <div class="side">
                <div class="col-sm-9 comfort">
                    <div class="row">
                        <div class="col-sm-12">
			             <h3 style="color:#004474;font: 400 20px/20px 'Open Sans', Arial, sans-serif, Helvetica;">Addresses</h3>
                            <div id="map-canvas"></div>
                        </div>
                    </div>
					<div class="row" style="padding-left:10px;">
					   <h3 style="color:#004474;font: 400 20px/20px 'Open Sans', Arial, sans-serif, Helvetica;border-bottom: 1px dashed grey;"><br><br>Offices</h3>
					</div>
                    <div class="row">
                        <div class="col-sm-8">
                            <b>Corporate Office</b>
                            <p>"Rudramani" 1720,Laskarhat<br> 
                                EM Bypass<br> 
                                Kolkata - 700 039<br>
                                phone:+91-33-6622-4848
                            </p>
                        </div>
                    </div><!--1/3 row end-->
					
		<div class="row" style="padding-left:10px;">
					   <h3 style="color:#004474;font: 400 20px/20px 'Open Sans', Arial, sans-serif, Helvetica;border-bottom: 1px dashed grey;"><br><br>Manufacturing Units</h3>
					</div>			
					
					 <div class="row">
                     <div class="col-sm-4 smallside">
                        <b>Nirmal Wires Pvt Ltd (Unit 1)</b>
                            <p>
                               Roy Bagan,<br>
                                Jessore Road,<br>
                                Madhyamgram,<br>
                                Kolkata - 700 129
                            </p>
                    </div>
                        <div class="col-sm-4 smallside">
                            <b>Nirmal Wires Pvt Ltd
(Unit 2)</b>
                            <p>
                               Village: Ishwaripur Deulti, <br> 
P.O.: Barunda,  <br>P.S.: Bagnan, <br>
Howrah-711 303
                            </p>
                        </div>
                        <div class="col-sm-4">
                           <b>Prateek Wires Pvt Ltd</b>
                            <p>
                               Roy Bagan,<br>
Jessore Road,<br>
Madhyamgram,<br>
Kolkata - 700 129
                            </p>
                        </div>
                        
                    </div><!--1/3 row end-->
					
					<div class="divide15"></div>
					
					 <div class="row">

                     <div class="col-sm-4 smallside">
                            <b>Central Stores Supplies (P) Ltd</b>
                            <p>
                              391 (47 New),<br>
G.T. Road<br>
Belur<br>
Howrah: 711 201
                            </p>
                        </div>
                        <div class="col-sm-4 smallside">
                            <b>Shri Ambika Metaliks <br>Pvt Ltd</b>
                            <p>
                              8/2, Nutanpara Road<br>
Liluah,<br>
Howrah - 711 204
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <b>Shieldarc Equipments 
                            <br>Pvt Ltd (Unit 1)</b>
                            <p>
                               Raspunja, Bakrahat Road,<br>
24 Parganas (South),<br>
Kolkata - 700 104
                            </p>
                        </div>
                    </div><!--1/3 row end-->

                    <div class="divide15"></div>
					
			<div class="row">

            <div class="col-sm-4 smallside">
            <br> 
            <br> 
            <br> 
            <br> 
            <br> 
            <div class="divide15"></div> 
            </div>
			
            <div class="col-sm-4 smallside">
                            <b>Shieldarc Equipments 
                            <br>Pvt Ltd (Unit 2)</b>
                            <p>
                              58/4 N.S. Road<br>
Liluah,<br>
Howrah - 711 204
                            </p>
                        </div>
            </div>			
					
                    <div class="divide30"></div>
                   
                </div>
                </div>
            </div>
        </div><!--left sidebar container-->
        <div class="divide60"></div>
       
      <?php
    require_once 'footer.php';
?>
<!--gmap js-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(22.5188393, 88.3971152);

                var mapOptions = {
                    zoom: 15,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>assan Template</strong></p><p>Vailshali, assan City, 302012</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
