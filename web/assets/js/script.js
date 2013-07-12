//check if trim() is available if not str replace those vars! YEEHAW!
if(!String.prototype.trim) {
  String.prototype.trim = function () {
    return this.replace(/^\s+|\s+$/g,'');
  };
};

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

function validateForm () {
	var error = 0;
	var email = $('#email').val();

	//make sure fields are empty
	if ($('#firstname').val().trim().length == 0) {
		error++;
	};
	if ($('#lastname').val().trim().length == 0) {
		error++;
	};
	if (email.length == 0) {
		error++;
	};
	if ($('#zipcode').val().trim().length == 0) {
		error++;
	};

	//check email validity
	if( !isValidEmailAddress( email ) ) {
		error++;
	}

	if (error > 0) {
		return false; 
	}

	return true;
};

$('#consultForm').on('submit', function (e) {
	if ( !validateForm() ) {
		e.preventDefault();	
	}
});

$('#newsletterForm').on('submit', function (e) {
	var email = $('#newsletterEmail').val();

	if( !isValidEmailAddress( email ) ) {
		$('#newsletterEmail', $(this)).addClass("error");
		e.preventDefault();
	}
});

// Because of ExactTarget we have to trim before submitting
$('.text').unbind('blur').bind('blur',function(){
    var a = $(this).val().trim();
    $(this).val(a + '.');
    $(this).val(a);
});

// Allow numbers only for zip
// This helps validation
$("#zipcode").keydown(function(event) {
    // Allow: backspace, delete, tab, escape, and enter
    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
         // Allow: Ctrl+A
        (event.keyCode == 65 && event.ctrlKey === true) || 
         // Allow: Command+A
        (event.keyCode == 65 && event.metaKey === true) || 
         // Allow: home, end, left, right
        (event.keyCode >= 35 && event.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    else {
        // Ensure that it is a number and stop the keypress
        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
            event.preventDefault(); 
        }   
    }
});

// Mobile nav
$('.show-nav').click( function (e) {
	$(this).toggleClass('active');
	
	if($(this).hasClass('active')) {
		$('#global-header, #main, #global-footer').animate({left:'50%'}, 250);
		$('#global-nav').animate({
				left: '0'
			}, 250);
	} else {
		$('#global-nav').animate({
				left: '-999em'
			}, 500);
		$('#global-header, #main, #global-footer').animate({left:'0%'}, 250);
	}
	
	// $('#global-nav').toggle();
	e.preventDefault();
})

window.onload = function () {
    
	// $('.howitworks').flexslider({
 //    	directionNav: false
 //    });

    $('.ba-slideshow, .video-slideshow').flexslider({
    	directionNav: false,  
    	slideshow: false
    });

    $('.ba-slider').beforeAfter();

    // Fixes baSlider in Flexslider
	var baHeight = $('.ba-slider:first').height();
	var baWidth = $('.ba-slider:first').width();

	$('.ba-slider, .ba-control').css('height', baHeight);
	$('.ba-slider-before-image').css('width', '50%');
	$('.ba-slider-before-image img').css('width', baWidth);

	if ($('body').hasClass('patients') || $('body').hasClass('gallery') || $('body').hasClass('about')) { // Runs on gallery and patients pages
		var vH = document.documentElement.clientHeight; // Gets viewportHeight
		var bH = $('body').height(); // Gets height of body element
		var p  = (vH - bH); // Calculate difference between viewport and body heights

		if ( p > 0 ) { // If p is a positive number
			$('#global-footer').css({'position' : 'relative', 'top' : p });
			// console.log('Footer fixed.');
		} else { // If p is negative number
			// console.log('position val negative.')
		};
	};

}