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
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
            <?php
                    require_once 'contact_sidebar.php';
                ?>
                <div class="side">
                <div class="col-sm-9 comfort">
                    <h3 class="heading">Contact us</h3>
                    
                    
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
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-theme-bg btn-lg sendEnquiry" id="sendEnquiry">Send Message</button>
                                </div>
                            </div>
                        </div>

                    </div><!--contact form-->
                    <div id="sent"></div>
                    <div id="unsent"></div>
                </div>
                <div class="col-sm-9 comfort" style="margin-top: 50px">
                    <h3 class="heading">Contact info</h3>
                    <ul class="list-unstyled contact-info">
                        <li><p><strong><i class="fa fa-map-marker"></i> Address: </strong>"Rudramani" 1720,Laskarhat EM Bypass Kolkata - 700 039</p></li> 
                        <li><p><strong><i class="fa fa-envelope"></i> Mail Us: </strong><a href="mailto:info@groupnirmal.com">info@groupnirmal.com</a></p></li>
                        <li> <p><strong><i class="fa fa-phone"></i> Phone: </strong>+91-33-6622-4848</p></li>
                    </ul>
                    <div class="divide40"></div>
                    <h4>Get social</h4>
                    <ul class="list-inline social-1">
                        <li><a href="https://www.facebook.com/groupnirmal/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/6587187?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6587187%2Cidx%3A1-1-1%2CtarId%3A1454825366290%2Ctas%3Anirmal%20group%20of%20companie" target="_blank"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="divide40"></div>
<?php
    require_once 'footer.php';
?>