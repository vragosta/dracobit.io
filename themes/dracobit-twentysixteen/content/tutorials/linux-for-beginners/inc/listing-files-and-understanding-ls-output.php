<a id="tutorials-listing-files-and-understanding-ls-output-anchor" class="anchor"></a>
<section id="tutorials-listing-files-and-understanding-ls-output">
  <legend>Listing Files and Understanding ls Output</legend>

  <article id="tutorials-common-ls-options">
    <h4>Common ls Options</h4>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -l</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays long listing of files.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -a</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays list of files and all hidden files.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -la</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays long listing of files and all hidden files.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -F</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays file types.  <code>/</code> Directory, <code>@</code> Link, <code>*</code> Executable.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -t</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays files by time.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -r</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays files in reverse order.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -latr</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays long listing of files in reverse order sorted by time.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -R</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays recursive list of files.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ls -d</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Displays directory name only, not contents.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-decoding-ls-output">
    <h4>Decoding ls -l Output</h4>

    <div id="row">
      <p><code>-rw-rw-r-- 1 vragosta users 10400 Feb 21 12:36 sales.data</code></p>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Permissions</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>-rw-rw-r--</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Number of links</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>1</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Owner name</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>vragosta</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Group name</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>users</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Number of bytes in the file</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>10400</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>Last modification time</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>Feb 21 12:36</code></p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p>File name</p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-long-arrow-right"></i>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p><code>sales.data</code></p>
      </div>
    </div>

  </article>

  <article id="tutorials-tree-command">
    <h4>The Tree Command</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Similar to <code>ls -R</code>, but creates visual output.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><code>tree -d</code> List directories only.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><code>tree -C</code> Colorize output.</p>
      </div>
    </div>

  </article>

  <article id="tutorials-symbolic-links">
    <h4>Symbolic Links</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>A link that points to the actual file or directory.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Use the link as if it were the file.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>A link can be used to create a shortcut.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><strong>Use Cases:</strong> long file or directory name, indicate the current version</p>
      </div>
    </div>

  </article>

  <article id="tutorials-working-with-spaces-in-names">
    <h4>Working with Spaces in Names</h4>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Just say <strong>no</strong> to spaces.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p><strong>Alternatives:</strong> hyphens ( - ), underscores ( _ ), and camelcase.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Encapsulate the entire file name in quotes.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <i class="fa fa-arrow-right"></i>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Use <strong>backslash ( \\ )</strong> to escape spaces.</p>
      </div>
    </div>

  </article>

</section>
