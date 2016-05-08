var $ = require( 'jquery' );
var Post = require( './views/post' );
var Posts = require( './views/posts' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );
var Chapters = require( './views/chapters' );
var Chapter = require( './views/chapter' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)': 'archivePosts',
		'blog/:slug(/)': 'singlePost',
		'tutorial(/)': 'archiveTutorials',
		'tutorial/:slug(/)': 'singleTutorial',
		'chapter(/)': 'archiveChapters',
		'chapter/:slug(/)': 'singleChapter',
		// 'profile(/)': 'archiveChapters',
		// ':slug(/)': 'singlePost'
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
	$( 'ul.nav li' ).click(function() {
		if ( ! $( this ).hasClass( 'active' ) ) {
			$( 'ul.nav li' ).removeClass( 'active' );
			$( this ).addClass( 'active' );
		}
	});

	$( '.upload-submit' ).click(function() {
		chapter_title = $( '.upload-chapter-title' ).val();
		chapter_content = $( '.upload-chapter-content' ).val();
		chapter_tagline = $( '.upload-chapter-tagline' ).val();
		chapter_version = $( '.upload-chapter-version' ).val();

		if ( chapter_title ) {
			content = {
				title : chapter_title,
				content_raw: chapter_content,
				tagline: chapter_tagline,
				version: chapter_version
			};

			console.log( content );

			$.ajax({
				type: 'post',
				url: Dracobit.options.apiUrl + '/chapter',
				headers: {
					'X-WP-Nonce': Dracobit.options.nonce
				},
				data: content
			}).then( function( response ) {
				console.log( response );
			});
		} else {
			$( '.upload-message' ).html( 'There was a problem with the submission. Please enter a title.' );
			$( '.upload-message-container' ).show();
		}

	});

});
