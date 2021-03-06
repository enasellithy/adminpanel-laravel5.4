var OptionSwitcher = function () {

	return {        

		//option Switcher
		initOptionSwitcher: function() {    
			var panel = jQuery('.option-switcher');

			jQuery('.option-switcher-btn').click(function () {
				jQuery(this).hide(100);
				jQuery('.option-switcher').addClass('fadeInRight').removeClass('fadeOutRight').show();
			});

			jQuery('.theme-close').click(function () {
				jQuery('.option-switcher').removeClass('fadeInRight').addClass('fadeOutRight').hide(1000);
				jQuery('.option-switcher-btn').show(1000);
			});
			
			jQuery('li', panel).click(function () {
				var color = jQuery(this).attr("data-color");
				setColor(color);
				jQuery('.list-unstyled li', panel).removeClass("theme-active");
				jQuery(this).addClass("theme-active");
			});

			var setColor = function (color) {
				jQuery('#option_color').attr("href", "css/colors/" + color + ".css");
			}

			//Boxed Layout
			jQuery('.boxed-layout-btn').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".wide-layout-btn").removeClass("active-switcher-btn");
				jQuery("body").addClass("bodyColor wrapper");
			});
			jQuery('.wide-layout-btn').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".boxed-layout-btn").removeClass("active-switcher-btn");
				jQuery("body").removeClass("bodyColor wrapper");
			});

			//Header option
			jQuery('.static-header-light').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".fixed-header-light , .fixed-header-dark, .static-header-dark").removeClass("active-switcher-btn");
				jQuery(".navbar-default").removeClass("navbar-fixed-top navbar-main darkHeader").addClass('static-light lightHeader');
				jQuery("body").addClass("static");
			});
			jQuery('.static-header-dark').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".fixed-header-light , .fixed-header-dark, .static-header-light").removeClass("active-switcher-btn");
				jQuery(".navbar-default").removeClass("navbar-fixed-top navbar-main lightHeader static-light").addClass('darkHeader');
				jQuery("body").addClass("static");
			});
			jQuery('.fixed-header-light').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".static-header-light , .static-header-dark, .fixed-header-dark").removeClass("active-switcher-btn");
				jQuery(".navbar-default").addClass("navbar-fixed-top lightHeader navbar-main").removeClass("darkHeader static-light");
				jQuery("body").removeClass("static");
			});
			jQuery('.fixed-header-dark').click(function(){
				jQuery(this).addClass("active-switcher-btn");
				jQuery(".static-header-light , .static-header-dark, .fixed-header-light").removeClass("active-switcher-btn");
				jQuery(".navbar-default").addClass("navbar-fixed-top darkHeader").removeClass("navbar-main lightHeader static-light");
				jQuery("body").removeClass("static");
			});

		}
		
	};

}();