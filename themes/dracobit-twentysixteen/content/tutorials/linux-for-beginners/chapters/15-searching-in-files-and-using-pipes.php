<section id="tutorial-searching-in-files-and-using-pipes">
	<legend>Searching in Files and Using Pipes</legend>

	<article id="tutorial-the-grep-command">
		<h4>The grep Command</h4>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><code>grep pattern file</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>grep</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display lines matching a pattern.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-grep-options">
		<h4>grep Options</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-i</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Performs a search, ignoring case.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-c</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Count the number of occurrences in a file.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-n</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Precede output with line numbers.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-v</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Invert match. Print lines that dont match.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-file-command">
		<h4>The file Command</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>file [file name]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display the file type.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-searching-for-text-in-binary-files">
		<h4>Searching for Text in Binary Files</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>strings</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display printable strings.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-pipes">
		<h4>Pipes</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>|</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Chain two commands together. Takes standard output of preceeding command into standard input of the following command.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-cut-command">
		<h4>The cut Command</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>cut [file]</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Cut out selected portions of file. If file is omitted use standard input.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-cut-options">
		<h4>cut Options</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-d</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Use delimiter as the field separator.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-f N</code></p>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>Display the Nth field.</p>
			</div>
		</div>
	</article>

	<article id="tutorial-searching-and-pipe-example">
		<h4>Searching and Pipe Example</h4>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Find all users named <strong>"bob"</strong> in <strong>etc/passwd</strong>.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Print account <strong>name</strong> and <strong>real name</strong>.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Print in <strong>alphabetical order</strong> by <strong>account name</strong>.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Print in a <strong>tabular</strong> format.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-searching-and-pipe-example-solution">
		<h4>Searching and Pipe Example Solution</h4>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Command</strong></p>
				<p><code>[user@linuxsvr ~]$ grep bob /etc/passwd</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Output</strong></p>
				<p><code>bobh:x:1002:1000:Bob Hope:/home/bobh:/bin/bash</code></p>
				<p><code>bob:x:1000:1000:Bob Smith:/home/bob:/bin/bash</code></p>
				<p><code>bobdjr:x:1001:1000:Robert Downey:/home/bobdjr:/bin/bash</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Command</strong></p>
				<p><code>[user@linuxsvr ~]$ grep bob /etc/passwd | cut -d: -f1,5</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Output</strong></p>
				<p><code>bobh:Bob Hope</code></p>
				<p><code>bob:Bob Smith</code></p>
				<p><code>bobdjr:Robert Downey</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Command</strong></p>
				<p><code>[user@linuxsvr ~]$ grep bob /etc/passwd | cut -d: -f1,5 | sort</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Output</strong></p>
				<p><code>bob:Bob Smith</code></p>
				<p><code>bobdjr:Robert Downey</code></p>
				<p><code>bobh:Bob Hope</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Command</strong></p>
				<p><code>[user@linuxsvr ~]$ grep bob /etc/passwd | cut -d: -f1,5 | sort | tr ":" " "</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Output</strong></p>
				<p><code>bob Bob Smith</code></p>
				<p><code>bobdjr Robert Downey</code></p>
				<p><code>bobh Bob Hope</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Command</strong></p>
				<p><code>[user@linuxsvr ~]$ grep bob /etc/passwd | cut -d: -f1,5 | sort | tr ":" " " | column -t</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><strong>Output</strong></p>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>bob</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Bob</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Smith</code></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>bobdjr</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Robert</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Downey</code></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>bobh</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Bob</code></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p><code>Hope</code></p>
					</div>
				</div>
			</div>
		</div>
	</article>

	<article id="tutorial-piping-output-to-a-pager">
		<h4>Piping Output to a Pager</h4>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><code>more</code></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><code>less</code></p>
			</div>
		</div>
	</article>
</section>
