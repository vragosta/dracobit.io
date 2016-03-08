var $ = require( 'jquery' );

module.exports = Backbone.View.extend({
	initialize: function( options ) {
		this.collectionEl = $( '.tutorial-page-container' );
		this.options = options;
	},

	render: function() {
		var self = this;

		this.collection.fetch().done(function( collection, response, options ) {
			var args = {};
			args[self.options.type] = self.collection.toJSON();
			var content = self.options.template(args);
			self.collectionEl.html( content );
		});
	},

	more: function() {
		var self = this;

		this.collection.page++;

		this.collection.fetch().done(function( collection, response, options ) {
			var args = {};
			args[self.options.type] = self.collection.toJSON();
			var content = self.options.template(args);
			self.collectionEl.append( content );
		});
	}
});
