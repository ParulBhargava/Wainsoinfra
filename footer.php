<footer>

<div class="footContainer">

        <section class="footContainer__about">

                <h2>Why Wainso</h2>

                <div class="footContainer__about--txt">

                    Wainso Infra Sports is a renowned

                    company which provides indoor and

                    outdoor sports surfaces of all types

                    which are designed from

                    qualitative material.

                </div>

                <div class="footContainer__about--social">



                        <div class="fb-page"

                        data-href="www.facebook.com/wainsoinfrasports"

                        data-width="320"

                        data-hide-cover="false"

                        data-show-facepile="false"></div>

               </div>

            </section>

            <section class="footContainer__cases">

                <h2>We Offer</h2>

                <ul>

                    <li>Badminton Court</li>

                    <li>Basketball Court</li>

                    <li>Volleyball Court</li>

                    <li>Tennis Court</li>

                    <li>Multiaport Service</li>

                    <li>PU Flooring</li>

                    <li>EDM Flooring</li>

                    <li>Rubber Tiles</li>

                </ul>

            </section>

            <section class="footContainer__contact">

                <h2 class="footContainer__contact--h2">Get In Touch</h2>

                <div class="footContainer__contact--timings">

                    <div class="user-nav__icon--box">

                        <svg class="user-nav__icon">

                            <use xlink:href="/img/SVG/symbol-defs.svg#icon-alarm"></use>

                        </svg>

                        <span class="user-nav__info">10AM to 6PM <br> Monday to Saturday</span>

                    </div>

                    <div class="user-nav__icon--box"  onclick="top.location.href='https://goo.gl/maps/dacaZE2QuN22'">

                            <svg class="user-nav__icon">

                                <use xlink:href="/img/SVG/symbol-defs.svg#icon-location-pin"></use>

                            </svg>

                            <span class="user-nav__info"> RZG 749, Bhagat Singh Marg, Raj nagar Part 2, Palam colony, Dwarka Sec 7, New Delhi, 110077</span>

                        </div>

                    <div class="user-nav__icon--box">

                        <svg class="user-nav__icon">

                            <use xlink:href="/img/SVG/symbol-defs.svg#icon-phone"></use>

                        </svg>

                        <span class="user-nav__info">
                 <a href="tel:+91-9312578168">Rahul kumar - +91-9312578168 </a>
<a href="tel:+91-8882470101">Rohit Kumar- +91-8882470101</a>
<a href="tel:011-25363694">Wainso - 011-25363694 </a>

                        </span>

                    </div>

                    <div class="user-nav__icon--box">

                        <svg class="user-nav__icon">

                            <use xlink:href="/img/SVG/symbol-defs.svg#icon-mail" ></use>

                        </svg>

                        <span class="user-nav__info">

                        <a href="mailto:info@wainsoinfrasports.com">info@wainsoinfrasports.com</a>  </span>

                    </div>



                </div>



            </section>

</div>



</footer>

<div class="copyright">&copy;2018 &nbsp; <a href="http://www.wainsosports.com/"> Wainso Sports </a>&nbsp; | All Right Reserved</div>







<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="js/jquery-crotator.js"></script>

<script type="text/javascript" src="/js/script.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>

$(document).ready(function() {



$("#slider3").sliderResponsive({

hoverZoom: "off",

hideDots: "on"

});



$('#toggle-btn').click(function(){

$(this).toggleClass('is-active');

    $(".mobnav").toggle();

    $(".hero__logo").toggle();

    $(".herob__logo").toggle();

});

});

</script>



<script>



// Calling with user defined timeline

$("#quotes").crotator({

// timeline (in seconds)

timeArray: [12, 10, 14, 19, 13, 10],

// terminate after display the last element

cycle: false,

typeofTag: "<h3/>",

tagClass: "quotes"

});

</script>

<script>
$.validate({
form : '#enquiry-form',
errorMessagePosition : 'top', // Instead of 'inline' which is default
modules : 'security',
onError : function($form) {
//alert('Validation of form '+$form.attr('id')+' failed!');
},

onSuccess : function($form) {
var formData = $('#enquiry-form').serialize();
$.ajax({
    type: 'POST',
    url: 'mail.php',
    data: formData,
    success:function(data) {
      // log data to the console so we can see
      console.log(data);
      // here we will handle errors and validation messages
      alert (data);
      $("#enquiry-form").trigger("reset");
    }
})

return false; // Will stop the submission of the form

},

onElementValidate : function(valid, $el, $form, errorMess) {
console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
}
});

// Validation event listeners
$('input')
.on('beforeValidation', function(value, lang, config) {
console.log('Input "'+this.name+'" is about to become validated');
// Call $(this).attr('data-validation-skipped', 1); to prevent validation
})
.on('validation', function(evt, valid) {
console.log('Input "'+this.name+'" is ' + (valid ? 'VALID' : 'NOT VALID'));
});

</script>
<!--For smooth scrolling of on page links-->
<script>
    // Select all links with hashes and having class smscroll
$('a.smscroll[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  </script>


</body>

</html>
