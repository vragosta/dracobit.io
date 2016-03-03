$(function() {

	$( 'a.list-group-item' ).click(function() {
		$name = $( this ).attr( 'name' );
		$container = $( '#tutorials-' + $name + '-container' );

		$container.siblings().css( 'display', 'none' );
		$container.show();

	});
});
