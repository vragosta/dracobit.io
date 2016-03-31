var $ = require( 'jquery' );
var Tutorial_Blobs = require( '../collections/tutorial-blobs' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection = new Tutorial_Blobs();
		this.template = _.template( $( 'script.tutorial_blobs' ).html() );
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var content = self.template({ 'tutorial-blobs': self.collection.toJSON() });
			self.$el.html( content );
		});
	}
});
