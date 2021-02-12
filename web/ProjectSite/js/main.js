$(document).ready(function() {
    
  $(".navShowHide").on("click", function() {
      
      var main = $("#mainSectionContainer");
      var nav = $("#sideNavContainer");

      if(main.hasClass("leftPadding")) {
          nav.hide();
      }
      else {
          nav.show();
      }

      main.toggleClass("leftPadding");

  });

});

function showPassword() {
    let pwInput = document.getElementById("parentPassword");
    if (pwInput.type === "password") {
      pwInput.type = "text";
    } else {
      pwInput.type = "password";
    }
  }