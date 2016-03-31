var $          = require( 'jquery' );
var Tutorial_Blob   = require( '../models/tutorial-blob' );

module.exports = Backbone.View.extend({
	events: {

	},

	initialize: function() {
		this.model = new Tutorial_Blob({ 'ID': Dracobit.currentPost });
		this.template = _.template( $( 'script.tutorial_blob' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done(function() {
			var content = self.template({ 'tutorial-blob': self.model.toJSON() });
			self.$el.html( content );
		});
	}

});
