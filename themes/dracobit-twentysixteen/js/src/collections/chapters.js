var Chapter = require( '../models/chapter' );

module.exports = Backbone.Collection.extend({
	model: Chapter,
	id: 1,
	page: 1,
	order: 'asc',

	url: function() {
		var query = [];

		if ( this.id ) {
			query.push( 'filter[author]=' + this.id );
		}

		if ( this.page ) {
			query.push( 'filter[page]=' + this.page );
		}

		query.push( 'filter[order]=' + this.order );

		return Dracobit.options.apiUrl + '/chapter?' + query.join( '&' );
	}
});
