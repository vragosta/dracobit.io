var Tutorial_Blob = require( '../models/tutorial-blob' );

module.exports = Backbone.Collection.extend({
	model: Tutorial_Blob,
	page: 1,
	order: 'asc',

	url: function() {
		var query = [];

		if ( this.page ) {
			query.push( 'page=' + this.page );
		}

		query.push( 'filter[order]=' + this.order );

		return Dracobit.options.apiUrl + '/tutorial-blob?' + query.join( '&' );
	}
});
