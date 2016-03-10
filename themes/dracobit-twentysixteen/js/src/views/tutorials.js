var $ = require( 'jquery' );
var Tutorials = require( '../collections/tutorials' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection = new Tutorials();
		this.template = _.template( $( 'script.tutorials' ).html() );
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var content = self.template({ 'tutorials': self.collection.toJSON() });
			self.$el.html( content );
		});
	}
});
