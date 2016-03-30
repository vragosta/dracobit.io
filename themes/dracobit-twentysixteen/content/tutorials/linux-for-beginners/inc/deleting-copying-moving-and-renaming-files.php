<!-- <a id="tutorial-deleting-copying-moving-and-renaming-files-anchor" class="anchor"></a> -->
<section id="tutorial-deleting-copying-moving-and-renaming-files">
	<legend>Deleting, Copying, Moving and Renaming Files</legend>

	<article id="tutorial-removing-files">
		<h4>Removing Files</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>rm file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Remove file.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>rm -r dir</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Remove the directory and its contents recursively.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>rm -f file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Force removal and never prompt confirmation.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-copying-files">
		<h4>Copying Files</h4>

		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<p><code>cp source_file destination_file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<p>Copy source_file to destination_file.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<p><code>cp src_field1 [src_fileN ...] destination_directory</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<p>Copy source_files to destination_directory.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-common-cp-options">
		<h4>Common cp Options</h4>

		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<p><code>cp -i</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<p>Run in interactive mode.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<p><code>cp -r source_directory destination</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<p>Copy src_directory recursively to destination.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-moving-and-renaming-files">
		<h4>Moving and Renaming Files</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>mv source destination</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Move or rename files and directories.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>mv -i source destination</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Force a prompt if the destination exists.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-common-sort-options">
		<h4>Common sort Options</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>sort file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Sort text in file.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>sort -k F file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Sort by key. F is the field number.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>sort -r file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Sort in reverse order.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>sort -u file</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Sort uniquely.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-creating-a-collection-of-files">
		<h4>Creating a Collection of Files</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar [-] c|x|t|f tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Create, extraxt or list contents of a tar archive using pattern if supplied.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-common-tar-options">
		<h4>Common tar Options</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -c tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Create a tar archive.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -x tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Extract files from the archive.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -t tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display the table of contents (list).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -v tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Be verbose.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -z tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Use compression.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>tar -f tarfile [pattern]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Use this file.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-compressing-files-to-save-space">
		<h4>Compressing Files to Save Space</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>gzip [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Compress files.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>funzip [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Uncompress files.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>gzcat [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Concatenates compressed files.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>zcat [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Concatenates compressed files.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-disck-usage">
		<h4>Disk Usage</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>du [file ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Estimates file usage.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>du -k [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display sizes in kilobites.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>du -h [files ...]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display sizes in human readable format.</p>
			</div>
		</div>

	</article>

</section>
