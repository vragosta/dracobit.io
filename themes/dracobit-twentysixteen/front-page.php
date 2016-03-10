<?php

get_header(); ?>

<div class="container" style="height: 750px; width: 100%; background-color:#e3e3e3; color: black">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 5px;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" data-pause="hover" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" data-pause="hover"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" data-pause="hover"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <div class="carousel-caption">
              <div class="row" style="margin-top: 85px;">
                <img src="https://s-media-cache-ak0.pinimg.com/736x/f2/bd/80/f2bd804e7dc6c4641e978d9b2b1ae16f.jpg" alt="charizard" style="width: 75%; height: 600px;"/>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <div class="row" style="margin-top: 85px;">
                <img src="https://s-media-cache-ak0.pinimg.com/736x/f6/69/4b/f6694bafae85a13b75da32696daf19f0.jpg" alt="eevee" style="width: 75%; height: 600px;"/>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <div class="row" style="margin-top: 85px;">
                <img src="https://s-media-cache-ak0.pinimg.com/736x/19/83/b5/1983b5bfa35c574fd82a0da863d3951c.jpg" alt="dragonite" style="width: 75%; height: 600px;"/>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-top: 150px;">
      <hr width="1" size="500">
      <?php echo dracobit_signup_form_fields(); ?>
    </div>
  </div>
</div>

<!-- <div class="container">
  <div class="fp-primary-content">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="fp-content">
        <h1>dracobit.io</h1>
        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue hey.
        </p>
      </div>
    </div>
  </div>

  <div class="fp-arrow-content">
    <h4>Learn More</h4>
    <i class="fa fa-chevron-down"></i>
  </div>

  <div class="fp-secondary-content" style="height: 350px;">
  </div>
</div> -->

<!-- <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 charizard-background">
    <img src="https://s-media-cache-ak0.pinimg.com/736x/f2/bd/80/f2bd804e7dc6c4641e978d9b2b1ae16f.jpg" alt="charizard" />
  </div>
</div>

<div class="fp-arrow-content">
  <h4>Learn More</h4>
  <i class="fa fa-chevron-down"></i>
</div>

<div class="fp-quotes-container">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

      <div class="row">

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: center; margin-top: 50px;">
          <h1>Quotes</h1>
          <hr class="quotes-hr" style="margin: 0 auto">
        </div>

      </div>

    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" data-pause="hover" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" data-pause="hover"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" data-pause="hover"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 fp-quote-content">
                  <p><em>"Aheee! Hetoo! He's a dummy!! Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla."</em></p>
                  <h4><strong>Vincent Ragu</strong></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 fp-quote-content">
                  <p><em>"Man who eat many prunes, sit on toilet many moons. Alright, take it easy!"</em></p>
                  <h4><strong>Frankie Bordone</strong></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 fp-quote-content">
                  <p><em>"Insert quote here"</em></p>
                  <h4><strong>Confucius</strong></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->

<?php get_footer(); ?>
