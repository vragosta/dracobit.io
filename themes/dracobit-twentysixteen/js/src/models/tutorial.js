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
		console.log( 'ID: ' + this.get( 'ID' ) );
		return Dracobit.options.apiUrl + '/tutorial/' + this.get( 'ID' );
	}
});
