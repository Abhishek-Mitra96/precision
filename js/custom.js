$( window ).resize(function() {
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
});

$(document).ready(function() {
$('.js-activated').dropdownHover({
instantlyCloseOthers: false,
delay: 0
}).dropdown();
});

//sticky header on scroll
$(document).ready(function () {
    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });
});

/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */
$(document).ready(function () {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();
});




//owl carousel for work
$(document).ready(function () {

    $("#work-carousel").owlCarousel({
        // Most important owl features
        items: 4,
        itemsCustom: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 6000
    });

});


//owl carousel for news
$(document).ready(function () {

    $("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
$(document).ready(function () {

    $("#testi-carousel").owlCarousel({
        // Most important owl features
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});
//featured work carousel slider

$(document).ready(function () {

    $("#featured-work").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        stopOnHover: true

    });

});

/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});

/* ==============================================
 flex slider
 =============================================== */

$(document).ready(function () {
$('.main-flex-slider,.testi-slide').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade"
});
});
//OWL CAROUSEL
$(document).ready(function () {
$("#clients-slider").owlCarousel({
    autoPlay: 3000,
    pagination: false,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [991, 2]
});
});


/*========tooltip and popovers====*/
$(document).ready(function () {
$("[data-toggle=popover]").popover();

$("[data-toggle=tooltip]").tooltip();
});



//transparent header

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.transparent-header').css("background", "#252525");
        } else {
            $('.transparent-header').css("background", "transparent");
        }
    });
});


// to manage + and - in the products page

 $('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});

//contact

$(".sendEnquiry").click(function() {
            
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var subject = $("#subject").val();
    var message = $("#message").val();

    var error=0;

    if(name=="")
    {
        alert("Name can not be empty");
        error=1;
    }
    else if(email=="")
    {
        alert("Email can not be empty");
        error=1;
    }
    else if(mobile=="")
    {
        alert("Mobile can not be empty");
        error=1;
    }
    else if(mobile.length!=10)
    {
        alert("Incorrect Mobile Number");
        error=1;
    }
    else if(subject=="")
    {
        alert("Subject can not be empty");
        error=1;
    }
    else if(message=="")
    {
        alert("Message can not be empty");
        error=1;
    }

    if(error==0)
    {
        $("#sendEnquiry").hide();
        $.post("sendEnquiry.php",
            {
                name: name,
                mobile: mobile,
                email: email,
                subject: subject,
                message: message
            },
            function(data)
            {
                if(data==1)
                {
                    document.getElementById("sent").innerHTML="We heard You!! Now we'll get back to you";
                }
                else
                {
                    var showMessage="Technical ERROR. Please contact us on contactus@groupnirmal.com";
                    document.getElementById("unsent").innerHTML=showMessage;
                }
            });
    }
});

$(".sendBrochure").click(function() {
            
    var first_name = $("#first_name").val();
    var surname = $("#surname").val();
    var company_name = $("#company_name").val();
    var address = $("#address").val();
    var country = $("#country").val();
    var state   = $("#state").val();
    var city    = $("#city").val();
    var pincode = $("#pincode").val();
    var emailid = $("#emailid").val();
    var phone   = $("#phone").val();
    var message = $("#message").val(); 
    var error=0;

    if(first_name=="")
    {
        alert("First name can not be empty");
        error=1;
    }
    else if(surname=="")
    {
        alert("Surname can not be empty");
        error=1;
    }
    else if(company_name=="")
    {
        alert("Company name can not be empty");
        error=1;
    }
    else if(address=="")
    {
        alert("Address can not be empty");
        error=1;
    }
    else if(message=="")
    {
        alert("Message can not be empty");
        error=1;
    }
    else if(pincode=="")
    {
        alert("Pincode cannot be empty");
        error = 1;
    }
    else if(emailid=="")
    {
        alert("Email Id cannot be empty");
        error = 1;
    }
    if(error==0)
    {
        $("#sendBrochure").hide();
        $.post("sendBrochure.php",
            {
                first_name: first_name,
                surname : surname,
                company_name : company_name,
                address : address,
                country : country,
                state   : state,
                city    : city,
                pincode : pincode,
                phone   : phone,
                emailId : emailid,
                message : message
            },
            function(data)
            {
                if(data==1)
                {
                    alert("We heard You!! Now we'll get back to you");
                    document.getElementById("sent").innerHTML="We heard You!! Now we'll get back to you";
                }
                else
                {
                    alert("Technical ERROR. Please contact us on vidit@goyalsoftwares.com");
                    document.getElementById("unsent").innerHTML="Technical ERROR. Please contact us on vidit@goyalsoftwares.com";
                }
            });
    }
});