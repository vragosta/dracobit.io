var $ = require( 'jquery' );
var Tutorial = require( './views/tutorial' );
var TutorialsCollection = require( './collections/tutorials' );
var Related = require( './views/related' );

var Router = Backbone.Router.extend({
	routes: {
		'tutorial(/)': 'archiveTutorials',
		'tutorial/:slug(/)': 'singleTutorial'
	},

	archiveTutorials: function() {
		this.view = new Related({
			el: $( '.tutorial-page-container' ),
			collection: new TutorialsCollection(),
			template: _.template( $( 'script.tutorials' ).html() ),
			type: 'tutorials'
		});
		this.view.render();
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
