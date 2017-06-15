<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Precision Group</title>


        <?php
            require_once 'header.php';
        ?>
        <!--top bar end hidden in small devices-->
        <!--navigation -->
        <!-- Static navbar -->

        
        <div id="map-canvas"></div>


        <div class="col-sm-10 col-sm-offset-1">
            
            <div class="divide40"></div>

            <p class="p_style">CONTACT <b>US</b><br>
                <span class="center-line1"></span>
            </p>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="divide40"></div>
        </div>


        

        <div class="container">
            <div class="row">
            
                
                <div class="col-sm-6">
                        <h3 class="heading address">ADDRESS
                            <br><span class="center-line1"></span>
                        </h3>
                        <label>46C, CHOWRINGHEE ROAD, FLAT-14G,</label><br>
                        <label>EVEREST HOUSE,KOLKATA-700071, INDIA.</label><br><br>
                        <!-- <label>West Bengal 700073</label><br><br> -->
                        <label>PRECISION WELDARC LTD<br> UNIT-1
                               49, B.T. ROAD, PANIHATI,<br> 24 PARGANAS(NORTH)
                                KOLKATA-743176, INDIA</label><br><br>

                        <label>PRECISION WELDARC LTD<br> UNIT-2
                               "DHULAGARH INDUSTRIAL PARK",<br> JALADHULAGORI, NH-6,<br> HOWRAH-711302, INDIA</label><br><br>

                        <label>PRECISION WELDARC LTD<br> WAREHOUSE
                               "DHULAGARH INDUSTRIAL PARK",<br> JALADHULAGORI, NH-6, HOWRAH-711302, INDIA</label><br><br>

                        <label>PRECISION WELDCON LLP<br> UNIT-1
                               PLOT NO. N-130, C.G.G.C. AKOLKA INDUSTRIAL<br> AREA, DIST. AKOLKA, MAHARASHTRA, INDIA</label><br><br>


                        <h3 class="heading address">CONTACTS
                            <br><span class="center-line1"></span>
                        </h3>
                        <label><a class="a_footer" href="mailto:info@groupprecision.com" target="_top" style="color:black;">info@groupprecision.com</a></label><br>
                        <label>+91-33-40033324/25/5570</label><br>
                        <label> +91-33-30535006</label><br><br>  
                </div>


                <div class="col-sm-6">
                    <h3 class="heading address">Contact Form
                        <br><span class="center-line1"></span>
                    </h3>
                    
                    
                    <div class="form-contact">
                        <div class="required">
                            <p>( <span>*</span> fields are required )</p>
                        </div>

                       <div id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Mobile<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Mobile No." id="mobile" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Subject<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Subject line" id="subject" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Enter your message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
            
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12" style="color:#0492B6;">
                                    <button type="submit" class="btn btn-theme-bg btn-lg sendEnquiry" id="sendEnquiry">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div><!--contact form-->                       
                </div>       
            </div>
        </div>

<div class="divide40"></div>

<?php
    require_once 'footer.php';
?>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz8t5wZdjOSVneN3KCRnfJhiFxNDokJvQ"></script>
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
                    draggable: true
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Precision Group</strong></p><p>Vailshali, assan City, 302012</p>';

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