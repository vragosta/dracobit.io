<script class="tutorial" type="html/template">
	<section class="tutorial-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tutorial-title">
					<legend>
						<%= ( tutorial.title ) ? tutorial.title : '' %>
						<span class="tutorial-version"><%= ( tutorial.version ) ? 'v' + tutorial.version : 'v1.0' %></span>
					</legend>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tutorial-tagline">
					<%= ( tutorial.tagline ) ? tutorial.tagline : '' %>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tutorial-content">
					<%= ( tutorial.content ) ? tutorial.content : '' %>
				</div>
			</div>
		</div>
	</section>
</script>

<script class="tutorials" type="html/template">
	<% _.each( tutorials, function( tutorial ) { %>
		<div class="list-group">
			<a href="/tutorial/<%= tutorial.slug %>" class="list-group-item archive-item" name="<%= tutorial.slug %>">
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
						<p class="tutorial-version">
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
