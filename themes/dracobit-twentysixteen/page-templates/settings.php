<?php

/*
Template Name: Settings
*/

//row, row-fluid, container, container-fluid
//every row-fluid has a twelve column grid system (static)
//col-xs-offset-8
//
get_header(); ?>
<div class="dracobit-container container">
	<div class="row ">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<legend>Settings</legend>
    </div>
</div>
<div class="row-fluid settings-container">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="settings-col-height">
    <div class="row-fluid" id="settings-row-pad">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="settings-left-col-style">General</p>
        <p class="sett-left-end">Security</p>
        <p class="settings-left-col-style">Privacy</p>
        <p class="settings-left-col-style">Timeline and Tagging</p>
        <p class="settings-left-col-style">Blocking</p>
        <p class="sett-left-end">Language</p>
        <p class="settings-left-col-style">Notifications</p>
        <p class="settings-left-col-style">Mobile</p>
        <p class="sett-left-end">Followers</p>
        <p class="settings-left-col-style">Apps</p>
        <p class="settings-left-col-style">Ads</p>
        <p class="settings-left-col-style">Payments</p>
        <p class="settings-left-col-style">Support Inbox</p>
        <p class="sett-left-end">Videos</p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="settings-col-height">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="settings-gen">
					<h3 class="settings-center-col-header">General-Info/ Account Settings</h3>
	        <p class="sett-ctr-p">Name</p>
	        <p class="sett-ctr-p">Username</p>
	        <p class="sett-ctr-p">Email</p>
	        <p class="sett-ctr-p">Password</p>
	        <p class="sett-ctr-p">Networks</p>
	        <p class="sett-ctr-p">Temperature</p>
				</div>
				<div class="settings-sec">
	        <h3 class="settings-center-col-header">Security</h3>
	        <p class="sett-ctr-p">Login Alerts</p>
	        <p class="sett-ctr-p">Login Approvals</p>
	        <p class="sett-ctr-p">Code Generator</p>
	        <p class="sett-ctr-p">App Passwords</p>
	        <p class="sett-ctr-p">Public Key</p>
	        <p class="sett-ctr-p">Trusted Contacts</p>
	        <p class="sett-ctr-p">Your Browsers and Apps</p>
	        <p class="sett-ctr-p">Where You're Logged In</p>
	        <p class="sett-ctr-p">Legacy Contact</p>
	        <p class="sett-ctr-p">Deactivate Your Account</p>
				</div>
			</div>
    </div>
  </div>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="settings-col-height">Text-Filler</div>
</div>

<?php get_footer(); ?>
