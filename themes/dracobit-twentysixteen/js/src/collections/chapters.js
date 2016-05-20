var Chapter = require( '../models/chapter' );

module.exports = Backbone.Collection.extend({
	model: Chapter,
	id: '',
	page: '',
	order: 'desc',

	url: function() {
		var query = [];

		if ( this.id ) {
			query.push( 'filter[author]=' + this.id );
		}

		if ( this.page ) {
			query.push( 'filter[page]=' + this.page );
		}

		if ( this.order ) {
			query.push( 'filter[order]=' + this.order );
		}

		return Dracobit.options.apiUrl + '/chapter?' + query.join( '&' );
	}
});
