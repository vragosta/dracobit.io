$(function() {

	$( 'a.list-group-item' ).click(function() {
		$name = $( this ).attr( 'name' );

		if ( 'linux-for-beginners' == $name ) {
			$( '#tutorials-css-container' ).hide();
			$( '#tutorials-linux-for-beginners-container' ).show();
		} else if ( 'css' == $name ) {
			$( '#tutorials-linux-for-beginners-container' ).hide();
			$( '#tutorials-css-container' ).show();
		}
	});

});
