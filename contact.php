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

        <div class="col-sm-12">
            <div id="map-canvas"></div>
        </div>


        <div class="col-sm-12">
            <p style="font-size:250%;"><center>CONTACT <b>US</b></center></p>
            <hr>
        </div>


        <div class="divide80"></div>
        <div class="container">
            <div class="row">
            
                
                <div class="col-sm-6 pull-right">
                    <h3 class="heading" style="color:#0492B6;">Contact FORM</h3>
                    
                    
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
                                            <input type="text" class="form-control" placeholder="Name" id="mobile" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Subject<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" id="subject" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12" style="color:#0492B6;">
                                    <button type="submit" class="btn btn-theme-bg btn-lg sendEnquiry" id="sendEnquiry">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div><!--contact form-->

                    <div class="col-sm-6">
                        <h3 class="heading" style="color:#0492B6;">ADDRESS</h3>
                        <label>22B Rabindra Sarani,Room:</label><br>
                        <label>FN 23,1st Floor,Kolkata,</label><br>
                        <label>West Bengal 700073</label><br><br>

                        <h3 class="heading" style="color:#0492B6;">CONTACTS</h3>
                        <label>Email:info@pwl.com</label><br>
                        <label>+91 02658 48565</label><br>
                        <label>+91 25658 58565</label><br><br>  

                        <h3 class="heading" style="color:#0492B6;">WHY US</h3>
                        <label></label><br>
                        
                    </div>                    
                </div>       
            </div>
        </div>
        <div class="divide40"></div>
<?php
    require_once 'footer.php';
?>


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