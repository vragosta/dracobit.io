var Tutorial      = require( '../models/tutorial' );

module.exports = Backbone.Collection.extend({
	model: Tutorial,
	page: 1,
	order: 'asc',

	url: function() {
		var query = [];

		if ( this.page ) {
			query.push( 'page=' + this.page );
		}

		query.push( 'filter[order]=' + this.order.toUpperCase() );

		return Dracobit.options.apiUrl + '/tutorial?' + query.join( '&' );
	}
});
