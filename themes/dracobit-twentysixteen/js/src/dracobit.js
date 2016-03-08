var $ = require( 'jquery' );
var Tutorial = require( './views/tutorial' );
var TutorialsCollection = require( './collections/tutorials' );

var Router = Backbone.Router.extend({
	routes: {
		'tutorial/:slug(/)': 'singleTutorial'
	},

	singleTutorial: function() {
		this.view = new Tutorial({
			el: $( '.tutorial-page-container' )
		});
		this.view.render();
	}

});

window.router = new Router();

Backbone.history.start({
	pushState: true
});

$(function() {

});
