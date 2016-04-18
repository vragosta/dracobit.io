<section id="tutorial-customizing-the-prompt">
	<legend>Customizing the Prompt</legend>

	<article id="tutorial-customizing-the-shell-prompt">
		<h4>Customizing the Shell Prompt</h4>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Use an <strong>environment variable</strong> to customize.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Bash, ksh, and sh use <strong>$PS1</strong>.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-arrow-right"></i></p>
      </div>
      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
        <p>Csh, tcsh and zsh use $prompt.</p>
      </div>
    </div>

	</article>

	<article id="tutorial-customizing-the-prompt-with-ps1">
		<h4>Customizing the Prompt with PS1</h4>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>\d</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Date in "Weekday Month Date" format ( Tue May 26 ).</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>\h</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Hostname up to the first period.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>\H</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Hostname.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>\n</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Newline.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/t</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Current time in 24-hour HH:MM:SS format.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/T</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Current time in 12-hour HH:MM:SS format.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/@</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Current time in 12-hour am/pm format.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/A</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>CUrrent time in 24-hour HH:MM format.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/u</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Username of the current user.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/w</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Current working directory.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/W</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>Basename of the current working directory.</p>
      </div>
    </div>

		<div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <p><code>/$</code></p>
      </div>
      <div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
        <p><i class="fa fa-long-arrow-right"></i></p>
      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <p>If the effective UID is 0, a # is shown, otherwise a $ is shown.</p>
      </div>
    </div>
	</article>

	<article id="tutorial-persis-ps1-changes">
		<h4>Persist PS1 Changes</h4>

		<div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p><code>$ echo 'export PS1="[\u@\h \w]\$ "' >> ~/.bash_profile</code></p>
      </div>
    </div>

	</article>
</section>
