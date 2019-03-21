<header>
  <div class="header">
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-md-6 col-lg-4 logo">
          <a href="<?php echo get_home_url(); ?>"><img src="@asset('images/elements/logo-final.png')"></a>
          <!-- <span class="logo-text">
            <div class="title">Dariusz bus</div>
            <div class="desc">Transport osobowy</div>
          </span> -->
        </div>

        <div class="col-sm-4 col-md-6 col-lg-8">
          <div class="number"><i class="fa fa-mobile" aria-hidden="true"></i>
            <span><a href="tel:+48 788 259 723">+48 788 259 723</a></span>
          </div>
          <div class="menu">
            <nav>
              @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
              !!} @endif
            </nav>
            <div class="number-tel"><i class="fa fa-mobile" aria-hidden="true"></i>
            <span><a href="tel:+48 788 259 723">+48 788 259 723</a></span>
          </div>
            <button class="nav-bar__menu-btn" title="Menu"><span></span></button>
          </div>
        </div>



        <div class="nav-bar">
  <nav class="nav-bar__nav">
              @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
              !!} @endif

  </nav>
</div>



      </div>
    </div>
  </div>

  <div class="container slider">
    <div class="slider__content">
      <h1>Lorem ipsum dolor sit amet</h1>
      <button class=" button button--orange">Szczegóły</button>
    </div>
  </div>
</header>







