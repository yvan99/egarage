//password toggle
$(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// end of password toggle

// google api Autocomplete
function initialize() {
  var options = {
    componentRestrictions: {country: "rw"}
   };
    var input = document.getElementById("searchTextField");
    new google.maps.places.Autocomplete(input,options);
}

google.maps.event.addDomListener(window, "load", initialize);
