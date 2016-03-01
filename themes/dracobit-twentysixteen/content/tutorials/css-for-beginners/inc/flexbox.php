<!-- <div id="tutorials-overview-container">
	<legend style="color: #333; font-size: 22px">Overview</legend>
	<ul style="padding-left: 0px; list-style: none;">
		<li><i class="fa fa-long-arrow-right"></i><a href="#tutorials-flexbox-anchor" style="color: #333;"> Flexbox</a></li>
			<ul>
				<li><a href="#tutorials-why-flexbox-anchor" style="color: #333;">What is Flexbox and why is it useful?</a></li>
				<li><a href="#tutorials-flexbox-compatibility-anchor" style="color: #333;">Is Flexbox compatible with my web browser?</a></li>
				<li><a href="#tutorials-flexbox-basics-anchor" style="color: #333;">Flexbox Basics</a></li>
				<li><a href="#tutorials-flexbox-notable-anchor" style="color: #333;">Flexbox Notable Properties</a></li>
			</ul>
	</ul>
</div> -->

<a id="tutorials-flexbox-anchor" class="anchor"></a>
<section id="tutorials-flexbox">
		<a id="tutorials-why-flexbox-anchor" class="anchor"></a>
		<div id="tutorials-why-flexbox">
			<legend style="color: #333, font-size: 22px;">Flexbox</legend>
			<h4 style="font-weight: 500;">What is Flexbox and why is it useful?</h4>
			<p>Flexible boxes, or flexbox, is a new layout mode in CSS3.</p>
			<p>Use of flexbox ensures that elements behave predictably when the page layout must accommodate different screen sizes and different display devices.</p>
			<p>For many applications, the flexible box model provides an improvement over the block model in that it does not use floats, nor do the flex container's margins collapse with the margins of its contents.</p>
		</div>
</div>

<a id="tutorials-flexbox-compatibility-anchor" class="anchor"></a>
<div id="tutorials-flexbox-compatibility" style="margin-top: 20px">
	<h4 style="font-weight: 500;">Is Flexbox compatible to my web browser?</h4>
	<p>Check to see if your browser is compatible <a href="http://caniuse.com/#feat=flexbox" target="_blank">here</a>.</p>
</div>

<a id="tutorials-flexbox-basics-anchor" class="anchor"></a>
<div id="tutorials-flexbox-basics" style="margin-top: 20px">
	<h4 style="font-weight: 500;">Flexbox Basics</h4>
	<p>Flexbox consists of <strong>flex containers</strong> and <strong>flex items</strong>. Flex items align with respect to their flex container or with respect to eachother. </p>
	<p>Flexbox defines how flex items are laid out inside flex container. Flex items by default go left to right and top to bottom. Flexbox has a concept of 2 axis: the <strong>main axis</strong> (left to right) and the <strong>cross axis</strong> (top to bottom). These axis determine the baseline of the flex items. </p>
</div>

<a id="tutorials-flexbox-notable-anchor" class="anchor"></a>
<div id="tutorials-flexbox-notable" style="margin-top: 20px">
	<h4 style="font-weight: 500;">Flexbox Notable Properties</h4>
	<p><code style="color: #00aeff;">display: -webkit-flex;</code> apply to container div; the content and children of that div now instantly become flex items.</p>
	<p><code style="color: #00aeff;">-webkit-flex-direction: row | row-reverse | column | column-reverse;</code> controls the direction of the flex items.</p>
	<p><code style="color: #00aeff;">-webkit-justify-content: flex-start | flex-end | center | space-between | space-around;</code> defines the alignment along the main axis.</p>
	<p><code style="color: #00aeff;">-webkit-flex-wrap: nowrap | wrap | wrap-reverse;</code> flex items will all try to fit onto one line by default. You can change that and allow the items to wrap as needed with this property.</p>
	<p><code style="color: #00aeff;">-webkit-flex-grow: < number >;</code>accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
	<p><code style="color: #00aeff;">-webkit-order: < integer >;</code>flex items are laid out in the source order by default. However, the order property controls the order in which they appear in the flex container.</p>
	<p><code style="color: #00aeff;">-webkit-align-self: auto | flex-start | flex-end | center | baseline | stretch; </code>allows the default alignment (or the one specified by align-items) to be overridden for individual flex items.</p>
	<p><code style="color: #00aeff;">-webkit-align-items: flex-start | flex-end | center | baseline | stretch; </code>defines the default behaviour for how flex items are laid out along the cross axis on the current line. Think of it as the justify-content version for the cross-axis (perpendicular to the main-axis).</p>
	<p><code style="color: #00aeff;">-webkit-align-content: flex-start | flex-end | center | space-between | space-around | stretch; </code>aligns a flex container's lines within when there is extra space in the cross-axis, similar to how justify-content aligns individual items within the main-axis.</p>
	<p><code style="color: #00aeff;">-webkit-column-count: < number >; </code>defines number of columns flex container will have.</p>
	<p><code style="color: #00aeff;">-webkit-column-gap: < number >; </code> determines margin between columns.</p>
	<p><code style="color: #00aeff;">-webkit-column-rule: 2px dotted #FFF; </code>creates vertical lines in gaps of columns.</p>
	<!-- <p><code style="color: #00aeff;"></code></p>
	<p><code style="color: #00aeff;"></code></p>
	<p><code style="color: #00aeff;"></code></p>
	<p><code style="color: #00aeff;"></code></p> -->
</section>
