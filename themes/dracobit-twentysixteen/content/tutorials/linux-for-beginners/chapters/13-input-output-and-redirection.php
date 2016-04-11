<section id="tutorial-input-output-and-redirection">
	<legend>Input, Output, and Redirection</legend>

	<article id="tutorial-input-output-types">
		<h4>Input/Output Types</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><strong>I/O Name</strong></p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><strong>Abbreviation</strong></p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><strong>File Descriptor</strong></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>Standard Input</p>
				<p>Standard Output</p>
				<p>Standard Error</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>stdin</p>
				<p>stdout</p>
				<p>stderr</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>0</p>
				<p>1</p>
				<p>2</p>
			</div>
		</div>

	</article>

	<article id="tutorial-redirection">
		<h4>Redirection</h4>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>></code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Redirects standard output to a file. Overwrites existing contents.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>>></code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Redirects standard output to a file. Appends to any existing contents.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code><</code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Redirects input from a file to a command.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>&</code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Used with redirection to signal that a file descriptor is being used.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>2>&1</code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Combines stderr and standard output.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>2>file</code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Redirects standard error to a file.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-null-device">
		<h4>The Null Device</h4>

		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<p><code>>/dev/null</code><p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<p>Redirects output to nowhere.</p>
			</div>
		</div>

	</article>
</section>
