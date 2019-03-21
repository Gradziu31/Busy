<!-- <footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer> -->

<div class="contact" id="kontakt">
  <div class="container">
  <h2>Kontakt</h2>
    <div class="number"><i class="fa fa-mobile" aria-hidden="true"></i>
      <a href="tel:+48 788 259 723">+48 788 259 723</a>
    </div>
    <!-- <div class="row"> -->
    <?php echo do_shortcode('[contact-form-7 id="33" title="Formularz 1"]'); ?>
    <!-- </div> -->
  </div>
</div>



<div class="info__search">
<div class="container">
<div class="info__title">Stronę Dariusz wyszukiwano po słowach kluczowych:</div>
<div class="info__desc">przejazdy, autobus, bus, wycieczki, przejazdy krajowe, przejazdy zagraniczne, wynajem busów, przejazdy, autobus, bus, wycieczki, przejazdy krajowe, więcej...</div>
</div>
</div>

<footer>
<div class="container">
<div class="row">
<div class="col-12 col-sm-4 logo center-mobile">
          <a href=""><img src="@asset('images/elements/logo-final.png')"></a>
        </div>
<div class="menu col-12 col-sm-8 center-mobile">
            <nav>
              @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
              !!} @endif
            </nav>
            <div class="copyright">
            © 2018 DariuszBus
            </div>
</div>
</div>
</footer>