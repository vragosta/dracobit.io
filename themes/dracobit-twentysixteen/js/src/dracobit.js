var $ = require( 'jquery' );
var Post = require( './views/post' );
var Posts = require( './views/posts' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );
var Tutorial_Blobs = require( './views/tutorial-blobs' );
var Tutorial_Blob = require( './views/tutorial-blob' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)' : 'archivePosts',
		'blog/:slug(/)' : 'singlePost',
		'tutorial(/)' : 'archiveTutorials',
		'tutorial/:slug(/)' : 'singleTutorial',
		'tutorial-blob(/)' : 'archiveTutorialBlobs',
		'tutorial-blob/:slug(/)' : 'singleTutorialBlob'
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

	archiveTutorials: function() {
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
	},

	archiveTutorialBlobs: function() {
		this.view = new Tutorial_Blobs({
			el: $( '.dracobit-section-blob' )
		});
		this.view.render();
	},

	singleTutorialBlob: function() {
		this.view = new Tutorial_Blob({
			el: $( '.dracobit-section-blob' )
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
