function formatState(opt) {
	if (!opt.id) {
		return opt.text.toUpperCase();
	}
	var optimage = jQuery(opt.element).attr('data-image');
	if (!optimage) {
		return opt.text.toUpperCase();
	} else {
		var $opt = jQuery(
			'<span><img src="' + optimage + '"/></span>'
			);
		return $opt;
	}
};

function formatStateDropdown(opt) {
	if (!opt.id) {
		return opt.text.toUpperCase();
	}
	var optimage = jQuery(opt.element).attr('data-image');
	if (!optimage) {
		return opt.text.toUpperCase();
	} else {
		var $opt = jQuery(
			'<span><img src="' + optimage + '" /> ' + opt.text + '</span>'
			);
		return $opt;
	}
};

// equal height

function equalHeight() {
    jQuery.fn.extend({
        equalHeight: function () {
            var top = 0;
            var row = [];
            var classname = ('equalHeight' + Math.random()).replace('.', '');
            jQuery(this).each(function () {
                var thistop = jQuery(this).offset().top;
                if (thistop > top) {
                    jQuery('.' + classname).removeClass(classname);
                    top = thistop;
                }
                jQuery(this).addClass(classname);
                jQuery(this).height('auto');
                var h = (Math.max.apply(null, jQuery('.' + classname).map(function () {
                    return jQuery(this).outerHeight();
                }).get()));
                jQuery('.' + classname).height(h);
            }).removeClass(classname);
        }
    });
    jQuery('.why-helperhand .helperhand-wrapper h3').equalHeight();

}
function fixed_header() {
    if (jQuery(window).scrollTop() > 0) {
        jQuery('header').addClass('fixed');
    }
    else {
        jQuery('header').removeClass('fixed');
    }    
}
jQuery(document).ready(function() {
    equalHeight();
    fixed_header();
    jQuery('.custom-dropdown').each(function(){
        var _this = jQuery(this);
        jQuery(this).find("select").select2({
            templateResult: formatStateDropdown,
            templateSelection: formatState,
            dropdownParent: _this,
            minimumResultsForSearch: Infinity,
            

        });
    });
    jQuery('.scroll-link').click(function(e){
        e.preventDefault();
        jQuery('html,body').animate({
            scrollTop:jQuery('.scroll-section').offset().top - jQuery('.site-header').outerHeight()
        },1000);
    });
    jQuery('.scroll-top').click(function(e){
        e.preventDefault();
        jQuery('html,body').animate({
            scrollTop:0
        },1000);
    });
    jQuery('.ok-btn').click(function(e){
        e.preventDefault();
        var _this = jQuery(this);
        _this.closest('.footer-bottom').slideUp();

    })


 });
 jQuery(window).resize(function(){
    equalHeight();
 });
 jQuery(window).on('load',function () {
    setTimeout(function(){
        equalHeight();
    },500)
 });
 jQuery(window).scroll(function () {
   fixed_header();
});


const url=new URLSearchParams(window.location.search);
if(url=="loginmodal=true"){
    document.getElementById("homelogin").click();
}


$("#clickBtn").on('click', function(){
    var email=document.getElementById("Username").value;
    var password=document.getElementById("Password").value;
    var remember = document.getElementById("remember").checked; //alert(remember);
    var url = "http://localhost/TatvaSoft/Helperland/?controller=Register&function=login";
    if(email == '' && password == ''){
        toastr.error('Error , both fiellds are requierd');
    }else{
    $.ajax({
       url:url,    
       type: "post",   
       dataType: 'json',
       data:{
        email : email,
        password : password,
        remember : remember
        },
        success:function(result){
           if(result.data.status == 'error'){
               toastr.error(result.data.msg, 'Error');
               var password = $("#Password").val('');
            	var email = $("#Username").val('');

           }else{
               if(result.data['UserTypeId'] == 1){
                   window.location = " http://localhost/TatvaSoft/Helperland/?controller=Contact&function=customerdashboard";
               }else if(result.data['UserTypeId'] == 2){
                    window.location = " http://localhost/TatvaSoft/Helperland/?controller=Contact&function=spdashboard";
               }else if(result.data['UserTypeId'] == 3){
                window.location = " http://localhost/TatvaSoft/Helperland/?controller=Contact&function=admin";
            }
           }
          
       }
   });
    }


});

