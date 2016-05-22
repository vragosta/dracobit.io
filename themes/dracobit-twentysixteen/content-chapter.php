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
			<a href="/chapter/<%= chapter.slug %>" class="list-group-item archive-item" name="<%= chapter.slug %>" style="height: 100%;">
				<div class="row" style="height: 100%;">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="height: 100%;">
					<img src="<%= chapter.photo %>" style="width: 100%; height: 100%;" />
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">

					<div class="row chapter-top-row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter-title" style="display: flex; justify-content: flex-start; font-size: 20px; color: #bf3939;">
									<%= ( chapter.title ) ? chapter.title : '' %>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 chapter-version" style="display: flex; justify-content: flex-end; font-size: 20px; font-weight: 100;">
									<%= ( chapter.version ) ? 'v' + chapter.version : '' %>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<%= '<strong>Created By: </strong>' + chapter.author.first_name + ' ' + chapter.author.last_name  %>
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

						</div>
					</div>

				</div>
				</div>
			</a>
		</div>
	<% } ); %>
</script>
