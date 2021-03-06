<section id="tutorial-finding-files-and-directories">
	<legend>Finding Files and Directories</legend>

	<article id="tutorial-the-find-command">
		<h4>The find Command</h4>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><code>find [path...] [expression]</code></p>
			</div>
		</div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Recursively finds files in path that match <strong>expression</strong>. If no arguments are supplied it finds <strong>all</strong> files in the current directory.</p>
      </div>
    </div>

	</article>

	<article id="tutorial-common-find-options">
		<h4>Common find Options</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-name pattern</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Find files and directories that match pattern.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-iname pattern</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Like -name, but ignores case.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-ls</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Performs an <code>ls</code> on each of the found items.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-mtime days</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Finds files that are <strong>days</strong> old.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-size num</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Finds files that are of size <strong>num</strong>.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-newer file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Finds files that are <strong>newer</strong> than file.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-exec command {} \;</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Run command against all files that are found.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-common-find-options">
		<h4>A Fast Find - locate</h4>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><code>locate pattern</code></p>
			</div>
		</div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Lists files that match pattern.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Faster than the <code>find</code> command.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Queries an <strong>index</strong>.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Results are not in real time.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>May <strong>not</strong> be enabled on all systems.</p>
      </div>
    </div>

	</article>

</section>
