var $ = require( 'jquery' );
var Post = require( './views/post' );
var Posts = require( './views/posts' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );
var Chapters = require( './views/chapters' );
var Chapter = require( './views/chapter' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)' : 'archivePosts',
		'blog/:slug(/)' : 'singlePost',
		'tutorial(/)' : 'archiveTutorials',
		'tutorial/:slug(/)' : 'singleTutorial',
		'chapter(/)' : 'archiveChapters',
		'chapter/:slug(/)' : 'singleChapter'
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

		// this.subview = new Chapters({
		// 	el: $( '.dracobit-section-chapter' )
		// });
		// this.subview.render();
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

	archiveChapters: function() {
		this.view = new Chapters({
			el: $( '.dracobit-section' )
		});
		this.view.render();
	},

	singleChapter: function() {
		this.view = new Chapter({
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

});
