var $ = require( 'jquery' );
var Post = require( './views/post' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );

var Router = Backbone.Router.extend({
	routes: {
		'blog/:slug(/)' : 'singlePost',
		'tutorial(/)' : 'archiveTutorial',
		'tutorial/:slug(/)' : 'singleTutorial'
	},

	singlePost: function() {
		this.view = new Post({
			el: $( '.post-section' )
		});
		this.view.render();
	},

	archiveTutorial: function() {
		this.view = new Tutorials({
			el: $( '.tutorial-section' )
		});
		this.view.render();
	},

	singleTutorial: function() {
		this.view = new Tutorial({
			el: $( '.tutorial-section' )
		});
		this.view.render();
	}
});

window.router = new Router();

Backbone.history.start({
	pushState: true
});

$(function() {
	console.log( 'beginning the entire process again' );
});
