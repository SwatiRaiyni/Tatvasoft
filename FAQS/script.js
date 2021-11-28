function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  $(document).ready(function(){
    $("#demo").on("hide.bs.collapse", function(){
      $(".btn").html('<img src="assets/vector-smart-object-copy.png">');
    });
    $("#demo").on("show.bs.collapse", function(){
      $(".btn").html('<img src="assets/vector-smart-object.png"> ');
    });
  });