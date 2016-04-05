<script class="chapter" type="html/template">
	<section class="chapter-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="chapter-title">
					<legend><%= ( chapter.title ) ? chapter.title : '' %></legend>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="chapter-content">
					<%= ( chapter.content ) ? chapter.content : '' %>
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
								<%= 'Chapter Title' %>
							<% } %>
						</h4>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
