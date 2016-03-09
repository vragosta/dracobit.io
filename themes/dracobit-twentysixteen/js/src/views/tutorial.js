var $ = require( 'jquery' );
var Tutorial = require( '../models/tutorial' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.model = new Tutorial({
			'ID': Dracobit.currentPost
		});
		this.template = _.template( $( 'script.tutorial' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done( function() {
			var content       = self.template({ 'tutorial': self.model.toJSON() }),
					self.$el.html( content );
		} );
	}
});
