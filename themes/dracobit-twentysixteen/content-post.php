<script class="post" type="html/template">
	<section id="single-container" class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="single-title">
				<%= ( post.title ) ? post.title : '' %>
			</div>
			<div class="single-content">
				<%= ( post.content ) ? post.content : '' %>
			</div>
		</div>
	</section>
</script>

<script class="posts" type="html/template">
	<% _.each( posts, function( post ) { %>
		<div class="list-group">
			<a href="/blog/<%= post.slug %>" class="list-group-item archive-item" name="<%= post.slug %>">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h4 class="list-group-item-heading archive-item-title">
							<%= ( post.title ) ? post.title : '' %>
						</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="archive-item-date">
							<% date = moment( post.date ) %>
							<%= date.format( 'dddd, MMMM Do YYYY, h:mm a' ) %>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="archive-item-content">
							<%= ( post.content ) ? post.content : '' %>
						</p>
					</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
