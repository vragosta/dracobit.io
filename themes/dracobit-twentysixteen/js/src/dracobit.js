var $ = require( 'jquery' );
var Tutorial = require( './views/tutorial' );
var TutorialsCollection = require( './collections/tutorials' );

var Router = Backbone.Router.extend({
	routes: {
		'tutorial/:slug(/)': 'singleTutorial'
	},

	singleTutorial: function() {
		this.view = new Tutorial({
			el: $( '#tutorial' )
		});
		this.view.render();
	}

});

window.router = new Router();
window.navigation = new Navigation({
	el: $( '#navigation' )
});

Backbone.history.start({
	pushState: true
});

$(function() {

});
