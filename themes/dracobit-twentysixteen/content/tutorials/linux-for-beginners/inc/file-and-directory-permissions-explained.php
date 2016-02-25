<a id="tutorials-file-and-directory-permissions-explained-anchor" class="anchor"></a>
<section id="tutorials-file-and-directory-permissions-explained">
  <legend>File and Directory Permissions Explained</legend>

	<article id="tutorials-permissions">
		<h4>Permissions</h4>

		<div id="tutorials-ls-output">
      <p><code>-rw-rw-r--</code></p>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>-</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Regular File</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>d</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Directory</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>l</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Symbolic Link</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>r</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Read</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>w</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Write</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>x</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Execute</p>
      </div>
    </div>

	</article>

	<article id="tutorials-files-vs-directories">
		<h4>Files vs. Directories</h4>

		<div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p><strong>Permission</strong></p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p><strong>File</strong></p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p><strong>Directory</strong></p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Read ( r )</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Allows files to be read.</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Allows file names in the directory to be read.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Write ( w )</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Allows files to be modified.</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Allows files to be modified within a directory.</p>
      </div>
    </div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>Execute ( x )</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>Allows files to be Executed.</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p>Allows access to contents and metadata for files within a directory.</p>
			</div>
		</div>

	</article>

	<article id="tutorials-permission-categories">
		<h4>Permission Categories</h4>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>Symbol</strong></p>
      </div>
      <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p><strong>Category</strong></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>u</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>User</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>g</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Group</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>o</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Other</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>a</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>All</p>
      </div>
    </div>

	</article>

  <article id="tutorials-groups">
    <h4>Groups</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Every user is in at least one group.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Users can belong to many groups.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Groups are used to organize users.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>The <code>groups</code> command displays a users groups.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>You can also use <code>id -Gn</code>.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-secret-decoder-ring">
    <h4>Secret Decoder Ring</h4>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p>Need to host image file on server ( its in repo ).</p>
      </div>
    </div>

  </article>

  <article id="tutorials-changing-permissions">
    <h4>Changing Permissions</h4>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>Item</strong></p>
      </div>
      <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p><strong>Meaning</strong></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>chmod</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Change mode command.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ugoa</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>User category: user, group, other all</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>+-=</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Add subtract or set permissions</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>rwx</code></p>
      </div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <p>Read, Write, Execute</p>
      </div>
    </div>

  </article>

  <article id="tutorials-numeric-based-permissions">
    <h4>Numeric Based Permissions</h4>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>r</strong></p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>w</strong></p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>x</strong></p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><strong>Description</strong></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>0</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>0</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>0</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Value for off</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>1</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>1</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>1</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Binary value for on</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>4</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>2</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>1</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Base 10 value for on</p>
      </div>
    </div>

  </article>

  <article id="tutorials-In-depth-numeric-based-permissions">
    <h4>In Depth Numeric Based Permissions</h4>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p><strong>Octal</strong></p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p><strong>Binary</strong></p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p><strong>String</strong></p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p><strong>Description</strong></p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>0</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>0</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>- - -</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>No permissions</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>1</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>1</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>- - x</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Execute only</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>2</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>10</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>- w -</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Write only</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>3</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>11</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>- w x</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Write and exexute ( 2+1 )</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>4</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>100</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>r - -</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Read only</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>5</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>101</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>r - x</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Read and execute ( 4+1 )</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>6</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>110</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>r w -</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Read and write ( 4+2 )</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>7</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>111</p>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <p>r w x</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p>Read, write and execute ( 4+2+1 )</p>
    </div>
  </div>

  </article>

  <article id="tutorials-order-has-meaning">
    <h4>Order Has Meaning</h4>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><strong>Type</strong></p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>U</strong></p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>G</strong></p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><strong>O</strong></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Symbolic</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>r w x</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>r - x</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>r - -</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Binary</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>111</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>101</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>100</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>Decimal</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>7</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>5</p>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p>4</p>
      </div>
    </div>

  </article>

  <article id="tutorials-commonly-used-permissions">
    <h4>Commonly Used Permissions</h4>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><strong>Symbolic</strong></p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><strong>Octal</strong></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>- r w x - - - - - -</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>700</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>- r w x r - x r - x</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>755</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>- r w - r w - r - -</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>664</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>- r w - r w - - - -</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>660</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>- r w - r - - r - -</p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p>644</p>
      </div>
    </div>

  </article>

  <article id="tutorials-working-with-groups">
    <h4>Working with Groups</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>New files belong to your <strong>primary</strong> group.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>The <code>chgrp</code> command changes the group.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-direcoty-permissions-revisited">
    <h4>Directory Permissions Revisited</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Permissions on a directory can effect the files in the directory.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>If the file permissions look correct, start checking directory permissions.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Work your way up to the root.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-file-creation-mask">
    <h4>File Creation Mask</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>File creation mask determines default permissions.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>If no mask were used, permissions would be <strong>777</strong> for directories, and <strong>666</strong> for files.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-the-umask-command">
    <h4>The umask Command</h4>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p><code>umask [-S] [mode]</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Sets the file creation mask to <strong>mode</strong>, if given.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Use <code>-S</code> for symbolic notation.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><strong>Common modes:</strong> 022, 002, 077, 007</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><strong>Special modes:</strong> setuid, setgid, sticky</p>
      </div>
    </div>

  </article>

</section>
