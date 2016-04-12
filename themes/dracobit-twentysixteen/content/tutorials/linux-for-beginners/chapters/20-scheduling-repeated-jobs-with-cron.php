<section id="tutorial-scheduling-repeated-jobs-with-cron">
	<legend>Scheduling Repeated Jobs with Cron</legend>

	<article id="tutorial-what-is-cron">
		<h4>What is Cron?</h4>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>A time based job scheduling service.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>crontab:</strong> a program to create, read, update and delete your schedules.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Use cron to schedule and automate tasks.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-crontab-format">
		<h4>Crontab Format</h4>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><code>* * * * * command</code></p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>* (1st):</strong> Day of Week ( 0-6 ).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>* (2nd):</strong> Month of Year ( 1-12 ).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>* (3rd):</strong> Day of Month ( 1-31 ).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>* (4th):</strong> Hour ( 0-23 ).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-arrow-right"></i></p>
			</div>
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p><strong>* (5th):</strong> Minute ( 0-59 ).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><code># Run every Monday at 07:00.</code></p>
				<p><code>0 7 * * 1 /opt/sales/bin/weekly-report</code></p>
			</div>
		</div>
	</article>
</section>
