<section id="tutorial-processes-and-job-control">
	<legend>Processes and Job Control</legend>

	<article id="tutorial-customizing-the-shell-prompt">
		<h4>Listing Processes and Information</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display process status.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-ps-options">
		<h4>ps Options</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>-e</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Everything, all processes.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>-f</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Full format listing.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>-u username</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display username's processes.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>-p pid</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display information for PID.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-common-ps-commands">
		<h4>Common ps Commands</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps -e</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display all processes.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps -ef</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display all processes, full.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps -eH</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display a process tree.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps -e --forest</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display a process tree.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ps -u username</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display user's processes.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-other-ways-to-view-processes">
		<h4>Other Ways to View Processes</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>pstree</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display processes in a tree format.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>top</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Interactive process viewer.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>htop</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Interactive process viewer.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-background-and-foreground-processes">
		<h4>Background and Foreground Processes</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>command &</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Start command in background.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ctrl-c</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Kill the foreground process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ctrl-z</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Suspend the foreground process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>bg [%num]</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Background a suspended process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>fg [%num]</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>FOreground a background process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>kill [PID]</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Kill a process by job number or PID.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>jobs [%num]</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>List jobs.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-killing-processes">
		<h4>Killing Processes</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>ctrl-c</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Kills the foreground process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>kill [-sig] pid</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Send a signal to a process.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>kill -l</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Display a list of signals.</p>
      </div>
    </div>
	</article>
</section>
