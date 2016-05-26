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
		<div class="list-group" style="height: 250px;">
				<div class="row list-group-item archive-item">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-photo">
						<img src="<%= chapter.photo %>" />
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-content">
						<div class="row chapter-top-row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-title">
										<a href="/chapter/<%= ( chapter.slug ) ? chapter.slug : '' %>" title="<%= ( chapter.title ) ? chapter.title : '' %>"><%= ( chapter.title ) ? chapter.title : '' %></a>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-version-container">
										<a href="/edit-form?id=<%= chapter.ID %>" class="chapter-edit-button">Edit</a>
										<a href="#" class="chapter-version"><%= ( chapter.version ) ? 'v' + chapter.version : '' %></a>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<a href="/user/<%= chapter.author.slug %>" class="chapter-author"><%= chapter.author.first_name + ' ' + chapter.author.last_name %></a><%= ' | ' + chapter.date %>
									</div>
								</div>
							</div>
						</div>

						<div class="row chapter-center-row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-tagline">
										<%= ( chapter.tagline ) ? chapter.tagline : '' %>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-short-description">
										<%= ( chapter.short_description ) ? chapter.short_description : '' %>
									</div>
								</div>
							</div>
						</div>

						<div class="row chapter-bottom-row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-keywords-container">
										<% if ( chapter.terms.keywords ) {
											_.each( chapter.terms.keywords, function( keyword ) { %>
												<span class="badge"><a href="<%= keyword.link %>" class="chapter-keyword" value="<%= keyword.ID %>"><%= keyword.name %></a></span><%
											} );
										} %>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	<% } ); %>
</script>
