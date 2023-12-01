
console.log("yame")

var modal = document.getElementById("myModal");
var brand_modal = document.getElementById("brandModal");
var btn = document.getElementById("myBtn");
var brand_btn=document.getElementById("brand_btn");
var span = document.getElementsByClassName("close")[0];
var brand_span = document.getElementsByClassName("brand_close")[0];
var message=document.getElementById("message")




btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

brand_span.onclick = function() {
  brand_modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}







brand_btn.onclick = function() {
  brand_modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == brand_modal) {
    brand_modal.style.display = "none";
  }
}

