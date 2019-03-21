{{--
  Template Name: Strona główna
--}}

@extends('layouts.app')

@section('content')



<div class="wall__persons">
<div class="container ">
  <div class="row">
    <div class="col-9 offset-3 persons__content">
    <div class="title-persons">
    <h2>DariuszBus</h2>
    <span>Dla nas najważniejsi są ludzie</span>
    </div>
<div class="text-persons">
Historia naszej firmy sięga (XX) kilkunastu lat wstecz. Wtedy to uświadomiliśmy sobie, że pragniemy połączyć 
rodzinną pasję motoryzacyjną, zamiłowanie do podróży oraz ambicje stworzenia firmy służącej ludziom 
wszelkich zawodów i zainteresowań. Przez te XX lat bezpiecznie przewieźliśmy ponad XX tysięcy pasażerów. 
Każdy kolejny kilometr z Wami, to większa wiedza, doświadczenie i wzrost jakości obsługi Klienta. A 
kilometrów mamy już za sobą ok. XX milionów.<br><br>

Nasze bogate doświadczenie na trasach międzynarodowych, potwierdziło, że warto inwestować wyłącznie z 
nowoczesną flotę oraz doświadczonych kierowców zawodowych. Nasi Klienci dostrzegają to i doceniają. Miło 
słyszeć jest wyłącznie pozytywne opinie i gratulacje. Najlepszym dowodem zadowolenia jest fakt ciągłości 
współpracy. Ponad 85% Klientów powraca do nas. Mają oni już nawet swoje ulubione samochody, w których 
- jak podkreślają - czują się niczym w swoim domu na kółkach.<br><br>

Uwielbiamy podróżować z Wami - odkrywać zakątki Europy, dzielić zachwyt nowymi miejscami i słuchać 
Waszych historii. Gdy po intensywnym dniu wycieczki, konferencji biznesowej czy koncercie zasypiacie 
wygodnie w komfortowych fotelach naszych busów i autobusów, my skupiamy się na drodze i bezpiecznym
dowiezieniu Was do domu.<br><br>

Z nami droga zawsze jest szeroka.
</div>
    </div>
  </div>
</div>
</div>


<div class="wall__cars">
<div class="container">
  <div class="row">
    <div class="col-12">
    <h2>Dlaczego warto wybrac nas?</h2>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
    <div class="icon">
    <img src="@asset('images/elements/comfort.png')">
    </div>
    <div class="title__why">Komfortowa flota</div> 
    <div class="desc_why">Nasza flota to nowe, w pełni
wyposażone busy oraz autobusy z 
nowoczesnymi technologiami na 
pokładzie.</div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
    <div class="icon">
    <img src="@asset('images/elements/security.png')">
    </div>
    <div class="title__why">Bezpieczeństwo na drodze</div> 
    <div class="desc_why">Nasz sprzęt posiada aktualne
badania techniczne, licencje oraz
certyfikaty - nawet te 
nadobowiązkowe.</div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
    <div class="icon">
    <img src="@asset('images/elements/experience.png')">
    </div>
    <div class="title__why">Doświadczona kadra</div> 
    <div class="desc_why">Zatrudniamy wyłącznie
doświadczonych, opanowanych 
kierowców ze znajomością
europejskich przepisów prawa
drogowego.</div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
    <div class="icon">
    <img src="@asset('images/elements/multilang.png')">
    </div>
    <div class="title__why">Wielojęzycznoś personelu</div> 
    <div class="desc_why">Nie znasz języka angielskiego?
Możesz na nas liczyć nawet w
kwestii porozumiewania się poza 
granicą Polski.</div>
    </div>
  </div>
</div>
<!-- <h2 class="next-title">Oferta</h2> -->
</div>


<div class="offer">
<div class="container">
  <div class="row">
  <div class="col-4 d-none d-lg-block bus-section">
    <div class="bus ">
    <img src="@asset('images/elements/bus.png')">
    </div>
  </div>
  <div class="col-12 col-sm-10 offset-sm-1 offset-md-0 col-md-6 col-lg-4 info__offer">
    <div class="head-offer">
      Zawsze możesz na nas liczy.<br>
      Kompleksowoś oferty to tylko jedna z naszych zalet.
    </div>
    <ul>
      <li>wyjazdy krajowe i miedzynarodowe</li>
      <li>szkolenia</li>
      <li>przewóz osob na konferencje</li>
      <li>wyjazdy krajowe i miedzynarodowe</li>
      <li>szkolenia</li>
      <li>przewóz osob na konferencje</li>
      <li>wyjazdy krajowe i miedzynarodowe</li>
      <li>szkolenia</li>
      <li>przewóz osob na konferencje</li>
    </ul>
  </div>
  <div class="col-12 col-sm-10 offset-sm-1 offset-md-0 col-md-6 col-lg-4  require">
    <div class="more__info">
    <h3>Masz inne, indywidualne 
wymagania?</h3>

<div class="text-content">Skontaktuj się z nami - 
jesteśmy otwarci na nowe 
wyzwania.</div>
<button class="button button--orange">Kontakt</button>
    </div>
  </div>
  </div>
</div>
</div>


<div class="fleet">
<?php
$args = array(
    'post_type'      => 'pojazdy',
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'posts_per_page' => -1,
 );

$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>
<?php $first = 0; ?>
  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

  <?php if(  get_field('tlo_sekcji') ) {  ?>
<div class="section__one" style="background-image: url(<?php the_field('tlo_sekcji'); ?>)">
      <div class="container">

      <?php 
      echo ($first == 0 ? '<h2>Nasza flota</h2>' : '');
      ?>       
        
        <div class="row">
          <div class="col-12">
          <h3><?php the_title(); ?></h3>
          </div>
          <div class="col-12 col-md-6 thumbs">
            <?php the_post_thumbnail([500,500]); ?>
          </div>

          <div class="col-12 col-md-6">
            <div class="row">
            <?php $counts = 0; ?>
              <?php while( have_rows('dodatki') ): the_row(); 
                $icon = get_sub_field('ikona');
                $desc = get_sub_field('opis');
                $background = get_sub_field('tlo_sekcji');
              ?>
            <div class="col-12 col-sm-6">
              <div class="single-options">
              <img src="<?php echo $icon; ?>" alt="">
                <?php echo $desc; ?>
              </div>
                
            </div>
            <?php $counts++ ?>
            <?php endwhile; ?>
            </div>
          </div>

      <?php 
      echo ($first == 2 ? '<a href="nasza-flota" class="button button--orange more">ZOBACZ WIĘCEJ</a>' : '');
      ?>
      
        </div>
      </div>
    </div>
    <?php }; ?>
    <?php $first++ ?>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>


















<?php if( have_rows('opinie_klientow', 'option') ): ?>

<div class="reviews">
<div class="container">
<h2>Opinie naszych Klientów</h2>

  <div class="swiper-container">
  <div class="swiper-wrapper">
  <?php $counts = 0; ?>

        <?php while( have_rows('opinie_klientow', 'option') ): the_row(); 
        $name = get_sub_field('imie');
        $desc = get_sub_field('komentarz');
      ?>
        <div class="swiper-slide">
          <div class="name__reviews"><?php echo $name; ?></div>
          <div class="comment__desc"><?php echo $desc; ?></div>
        </div>

        <?php $counts++ ?>
        <?php endwhile; ?>

</div>
<div class="pagination">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
<!-- <div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
<div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div><br> -->
</div>

  </div>
</div>
</div>
</div>
<?php endif; ?>















<?php if( have_rows('faq', 'option') ): ?>
<div class="faq" id="faq">
  <div class="container">
  <h2>FAQ</h2>
  <?php $count = 0; ?>
  <div id="accordion">
    <ul>
      <?php while( have_rows('faq', 'option') ): the_row(); 
        $title = get_sub_field('title_faq');
        $desc = get_sub_field('desc_faq');
      ?>

<a data-toggle="collapse" data-target="#a<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseOne" class="arrow">
      <li>
                <?php echo $title; ?>
      </li>
</a>

      <div id="a<?php echo $count; ?>" class="collapse grayback" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="collaps">
            <?php echo $desc; ?>
          </div>
      </div>
      <?php $count++ ?>
      <?php endwhile; ?>
    </ul>
  </div>
</div>
</div>
</div>
<?php endif; ?>

@endsection