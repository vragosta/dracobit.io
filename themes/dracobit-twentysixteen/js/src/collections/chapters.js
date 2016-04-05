var Chapter = require( '../models/chapter' );

module.exports = Backbone.Collection.extend({
	model: Chapter,
	page: 1,
	order: 'asc',

	url: function() {
		var query = [];

		if ( this.page ) {
			query.push( 'page=' + this.page );
		}

		query.push( 'filter[order]=' + this.order );

		return Dracobit.options.apiUrl + '/chapter?' + query.join( '&' );
	}
});
