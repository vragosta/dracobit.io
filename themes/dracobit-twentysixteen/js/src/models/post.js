module.exports = Backbone.Model.extend({
	defaults: {
		ID: 0,
		title: '',
		thumbnail: '',
		content: ''
	},

	url: function() {
		console.log( 'ID: ' + this.get( 'ID' ) );
		return Dracobit.options.apiUrl + '/posts/' + this.get( 'ID' );
	}
});
