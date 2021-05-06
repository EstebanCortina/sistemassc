jQuery(document).ready(function() {
    var e = location.pathname;
    var r = 0;
    if (e = e.toLowerCase(), e.search("/galeria") <= 0) {
	    r++;
        jQuery("table").each(function() {
            var e = 0;
            if (jQuery("th, td", this).each(function() {
                    return tmp = jQuery(this).text(), "" !== tmp ? (e = 1, 0) : void 0
                }), !e) {
                jQuery(this).addClass("SIS-SLIDER").css("display", "none"), 
                jQuery(".SIS-SLIDER:has(td img)").addClass("ei-slider"), 
                jQuery(".SIS-SLIDER:has(td p img)").removeClass("ei-slider"),
                jQuery(".SIS-SLIDER:has(td object)").removeClass("ei-slider"), 
                jQuery(".SIS-SLIDER.ei-slider").addClass("carrusel"), 
                jQuery("#galeria").removeClass("carrusel"), 
                jQuery("#galeria").removeClass("ei-slider");
                var s = jQuery( "<ul class='rslides'>" );
                jQuery( ".carrusel tr" ).each(function() {
                    var e = jQuery( "<li>" );
                    jQuery( "th, td", this ).each( function() {	
	                    		var image = this.innerHTML;
							jQuery( "img", this ).each( function() {
								
		                    var imageTitle = jQuery(this).prop( 'title' );
		                    var imageDescription = jQuery( this ).prop( 'alt' );
		                    var imageUrl = jQuery( this ).attr( 'longdesc' );
		                    
							if ( typeof imageTitle   !== 'undefined' || typeof imageDescription !== 'undefined' ) {
								imageTitle2 = "<h3 style='color: #FFFFFF !important;'>" + imageTitle + "</h3>";
								imageDescription2 = "<p>" + imageDescription + "</p>";
							}else{
								imageTitle2 =  imageTitle;
								imageDescription2 = imageDescription;
							}
							if ( typeof imageUrl !== 'undefined' ) {
								imageUrl2 = "<p><a href='"+ imageUrl +"' target='_blank'>Ver m&aacute;s...</a></p>";
							}else{
								imageUrl2 = '';
							}
							
							
		                    if ( imageTitle.length > 0 || imageDescription.length > 0 ){
						    		e.append(  image + "<div class='caption'><div class='caption-container' style='font-size: 0.875rem !important;line-height: 1.5;'>" + imageTitle2 + imageDescription2 + imageUrl2 + "</div></div>" );
						    }else{
								e.append( image );
							}
	                    });
                    }), s.append(e)
                });
                var a = jQuery( "<div class='slider'>" );
                a.append(s), jQuery(".SIS-SLIDER").replaceWith(a), jQuery(this).removeClass("SIS-SLIDER");
            }
        }), jQuery(function() {
	            jQuery(".rslides").responsiveSlides({
	                auto: true,           
					speed: 600,        
					timeout: 4000,        
					pager: true,        
					nav: true,       
					random: false,        
					pause: true,      
					pauseControls: true,  
					prevText: "(",   
					nextText: ")",     
					maxwidth: "", 
					navContainer: "",
					manualControls: "",
					namespace: "rslides",
					before: function(){},
					after: function(){}
	            });
        });
    }
});