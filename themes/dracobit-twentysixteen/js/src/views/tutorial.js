var $          = require( 'jquery' );
var Tutorial   = require( '../models/tutorial' );
var Chapter    = require( '../models/chapter' );

module.exports = Backbone.View.extend({
	events: {
		'click a' : 'getChapter'
	},

	initialize: function() {
		this.model = new Tutorial({ 'ID': Dracobit.currentPost });
		this.template = _.template( $( 'script.tutorial' ).html() );
	},

	render: function() {
		var self = this;
		this.model.fetch().done(function() {
			var content = self.template({ 'tutorial': self.model.toJSON() });
			self.$el.html( content );
		});
	},

	getChapter: function( e ) {
		var self = this;
		chapter = new Chapter({ 'ID': e.currentTarget.dataset.chapterId });
		chapter.fetch().done(function( e ) {
			self.$el = $( '.dracobit-section-chapter' );
			self.$el.html( e.content );
		});
	}
});
