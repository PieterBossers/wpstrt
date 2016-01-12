jQuery.noConflict();

jQuery( document ).ready(function( $ ) {
    // You can use the locally-scoped $ in here as an alias to jQuery.
	function smoothAF() {

		var menuOffset = 0;

		$('a[href^=#]:not([href=#])').on( 'click' , function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		        || location.hostname == this.hostname) {

		        var target = $(this.hash);
		        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		           if (target.length) {

		            $('html,body').animate({
		                 scrollTop: target.offset().top - menuOffset
		            }, {
		            	duration: 1000,
		            	easing: "easeInCubic"
		            });

		            return false;
		        }
		    }
		});
	}

	function nav() {
		var trigger = $('.navbar__trigger'),
			overlay = $('.navbar__overlay');

		trigger.on('click', function(e) {
			e.preventDefault();
			/* Act on the event */

			$(this).toggleClass('is-closed')
			$(overlay).toggleClass('is-open')


		});
	}


	function eqHeight() {
		var currentTallest = 0,
			currentRowStart = 0,
			rowDivs = new Array(),
			$el,
			topPosition = 0;

		$( '.block' ).each(function() {

			$el = $(this);
			topPosition = $el.position().top;

			if ( currentRowStart != topPosition ) {

				//we just came to a new row. Set all the heights on the completed row
				for ( currentDiv = 0; currentDiv < rowDivs.length; currentDiv++ ) {
					rowDivs[ currentDiv ].height( currentTallest );
				};

				// Set the fariables for the new row
				rowDivs.length = 0; //empty the array
				currentRowStart = topPosition;
				currentTallest = $el.height();
				rowDivs.push($el);

			} else {

				//another div on the current row. Add it to the list and check if it's taller
				rowDivs.push( $el );
				currentTallest = ( currentTallest < $el.height() ) ? ( $el.height() ) : ( currentTallest );

			}

			// Do the last row
			for ( currentDiv = 0; currentDiv < rowDivs.length; currentDiv++ ) {
				rowDivs[ currentDiv ].height( currentTallest );
			}

		})
	}


	function mobileNav() {
		var	nav = $('.navbar__nav.bootstrapwidgetmenu'),
			modal = $('.mobile__nav');

		if ( $( window ).width() < 767 ) {
			nav.appendTo( modal );
		};
	}


	/*  _____   ____________
	   /  _/ | / /  _/_  __/
	   / //  |/ // /  / /
	 _/ // /|  // /  / /
	/___/_/ |_/___/ /_/
	*/

	function init() {

		smoothAF();
		//nav();
		//mobileNav();

		if ( $( window ).width() > 767 ) {
			
			//eqHeight();

		};
	}

	init();


	var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
	    clearTimeout (timer);
	    timer = setTimeout(callback, ms);
	  };
	})();



	/*  ____  ____  ________  ____  __________   ________   ____  ___________ _________   ______
	   / __ \/ __ \/ ____/ / / /  |/  / ____/ | / /_  __/  / __ \/ ____/ ___//  _/__  /  / ____/
	  / / / / / / / /   / / / / /|_/ / __/ /  |/ / / /    / /_/ / __/  \__ \ / /   / /  / __/   
	 / /_/ / /_/ / /___/ /_/ / /  / / /___/ /|  / / /  _ / _, _/ /___ ___/ // /   / /__/ /___   
	/_____/\____/\____/\____/_/  /_/_____/_/ |_/ /_/  (_)_/ |_/_____//____/___/  /____/_____/   
	*/                                                                                     

	$( window ).resize(function(  ) {

		if ( $( window ).width() > 767 ) {

			delay(function(){

				eqHeight();
				mobileNav();

		    }, 500);

	    };

	});

});





