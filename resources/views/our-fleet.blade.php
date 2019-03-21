{{--
  Template Name: Nasza flota
--}}

@extends('layouts.app')

@section('content')

<div class="container">
  

  <div class="content-custom">
  
@while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('partials.content-page')
@endwhile

<?php
$args = array(
    'post_type'      => 'pojazdy',
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'posts_per_page' => -1,
 );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>
      <div class="row">
  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
    <div class="col-12 col-sm-6 col-md-4 mb-3">
<a class="text-decoration" href="<?php  the_permalink() ?>">
<div class="fleet-single">
      <div class="fleet-single__photo">
          @if ( !empty(get_field('nasza_flota_miniatura')) )
            <img src="<?php the_field('nasza_flota_miniatura'); ?>" alt="">
            @else
            <img src="<?php the_field('default_photo', 'option'); ?>" alt="">
          @endif
      </div>
      <div class="fleet-single__space">
      <div class="fleet-single__title"><?php the_title(); ?></div>
      <div class="fleet-single__desc"><?php the_field('nasza_flota_desc'); ?></div>
      </div>
    </div>
  </a>
</div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>


</div>  <!--  container -->


@endsection
