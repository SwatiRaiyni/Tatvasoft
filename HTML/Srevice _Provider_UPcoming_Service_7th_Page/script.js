
        function dashboard(){
        document.getElementById("upcomingservice").style.display="none";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("dashboard").style.display="block";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("dashboard1").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
        function newservice(){
            document.getElementById("newservicerequests").style.display="block";
            document.getElementById("upcomingservice").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("newservice").classList.add("active");
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
        function upcoming(){
            document.getElementById("upcomingservice").style.display="block";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("upcoming").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
       
        function schedule(){
            document.getElementById("serviceschedule").style.display="block";
            document.getElementById("upcomingservice").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("schedule").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
        function history(){
            document.getElementById("servicehistory").style.display="block";
            document.getElementById("upcomingservice").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("history").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
        function ratings(){
            document.getElementById("myratings").style.display="block";
            document.getElementById("upcomingservice").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("bookcustomer").style.display="none";
            document.getElementById("ratings").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("customer").classList.contains("active")){
                document.getElementById("customer").classList.remove("active");
            }
        }
        function bookcustomer(){
            document.getElementById("bookcustomer").style.display="block";
            document.getElementById("upcomingservice").style.display="none";
            document.getElementById("dashboard").style.display="none";
            document.getElementById("newservicerequests").style.display="none";
            document.getElementById("serviceschedule").style.display="none";
            document.getElementById("servicehistory").style.display="none";
            document.getElementById("myratings").style.display="none";
            document.getElementById("customer").classList.add("active");
            if(document.getElementById("newservice").classList.contains("active")){
                document.getElementById("newservice").classList.remove("active");
            }
            if(document.getElementById("dashboard1").classList.contains("active")){
                document.getElementById("dashboard1").classList.remove("active");
            }
            if(document.getElementById("upcoming").classList.contains("active")){
                document.getElementById("upcoming").classList.remove("active");
            }
            if(document.getElementById("schedule").classList.contains("active")){
                document.getElementById("schedule").classList.remove("active");
            }
            if(document.getElementById("history").classList.contains("active")){
                document.getElementById("history").classList.remove("active");
            }
            if(document.getElementById("ratings").classList.contains("active")){
                document.getElementById("ratings").classList.remove("active");
            }
        }
 
/*function formatState(opt) {
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
*/

