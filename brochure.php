<!DOCTYPE>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Request a Brochure</title>

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
              require_once 'brochure_sidebar.php';
            ?>
                <div class="side">
                <div class="col-sm-9 comfort">
                    <h3 class="heading">Request A Brochure</h3>
                    
                    
                    <div class="form-contact">
                        <div class="required">
                            <p>( <span>*</span> fields are required )</p>
                        </div>

                       <div id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>First Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name" id="first_name" required data-validation-required-message="Please enter your first name." name="first_name">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Surname<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Surname" id="surname" required data-validation-required-message="Please enter your surname.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Company Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Company Name" id="company_name" required data-validation-required-message="Please enter your Company Name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Address<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Address" id="address" required data-validation-required-message="Please enter your address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class = "row">
                            <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Country<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Country" id="country" required data-validation-required-message="Please enter your country.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                             <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>State<span>*</span></label>
                                            <input type ="text" name="state" class="states form-control" id="state" required data-validation-required-message="Please Enter Your State">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>                               
                            </div>
                            <div class = "row">
                            <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>City<span>*</span></label>
                                            <input type="text" name="city" class="cities form-control" id="city" required data-validation-required-message="Please Enter Your City">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                                 <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Pincode<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Pincode" id="pincode" required data-validation-required-message="Please enter your Pincode">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="EmailId" id="emailid" required data-validation-required-message="Please enter your EmailId.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Phone No<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Phone No" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block"></p>
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
                                    <button type="submit" class="btn btn-theme-bg btn-lg sendBrochure" id="sendBrochure">Request</button>
                                </div>
                            </div>	
                        </div>
                    </div><!--contact form-->
                    <div id="sent"></div>
                    <div id="unsent"></div>
                </div>
            </div>
        </div>
        </div>
        <div class="divide40"></div>
        
				<?php
    			require_once 'footer.php';
				?>

	</head>

</html>	