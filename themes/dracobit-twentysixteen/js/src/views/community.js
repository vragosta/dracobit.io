var $         = require( 'jquery' );
var Community = require( '../models/community' );

module.exports = Backbone.View.extend({
	events: {

	},

	initialize: function() {
		this.model = new Community({ 'ID': Dracobit.currentPost });
		this.template = _.template( $( 'script.community' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done(function() {
			var content = self.template({ 'community': self.model.toJSON() });
			self.$el.html( content );
		});
	}

});
