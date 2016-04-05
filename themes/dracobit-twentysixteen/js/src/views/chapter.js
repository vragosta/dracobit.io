var $       = require( 'jquery' );
var Chapter = require( '../models/chapter' );

module.exports = Backbone.View.extend({
	events: {

	},

	initialize: function() {
		this.model = new Chapter({ 'ID': Dracobit.currentPost });
		this.template = _.template( $( 'script.chapter' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done(function() {
			var content = self.template({ 'chapter': self.model.toJSON() });
			self.$el.html( content );
		});
	}

});
