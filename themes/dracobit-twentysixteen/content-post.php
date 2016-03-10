<script class="post" type="html/template">
	<section id="post-content" class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="post-container">
				<%= post.content %>
			</div>
		</div>
	</section>
</script>

<!-- <script class="posts" type="html/template">
	<% _.each( posts, function( post ) { %>
		<div class="list-group">
			<a href="/<%= post.slug %>" class="list-group-item" name="<%= post.slug %>">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h4 class="list-group-item-heading">
							<% if ( post.title ) { %>
								<%= post.title %>
							<% } else { %>
								<%= 'Post Title' %>
							<% } %>
						</h4>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script> -->
