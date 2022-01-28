function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
 
   $(document).ready(function () {
     $('#menu ul li a').click(function (ev) {
         $('#menu ul li').removeClass('selected');
         $(ev.currentTarget).parent('li').addClass('selected');
     });
 });
  $(document).ready(function(){
    $("#demo1").on("hide.bs.collapse", function(){
      $("#btn1").html('<img src="assets/images/vector-smart-object-copy.png">');
    });
    $("#demo1").on("show.bs.collapse", function(){
      $("#btn1").html('<img src="assets/images/down-arrow.png"> ');
    });
    $("#demo").on("hide.bs.collapse", function(){
      $("#btn2").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo").on("show.bs.collapse", function(){
      $("#btn2").html('<img src="./assets/images/down-arrow.png"> ');
    });
    $("#demo3").on("hide.bs.collapse", function(){
      $("#btn3").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo3").on("show.bs.collapse", function(){
      $("#btn3").html('<img src="./assets/images/down-arrow.png"> ');
    });
    $("#demo4").on("hide.bs.collapse", function(){
      $("#btn4").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo4").on("show.bs.collapse", function(){
      $("#btn4").html('<img src="./assets/images/down-arrow.png"> ');
    });
    $("#demo5").on("hide.bs.collapse", function(){
      $("#btn5").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo5").on("show.bs.collapse", function(){
      $("#btn5").html('<img src="./assets/images/down-arrow.png"> ');
    });
    $("#demo6").on("hide.bs.collapse", function(){
      $("#btn6").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo6").on("show.bs.collapse.", function(){
      $("#btn6").html('<img src="./assets/images/down-arrow.png"> ');
    });
    $("#demo7").on("hide.bs.collapse", function(){
      $("#btn7").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo7").on("show.bs.collapse", function(){
      $("#btn7").html('<img src="./assets/images/down-arrow.png"> ');
    });
    
    $("#s").on("hide.bs.collapse", function(){
      $("#btn").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#s").on("show.bs.collapse", function(){
      $("#btn").html('<img src="./assets/images/down-arrow.png"> ');
    });
   
    $("#demo12").on("hide.bs.collapse", function(){
      $("#btn10").html('<img src="./assets/images/vector-smart-object-copy.png">');
    });
    $("#demo12").on("show.bs.collapse", function(){
      $("#btn10").html('<img src="./assets/images/down-arrow.png"> ');
    });
   
  });

 