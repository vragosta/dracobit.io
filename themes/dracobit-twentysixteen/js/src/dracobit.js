var $ = require( 'jquery' );
var Post = require( './views/post' );
var Posts = require( './views/posts' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)' : 'archivePosts',
		'blog/:slug(/)' : 'singlePost',
		'tutorial(/)' : 'archiveTutorial',
		'tutorial/:slug(/)' : 'singleTutorial'
	},

	archivePosts: function() {
		this.view = new Posts({
			el: $( '.dracobit-section' )
		});
		this.view.render();
	},

	singlePost: function() {
		this.view = new Post({
			el: $( '.dracobit-section' )
		});
		this.view.render();
	},

	archiveTutorial: function() {
		this.view = new Tutorials({
			el: $( '.dracobit-section' )
		});
		this.view.render();
	},

	singleTutorial: function() {
		this.view = new Tutorial({
			el: $( '.dracobit-section' )
		});
		this.view.render();
	}
});

window.router = new Router();

Backbone.history.start({
	pushState: true
});

$(function() {

	console.log( 'testing' );

	// $( '.tutorial-main-content' ).on( 'click', '#tutorial-overview-container', function() {
	$( '.tutorial-anchor-container' ).click(function() {
		console.log( 'clicked' );
		// $name = $( this ).attr( 'name' );
		// console.log( $name );
		// $( '.tutorial-main-container section[id=' + $name + ']' ).show();
	});

});
