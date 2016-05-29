var $ = require( 'jquery' );
var Post = require( './views/post' );
var Posts = require( './views/posts' );
var Tutorials = require( './views/tutorials' );
var Tutorial = require( './views/tutorial' );
var Chapters = require( './views/chapters' );
var Chapter = require( './views/chapter' );
var ChapterCollection = require( './collections/chapters' );

var Router = Backbone.Router.extend({
	routes: {
		'blog(/)': 'archivePosts',
		'blog/:slug(/)': 'singlePost',
		'tutorial(/)': 'archiveTutorials',
		'tutorial/:slug(/)': 'singleTutorial',
		'chapter(/)': 'archiveChapters',
		'chapter/:slug(/)': 'singleChapter',
		'profile(/)': 'profile',
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
	},

	profile: function() {
		this.view = new Chapters({
			el: $( '.dracobit-section' ),
		});
		this.view.collection.id = $( 'input[name=current-user-id]' ).val();
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

	if ( $( '.upload-section-container' ).length ) {
		var image_dropzone_1 = new Dropzone( "#dracobit_dropzone_1", {
			url: Dracobit.options.apiUrl + '/media',
			maxFilesize: 500,
			previewsContainer: '#dracobit_dropzone_preview_1',
			thumbnailWidth: 400,
			thumbnailHeight: 400,
			autoProcessQueue: false,
			uploadMultiple: false,
			clickable: ['#dracobit_dropzone_1', '#dracobit_dropzone_1 i', '#dracobit_dropzone_1 p', '#dracobit_dropzone_1_contents'],

			init: function() {
				this.on('addedfile', function( file ) {
					$( '#dracobit_dropzone_1' ).hide();
					$( '.dracobit_dropzone_preview[data-id=1]' ).show();
					$( '#remove-buttons' ).show();
				});
				this.on('removedfile', function( file ) {
					$( '#remove-buttons' ).hide();
					$( '.dracobit_dropzone_preview[data-id=1]' ).hide();
					if ( $( '#dracobit_dropzone_1').hasClass( 'drag-hover' ) ) {
						$( 'i[data-id=1]' ).css( 'display', 'block' );
						$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
						$( '#dracobit_dropzone_1' ).removeClass( 'drag-hover' );
					}
					if ( image_dropzone_preview_1.files.length ) {
						$( '#dracobit_dropzone_preview[data-id=1]' ).show();
					} else {
						$( '#dracobit_dropzone_1' ).show();
					}
				});
				this.on('dragover', function( e ) {
					if ( $( '#dracobit_dropzone_preview_1' ).css( 'display' ) === 'none' ) {
						$( 'i[data-id=1]' ).css( 'display', 'none' );
						$( 'p[data-id=1]' ).text( 'Move Photo Here' );
						$( '#dracobit_dropzone_1' ).addClass( 'drag-hover' );
					}
				});
				this.on('dragleave', function( e ) {
					if ( $( '#dracobit_dropzone_preview_1' ).css( 'display' ) === 'none' ) {
						$( 'i[data-id=1]' ).css( 'display', 'block' );
						$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
						$( '#dracobit_dropzone_1' ).removeClass( 'drag-hover' );
					}
				});
			}
		});

		var image_dropzone_preview_1 =  new Dropzone( "#dracobit_dropzone_preview_1", {
			url: Dracobit.options.apiUrl + '/media',
			maxFilesize: 500,
			previewsContainer: '#dracobit_dropzone_preview_1',
			thumbnailWidth: 400,
			thumbnailHeight: 400,
			autoProcessQueue: false,
			uploadMultiple: false,
			clickable: false,

			init: function() {
				this.on('addedfile', function( file ) {
					$( '#dracobit_dropzone_1' ).hide();
					$( '.dracobit_dropzone_preview[data-id=1]' ).show();
					$( '#remove-buttons' ).show();
				});
				this.on('removedfile', function( file ) {
					$( '#remove-buttons' ).hide();
					$( '.dracobit_dropzone_preview[data-id=1]' ).hide();
					if ( $( '#dracobit_dropzone_1').hasClass( 'drag-hover' ) ) {
						$( 'i[data-id=1]' ).css( 'display', 'block' );
						$( 'p[data-id=1]' ).text( 'Add a Primary Photo' );
						$( '#dracobit_dropzone_1' ).removeClass( 'drag-hover' );
					}
					$( '#dracobit_dropzone_1' ).show();
				});
				this.on('drop', function(e) {
					if ( $( '#dracobit_dropzone_preview_1' ).data( 'type' ) == 'edit' ) {
						$( '#dracobit_dropzone_preview_1 .dz-preview' ).remove();
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

			$( window ).scrollTop( 0 );
			$( '.upload-form' ).hide();
			$( '.upload-message-container' ).show();

			var chapter_title             = $( '.upload-chapter-title' ).val(),
			    chapter_content           = $( '.upload-chapter-content' ).val(),
			    chapter_tagline           = $( '.upload-chapter-tagline' ).val(),
			    chapter_version           = $( '.upload-chapter-version' ).val(),
			    chapter_tutorial          = $( 'select[name=upload-chapter-tutorial] option:selected' ).val(),
			    chapter_short_description = $( '.upload-chapter-short-description' ).val(),
					chapter_keywords          = $( '.upload-chapter-keywords' ).val(),
					chapter_type              = $( '.upload-form' ).data( 'type' );


			// if ( chapter_type == 'create' ) {
				if ( chapter_title ) {
					chapter_keywords = chapter_keywords.split( ',' ).map( function( str ) {
						return str.trim();
					});

					content = {
						title : chapter_title,
						content_raw: chapter_content,
						tagline: chapter_tagline,
						version: chapter_version,
						tutorial: chapter_tutorial,
						short_description: chapter_short_description,
						keywords: chapter_keywords
					};

					var imageData = new FormData(),
							filename = '';

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
							$( '.progress-bar-striped' ).css( 'width', '50%' );
							content.image = response.ID;
							$.ajax({
								type: 'post',
								url: Dracobit.options.apiUrl + '/chapter',
								headers: {
									'X-WP-Nonce': Dracobit.options.nonce
								},
								data: content
							}).then( function( response ) {
								$( '.progress-bar-striped' ).css( 'width', '100%' );
								window.location.replace( '/profile' );
							});
						});
					} else {
						$( '.upload-message' ).html( 'There was a problem with the submission. Please enter a title.' );
						$( '.upload-message-container' ).show();
					}
				} else {
					$( '.upload-message' ).html( 'There was a problem with the submission. <span style="font-weight: 500; color: #d9534f;">Please enter a title.</span>' );
					$( '.progress-bar-striped' ).css({
						'width':'50%',
						'background-color':'#d9534f'
					});
					$( '.upload-message-container' ).show();
					$( '.upload-form' ).show();
				}
			// } else if ( chapter_type == 'edit' ) {
			// 	content = {
			// 		title: chapter_title,
			// 		content_raw: chapter_content,
			// 		tagline: chapter_tagline,
			// 		version: chapter_version,
			// 		tutorial: chapter_tutorial,
			// 		short_description: chapter_short_description,
			// 		keywords: chapter_keywords
			// 	};
			//
			// 	console.log( content );
			//
			// 	var imageData = new FormData(),
			// 			filename = '';
			//
			// 	// if the image dropzone is populated
			// 	if ( image_dropzone_1.files.length ) {
			// 		imageData.append( 'file', image_dropzone_1.files[0] );
			// 		filename = image_dropzone_1.files[0].name;
			//
			// 	// if the image dropzone is not populated, check if the image dropzone preview is populated
			// 	} else if ( image_dropzone_preview_1.files.length ) {
			// 		imageData.append( 'file', image_dropzone_preview_1.files[0] );
			// 		filename = image_dropzone_preview_1.files[0].name;
			// 	}
			//
			// 	// if filename does not equal null
			// 	if ( filename !== '' ) {
			// 		$.ajax({
			// 			url: Dracobit.options.apiUrl  + '/media',
			// 			type: 'post',
			// 			data: imageData,
			// 			headers: {
			// 				'Content-Disposition': 'attachment; filename=' + filename,
			// 				'X-WP-Nonce': Dracobit.options.nonce
			// 			},
			// 			cache: false,
			// 			contentType: false,
			// 			async: false,
			// 			processData: false,
			// 		}).then( function( response ) {
			// 			$( '.progress-bar-striped' ).css( 'width', '50%' );
			// 			content.image = response.ID;
			//
			// 			$.ajax({
			// 				type: 'post',
			// 				url: Dracobit.options.apiUrl + '/chapter',
			// 				headers: {
			// 					'X-WP-Nonce': Dracobit.options.nonce
			// 				},
			// 				data: content
			// 			}).then( function( response ) {
			// 				$( '.progress-bar-striped' ).css( 'width', '100%' );
			// 				window.location.replace( '/profile' );
			// 			});
			// 		});
			// 	}
			// }
		});
	}

	$( '#remove-buttons' ).on('click', '.dracobit_dropzone_delete', function() {
		$data = $( this ).data( 'type' );

		if ( $data == 'edit' ) {
			$( '#dracobit_dropzone_preview_1 .dz-image-preview' ).remove();
			$( '#edit-image' ).attr( 'src', '' );
			$( '#dracobit_dropzone_preview_1' ).hide();
			$( '#dracobit_dropzone_1' ).show();
		} else {
			if ( image_dropzone_1.files.length ) {
				$dropzone = image_dropzone_1;
				console.log( $dropzone );
			} else if ( image_dropzone_preview_1 ){
				$dropzone = image_dropzone_preview_1;
				console.log( $dropzone );
			} else {
				alert('there is no image to delete');
			}

			$( '#dracobit_dropzone_preview_1 .dz-image-preview' ).remove();
			$( '#edit-image' ).attr( 'src', '' );
			$( '#dracobit_dropzone_preview_1' ).hide();
			$( '#dracobit_dropzone_1' ).show();
			$dropzone.removeAllFiles();
		}
	});
});
