const section = document.querySelector('section');

section.addEventListener('click', function(event) {
  let card = event.target.closest('div.card');
  let color = card.childNodes[5].value;  
  if (event.target == card.childNodes[7].childNodes[1]) {
    alert("Clicked!");
    card.style.backgroundColor = color;
  }
});

function fade() {
  $("#card3").fadeToggle("slow");

};

$(document).ready(function() {
  $("button").mouseover(function() {
    var p = $("#card3").css("background-color", "yellow");
    p.hide(1500).show(1500);
    p.queue(function() {
      p.css("background-color", "red");
    });
  });
});
