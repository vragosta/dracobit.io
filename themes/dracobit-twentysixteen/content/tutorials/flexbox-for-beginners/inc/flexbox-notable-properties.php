<a id="tutorial-flexbox-notable-properties-anchor" class="anchor"></a>
<section id="tutorial-flexbox-notable-properties">
  <article>
    <h4>Flexbox Notable Properties</h4>

    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p><code>display: flex;</code></p>
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
        <p><code>flex-direction: </code></p>
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
        <p><code>justify-content: </code></p>
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
        <p><code>flex-wrap: </code></p>
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
        <p><code>flex-grow: </code></p>
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
        <p><code>order: </code></p>
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
        <p><code>align-self: </code></p>
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
        <p><code>align-items: </code></p>
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
        <p><code>align-content: </code></p>
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
        <p><code>column-count: </code></p>
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
        <p><code>column-gap: </code></p>
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
        <p><code>column-rule: </code></p>
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
