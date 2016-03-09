var $        = require( 'jquery' );
var Posts    = require( '../collections/posts' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection   = new Posts();
		this.collectionEl = $( '.post-section' );
		this.template     = _.template( $( 'script.posts' ).html() );
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var content = self.template({ 'posts': self.collection.toJSON() });
			self.collectionEl.html( content );
		});
	}
});
