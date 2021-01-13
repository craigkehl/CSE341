const section = document.querySelector('section');

section.addEventListener('click', function(event) {
  let card = event.target.closest('div.card');
  let color = card.childNodes[5].value;  
  if (event.target == card.childNodes[7].childNodes[1]) {
    alert("Clicked!");
    card.style.backgroundColor = color;
  }
});