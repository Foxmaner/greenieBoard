$(document).ready(function() {
  $("#toggleLoginBtn").click(function() {

    var display = $("#wrapperLogin").css("display");

    if (display == "none") {
      $("#wrapperLogin").fadeIn("slow");
    } else {
      $("#wrapperLogin").fadeOut("slow");
    }
  });
});
