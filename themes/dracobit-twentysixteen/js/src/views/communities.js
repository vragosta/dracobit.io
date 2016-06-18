var $ = require( 'jquery' );
var Communities = require( '../collections/communities' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection = new Communities();
		this.template = _.template( $( 'script.communities' ).html() );
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var content = self.template({ 'communities': self.collection.toJSON() });
			self.$el.html( content );
		});
	}
});
