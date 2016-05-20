<script class="chapter" type="html/template">
	<section class="chapter-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="chapter-content">
					<%= ( chapter.content ) ? chapter.content : '' %>
					<%= ( chapter.photo ) ? chapter.photo : '' %>
				</div>
			</div>
		</div>
	</section>
</script>

<script class="chapters" type="html/template">
	<% _.each( chapters, function( chapter ) { %>
		<div class="list-group">
			<a href="/chapter/<%= chapter.slug %>" class="list-group-item archive-item" name="<%= chapter.slug %>">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<h4 class="list-group-item-heading">
							<% if ( chapter.title ) { %>
								<%= chapter.title %>
							<% } else { %>
								<%= 'Enter title here' %>
							<% } %>
						</h4>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p class="list-group-item-text chapter-version">
							<% if ( chapter.version ) { %>
								<%= 'v' + chapter.version %>
							<% } %>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<p class="list-group-item-text chapter-tagline">
							<% if ( chapter.tagline ) { %>
								<%= chapter.tagline %>
							<% } else { %>
								<%= 'Enter tagline here.' %>
							<% } %>
						</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="list-group-item-text chapter-type">

								</p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
