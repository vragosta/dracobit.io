$(function() {

	$( 'a.list-group-item' ).click(function() {
		$name = $( this ).attr( 'name' );

		if ( 'linux-for-beginners' == $name ) {
			$( '#tutorials-css-for-beginners-container' ).hide();
			$( '#tutorials-linux-for-beginners-container' ).show();
		} else if ( 'css-for-beginners' == $name ) {
			$( '#tutorials-linux-for-beginners-container' ).hide();
			$( '#tutorials-css-for-beginners-container' ).show();
		}
	});

});
