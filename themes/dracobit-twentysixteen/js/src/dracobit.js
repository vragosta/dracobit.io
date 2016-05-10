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












	var image_dropzone_1 = new Dropzone( "#sc_dropzone_1", {
		url: Dracobit.options.apiUrl + '/media',
		maxFilesize: 500,
		previewsContainer: '#sc_dropzone_preview_1',
		thumbnailWidth: 400,
		thumbnailHeight: 400,
		autoProcessQueue: false,
		uploadMultiple: false,
		clickable: ['#sc_dropzone_1', '#sc_dropzone_1 i', '#sc_dropzone_1 p', '#sc_dropzone_1_contents'],

		init: function() {
			this.on('addedfile', function( file ) {

			// 	if ( form_type == 'edit' ) {
			// 		$( 'button[name=upload-button]' ).prop( 'disabled', false );
			// 		$( 'button[name=upload-button] ').css( { 'opacity' : '1', 'cursor' : 'pointer' } );
			// 	}
			//
			console.log( file );
				$( '#sc_dropzone_1' ).hide();
				$( '.sc_dropzone_preview[data-id=1]' ).show();
				$( '#remove-buttons' ).show();
			});
			this.on('removedfile', function( file ) {
				$( '#remove-buttons' ).hide();
				$( '.sc_dropzone_preview[data-id=1]' ).hide();
				if ( $( '#sc_dropzone_1').hasClass( 'drag-hover' ) ) {
					$( 'i[data-id=1]' ).css( 'display', 'block' );
					$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
					$( '#sc_dropzone_1' ).removeClass( 'drag-hover' );
				}
				if ( image_dropzone_preview_1.files.length ) {
					$( '#sc_dropzone_preview[data-id=1]' ).show();
				} else {
					$( '#sc_dropzone_1' ).show();
				}
			});
			this.on('dragover', function( e ) {
				if ( $( '#sc_dropzone_preview_1' ).css( 'display' ) === 'none' ) {
					$( 'i[data-id=1]' ).css( 'display', 'none' );
					$( 'p[data-id=1]' ).text( 'Move Photo Here' );
					$( '#sc_dropzone_1' ).addClass( 'drag-hover' );
				}
			});
			this.on('dragleave', function( e ) {
				if ( $( '#sc_dropzone_preview_1' ).css( 'display' ) === 'none' ) {
					$( 'i[data-id=1]' ).css( 'display', 'block' );
					$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
					$( '#sc_dropzone_1' ).removeClass( 'drag-hover' );
				}
			});
		}
	});

	var image_dropzone_preview_1 =  new Dropzone( "#sc_dropzone_preview_1", {
		url: Dracobit.options.apiUrl + '/media',
		maxFilesize: 500,
		previewsContainer: '#sc_dropzone_preview_1',
		thumbnailWidth: 400,
		thumbnailHeight: 400,
		autoProcessQueue: false,
		uploadMultiple: false,
		clickable: false,

		init: function() {
			this.on('addedfile', function( file ) {

			// 	if ( form_type == 'edit' ) {
			// 		$( 'button[name=upload-button]' ).prop( 'disabled', false );
			// 		$( 'button[name=upload-button] ').css( { 'opacity' : '1', 'cursor' : 'pointer' } );
			// 	}
				$( '#sc_dropzone_1' ).hide();
				$( '.sc_dropzone_preview[data-id=1]' ).show();
				$( '#remove-buttons' ).show();
			});
			this.on('removedfile', function( file ) {
				$( '#remove-buttons' ).hide();
				$( '.sc_dropzone_preview[data-id=1]' ).hide();
				if ( $( '#sc_dropzone_1').hasClass( 'drag-hover' ) ) {
					$( 'i[data-id=1]' ).css( 'display', 'block' );
					$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
					$( '#sc_dropzone_1' ).removeClass( 'drag-hover' );
				}
				$( '#sc_dropzone_1' ).show();
			});
			this.on('drop', function(e) {
				if ( $( '#sc_dropzone_preview_1' ).data( 'type' ) == 'edit' ) {
					$( '#sc_dropzone_preview_1 .dz-preview' ).remove();
				} else {
					if ( image_dropzone_1.files.length ) {
						image_dropzone_1.removeAllFiles();
					}

					if ( image_dropzone_preview_1.files.length ) {
						image_dropzone_preview_1.removeAllFiles();
					}
				}
			});
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

			var imageData = new FormData(),
					filename = '',
					interview_image = '';

			// if the image dropzone is populated
			if ( image_dropzone_1.files.length ) {
				imageData.append( 'file', image_dropzone_1.files[0] );
				filename = image_dropzone_1.files[0].name;

			// if the image dropzone is not populated, check if the image dropzone preview is populated
			} else if ( image_dropzone_preview_1.files.length ) {
				imageData.append( 'file', image_dropzone_preview_1.files[0] );
				filename = image_dropzone_preview_1.files[0].name;
			}

			// if filename does not equal null
			if ( filename !== '' ) {
				// THIRD AJAX CALL: hit the media endpoint
				$.ajax({
					url: Dracobit.options.apiUrl  + '/media',
					type: 'post',
					data: imageData,
					headers: {
						'Content-Disposition': 'attachment; filename=' + filename,
						'X-WP-Nonce': Dracobit.options.nonce
					},
					cache: false,
					contentType: false,
					async: false,
					processData: false,
				}).then( function( response ) {
					content.image = response.ID;
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
				});
			} else {
				$( '.upload-message' ).html( 'There was a problem with the submission. Please enter a title.' );
				$( '.upload-message-container' ).show();
			}
		} else {
			$( '.upload-message' ).html( 'There was a problem with the submission. Please enter a title.' );
			$( '.upload-message-container' ).show();
		}
	});
});
