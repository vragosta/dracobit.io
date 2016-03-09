<script class="tutorial" type="html/template">
<section id="tutorial-content" class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="tutorial-<%= tutorial.slug %>-container" class="tutorial-container">
			<%= tutorial.content %>
		</div>
	</div>
</section>
</script>

<script class="tutorials" type="html/template">
	<% _.each( tutorials, function( tutorial ) { %>
		<div class="list-group">
			<a href="/<%= tutorial.slug %>" class="list-group-item" name="<%= tutorial.slug %>">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						<h4 class="list-group-item-heading">
							<% if ( tutorial.title ) { %>
								<%= tutorial.title %>
							<% } else { %>
								<%= 'Tutorial Title' %>
							<% } %>
						</h4>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p id="tutorial-version">
							<% if ( tutorial.version ) { %>
								<%= 'v' + tutorial.version %>
							<% } else { %>
								<%= 'v1.0' %>
							<% } %>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="list-group-item-text">
							<% if ( tutorial.tagline ) { %>
								<%= tutorial.tagline %>
							<% } else { %>
								<%= 'Enter tagline here.' %>
							<% } %>
						</p>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
