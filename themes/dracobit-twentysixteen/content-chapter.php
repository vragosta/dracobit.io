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
				<div class="row list-group-item archive-item" style="height: 100%; border: 1px solid #ddd; margin: 0;">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="height: 100%;">
						<img src="<%= chapter.photo %>" style="width: 100%; height: 100%;" />
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
						<div class="row chapter-top-row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-title" style="display: flex; justify-content: flex-start; font-size: 20px;">
										<a href="/chapter/<%= ( chapter.slug ) ? chapter.slug : '' %>" title="<%= ( chapter.title ) ? chapter.title : '' %>" style="color: #bf3939;"><%= ( chapter.title ) ? chapter.title : '' %></a>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-version" style="display: flex; justify-content: flex-end; font-size: 20px; font-weight: 100;">
										<a href="#" style="color: #333; text-decoration: none; font-size: 16px; display: flex; align-items: center;">Edit</a>
										<a href="#" style="color: #333;"><%= ( chapter.version ) ? 'v' + chapter.version : '' %></a>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<%= chapter.author.first_name + ' ' + chapter.author.last_name  + ' | ' + chapter.date %>
									</div>
								</div>
							</div>
						</div>

						<div class="row chapter-center-row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-tagline" style="font-weight: 500; font-size: 14px;">
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
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chapter-keywords" style="display: flex; justify-content: flex-start; align-items: center;">
										<% if ( chapter.terms.keywords ) {
											_.each( chapter.terms.keywords, function( keyword ) { %>
												<span class="badge"><a href="<%= keyword.link %>" value="<%= keyword.ID %>" style="color: #fff; font-weight: 400;"><%= keyword.name %></a></span><%
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
