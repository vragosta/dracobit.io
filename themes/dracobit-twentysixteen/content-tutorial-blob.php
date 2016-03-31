<script class="tutorial_blob" type="html/template">
	<section class="tutorial-blob-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tutorial-blob-title">
					<legend>
						<%= ( tutorial_blob.title ) ? tutorial_blob.title : '' %>
					</legend>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tutorial-blob-content">
					<%= ( tutorial_blob.content ) ? tutorial_blob.content : '' %>
				</div>
			</div>
		</div>
	</section>
</script>

<script class="tutorial_blobs" type="html/template">
	<% _.each( tutorial_blobs, function( tutorial_blob ) { %>
		<div class="list-group">
			<a href="/tutorial-blob/<%= tutorial_blob.slug %>" class="list-group-item archive-item" name="<%= tutorial_blob.slug %>">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<h4 class="list-group-item-heading">
							<% if ( tutorial_blob.title ) { %>
								<%= tutorial_blob.title %>
							<% } else { %>
								<%= 'Tutorial Title' %>
							<% } %>
						</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 tutorial-blob-likes-container">
								<i class="fa fa-gratipay"></i>
								<p class="list-group-item-text tutorial-blob-likes">
									<%= Math.floor((Math.random() * 100) + 1) %>
								</p>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<p class="list-group-item-text tutorial-type">
									<%= tutorial.type.toUpperCase() %>
								</p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
