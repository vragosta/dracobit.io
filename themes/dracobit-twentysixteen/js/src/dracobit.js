var $                   = require( 'jquery' );
var Post                = require( './views/post' );
var PostsCollection     = require( './collections/posts' );
var Tutorial            = require( './views/tutorial' );
var TutorialsCollection = require( './collections/tutorials' );
var Related             = require( './views/related' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)'              : 'archivePosts',
		'blog/:slug(/)'        : 'singlePost',
		'tutorial(/)'          : 'archiveTutorials',
		'tutorial/:slug(/)'    : 'singleTutorial'
	},

	archivePosts: function() {
		this.view = new Post({
			el: $( '#main' )
		});
		this.view.render();
	},

	archiveTutorials: function() {
		this.view = new Related({
			el: $( '.dracobit-section' ),
			collection: new TutorialsCollection(),
			template: _.template( $( 'script.tutorials' ).html() ),
			type: 'tutorials'
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

});
