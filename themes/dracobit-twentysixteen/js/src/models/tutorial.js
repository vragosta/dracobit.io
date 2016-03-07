module.exports = Backbone.Model.extend({
	defaults: {
		ID: 0,
		title: '',
		thumbnail: '',
		content: '',
		tagline: '',
		version: ''
	},

	url: function() {
		return Dracobit.options.apiUrl + '/tutorial/' + this.get( 'ID' );
	}
});
