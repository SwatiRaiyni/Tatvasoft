$(document).ready(function(){
    $(".menu-bar").click(function(){
        $('.nav-list').toggleClass("active");
        $('.menu-bar i').toggleClass("active");
    });
    $(window).scroll(function(){
        if(this.scrollY > 30){
            $(".navbar").addClass("sticky");
        }else{
            $(".navbar").removeClass("sticky");
        }
    });
});

function servicerequest(){
    document.getElementById("servicerequest").style.display="block";
    document.getElementById("usermanagement").style.display="none";
   
    document.getElementById("request").classList.add("active");
    if(document.getElementById("usermange").classList.contains("active")){
        document.getElementById("usermange").classList.remove("active");
    }
   
}
function usermanage(){
    document.getElementById("usermanagement").style.display="block";
    document.getElementById("servicerequest").style.display="none";
   
    document.getElementById("usermange").classList.add("active");
    if(document.getElementById("request").classList.contains("active")){
        document.getElementById("request").classList.remove("active");
    }
   
}