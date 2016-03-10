var Post = require( '../models/post' );

module.exports = Backbone.Collection.extend({
	model: Post,
	page: 1,
	order: 'asc',

	url: function() {
		var query = [];

		if ( this.page ) {
			query.push( 'page=' + this.page );
		}

		query.push( 'filter[order]=' + this.order );

		return Dracobit.options.apiUrl + '/posts?' + query.join( '&' );
	}
});
