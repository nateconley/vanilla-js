( function() {

	var next = document.querySelector( '.next' );
	var post = document.getElementById( 'post' );

	var offset = 1;

	function getNextPost() {

		var url = '/wp-json/wp/v2/posts';
		url += '?per_page=1';
		url += '&offset=' + offset;

		fetch( url, {
			method: 'get'
		} )
		.then( function( response ) {
			return response.json()
		} )
		.then( function( json ) {
			console.log( json[0] );
			post.innerHTML = `<article>
				<header>
					<h1>${ json[0].title.rendered }</h1>
				</header>
				${ json[0].content.rendered }
			</article>`;
			offset++;
		} )
		.catch( function( error ) {
			console.log( 'Error: ' + error );
		} );

	}

	next.addEventListener( 'click', getNextPost );

} )();