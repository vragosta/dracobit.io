var $          = require( 'jquery' );
var Post       = require( '../models/post' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.model = new Post({ 'ID': Dracobit.currentPost });
		this.template = _.template( $( 'script.post' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done(function() {
			var content = self.template({ 'post': self.model.toJSON() });
			self.$el.html( content );
		});
	}
});
