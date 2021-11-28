<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

let button = document.getElementById("backtotop");
window.onscroll= function(){
  fun();
};  
function fun(){
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ){
    button.style.display = "block";
  }
  else{
    button.style.display = "none";
  }
}
