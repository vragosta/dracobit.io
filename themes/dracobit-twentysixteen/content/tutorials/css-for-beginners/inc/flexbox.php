<a id="tutorial-flexbox-anchor" class="anchor"></a>
<section id="tutorial-flexbox">
	<legend>Flexbox</legend>

	<article id="tutorial-why-flexbox">
			<h4>What is Flexbox and why is it useful?</h4>

			<div class="row">
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
					<p>Flexible boxes, or flexbox, is a new layout mode in CSS3.</p>
					<p>Use of flexbox ensures that elements behave predictably when the page layout must accommodate different screen sizes and different display devices.</p>
					<p>For many applications, the flexible box model provides an improvement over the block model in that it does not use floats, nor do the flex container's margins collapse with the margins of its contents.</p>
				</div>
			</div>

	</article>

	<article id="tutorial-flexbox-compatibility">
		<h4>Is Flexbox compatible to my web browser?</h4>

		<div class="row">
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Check to see if your browser is compatible <a href="http://caniuse.com/#feat=flexbox" target="_blank">here</a>.</p>
			</div>
		</div>

	</article>

	<article id="tutorial-flexbox-basics">
		<h4>Flexbox Basics</h4>

		<div class="row">
			<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
				<p>Flexbox consists of <strong>flex containers</strong> and <strong>flex items</strong>. Flex items align with respect to their flex container or with respect to eachother. </p>
				<p>Flexbox defines how flex items are laid out inside flex container. Flex items by default go left to right and top to bottom. Flexbox has a concept of 2 axis: the <strong>main axis</strong> (left to right) and the <strong>cross axis</strong> (top to bottom). These axis determine the baseline of the flex items. </p>
			</div>
		</div>

	</article>

	<article>
		<h4>Flexbox Notable Properties</h4>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>display: -webkit-flex;</code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
      	<p>apply to container div; the content and children of that div now instantly become flex items.</p>
    	</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-flex-direction: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>controls the direction of the flex items. (<strong>Possible Parameters: row | row-reverse | column | column-reverse</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-justify-content: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>defines the alignment along the main axis. (<strong>Possible Parameters: flex-start | flex-end | center | space-between | space-around</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-flex-wrap: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>flex items will all try to fit onto one line by default. You can change that and allow the items to wrap as needed with this property. (<strong>Possible Parameters: nowrap | wrap | wrap-reverse</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-flex-grow: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up. (<strong>Possible Parameters: < number ></strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-order: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>flex items are laid out in the source order by default. However, the order property controls the order in which they appear in the flex container. (<strong>Possible Parameters: < number >; </strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-align-self: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>allows the default alignment (or the one specified by align-items) to be overridden for individual flex items. (<strong>Possible Parameters: auto | flex-start | flex-end | center | baseline | stretch</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-align-items: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>defines the default behaviour for how flex items are laid out along the cross axis on the current line. Think of it as the justify-content version for the cross-axis (perpendicular to the main-axis). (<strong>Possible Parameters: flex-start | flex-end | center | baseline | stretch</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-align-content: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>aligns a flex container's lines within when there is extra space in the cross-axis, similar to how justify-content aligns individual items within the main-axis. (<strong>Possible Parameters: flex-start | flex-end | center | space-between | space-around | stretch</strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-column-count: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>determines margin between columns. (<strong>Possible Parameters: < number ></strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-column-gap: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>apply to container div; the content and children of that div now instantly become flex items. (<strong>Possible Parameters: < number ></strong>)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<p><code>-webkit-column-rule: </code></p>
			</div>
			<div class="col-xs-1 xol-sm-1 col-md-1 col-lg-1">
				<p><i class="fa fa-long-arrow-right"></i></p>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<p>creates vertical lines in gaps of columns. (<strong>Possible Parameters Example: 2px dotted #FFF</strong>)</p>
			</div>
		</div>

	</article>

</section>
