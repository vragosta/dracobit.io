var $ = require( 'jquery' );
var Chapters = require( '../collections/chapters' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection = new Chapters();
		this.template = _.template( $( 'script.chapters' ).html() );
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var content = self.template({ 'chapters': self.collection.toJSON() });
			self.$el.html( content );
		});
	}
});
