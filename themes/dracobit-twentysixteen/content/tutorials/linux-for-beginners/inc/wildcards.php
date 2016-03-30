<!-- <a id="tutorial-wildcards-anchor" class="anchor"></a> -->
<section id="tutorial-wildcards">
	<legend>Wildcards</legend>

	<article id="tutorial-what-is-a-wildcard">
		<h4>What is a Wildcard?</h4>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>A character or string used for <strong>pattern matching</strong>.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Globbing expands the wildcard pattern into a list of <strong>files</strong> and/or <strong>directories</strong>.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Wildcards can be used with <strong>most</strong> common commands ( ls, rm, cp ).</p>
      </div>
    </div>

	</article>

	<article id="tutorial-common-wildcard-options">
		<h4>Common Wildcard Options</h4>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>*</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<p>Matches zero or more characters.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>?</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<p>Matches exactly one character.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>[]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<p>Matches any of the characters included between the brackets. Matches exactly <strong>one</strong> character.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>[!]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<p>Matches any of the characters <strong>not</strong> included between the brackets. Matches exactly <strong>one</strong> character.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>/</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<p>Escape character. Use if you want to match a wildcard character.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-wildcard-ranges">
		<h4>Wildcard Ranges</h4>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Use two characters separated by a <strong>hyphen</strong> to create a range in a character class ( [a-g]* ).</p>
      </div>
    </div>

	</article>
</section>
