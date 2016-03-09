var Post       = require( '../models/post' );

module.exports = Backbone.Collection.extend({
	model: Post,

	category: null,

	post_tag: null,

	page: 1,

	order: 'desc',

	url: function() {
		var query = [];

		if ( this.page ) {
			query.push( 'page=' + this.page );
		}

		if ( this.category ) {
			query.push( 'filter[taxonomy]=category' );
			query.push( 'filter[term]=' + this.category );
		}

		if ( this.post_tag ) {
			query.push( 'filter[taxonomy]=post_tag' );
			query.push( 'filter[term]=' + this.post_tag );
		}

		query.push( 'order=' + this.order );

		return StoryCorps.options.apiUrl + '/posts?' + query.join( '&' );
	}
});
