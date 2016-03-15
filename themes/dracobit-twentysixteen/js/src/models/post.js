module.exports = Backbone.Model.extend({
	defaults: {
		ID: 0,
		title: '',
		thumbnail: ''
	},

	url: function() {
		return Dracobit.options.apiUrl + '/posts/' + this.get( 'ID' );
	}
});
