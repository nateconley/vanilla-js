( function() {

	var parallaxLeft = document.querySelector( '.parallax .left' );
	var parallaxRight = document.querySelector( '.parallax .right' );

	window.addEventListener( 'scroll', function() {

		var scroll = window.scrollY;

		if ( scroll % 2 === 0 ) {
			parallaxLeft.style.transform = 'translateY(-' + scroll * 1.1 + 'px)';
			parallaxRight.style.transform = 'translateX(' + scroll * 1.1 + 'px)';
		}
	} );

} )();