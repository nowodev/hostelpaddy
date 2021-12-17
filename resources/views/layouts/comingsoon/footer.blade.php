<!-- Default script -->
<script src="{{ asset('main/js/script.js') }}"></script>

<!-- Vendor scripts -->
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
  // Set the date we're counting down to
  var countDownDate = new Date("Apr 22,2021 12:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = "" + Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = "" + Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = "" + Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = "" + Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countDay").innerHTML = days;
    document.getElementById("countHrs").innerHTML = hours;
    document.getElementById("countMin").innerHTML = minutes;
    document.getElementById("countSec").innerHTML = seconds;
  }, 1000);


  (function ($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    // fnames[1] = 'FNAME';
    // ftypes[1] = 'text';
    // fnames[2] = 'LNAME';
    // ftypes[2] = 'text';
    // fnames[3] = 'ADDRESS';
    // ftypes[3] = 'address';
    // fnames[4] = 'PHONE';
    // ftypes[4] = 'phone';
    // fnames[5] = 'BIRTHDAY';
    // ftypes[5] = 'birthday';
  }(jQuery));
  var $mcj = jQuery.noConflict(true);
</script>