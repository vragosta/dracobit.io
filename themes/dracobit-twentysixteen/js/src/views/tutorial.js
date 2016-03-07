var $ = require( 'jquery' );
var Story = require( '../models/story' );

module.exports = Backbone.View.extend({
	initialize: function() {
		this.model = new Story({
			'ID': StoryCorps.currentPost
		});
		this.template = _.template( $( 'script.tutorial' ).html() );
	},

	render: function() {
		var self = this;

		this.model.fetch().done( function() {
			var content        = self.template({
					'tutorial': self.model.toJSON()
				}),
				singlePost     = self.$el.html( content );
		} );
	}
});
