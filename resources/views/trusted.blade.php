{{--
  Template Name: Zaufali nam
--}}

@extends('layouts.app')

@section('content')

<div class="container">
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('partials.content-page')
  @endwhile


  <?php
$args = array(
    'post_type'      => 'zaufali_nam',
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'posts_per_page' => -1,
 );

$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>
  <div class="row trusted">
    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>



    <div class="col-6 col-sm-4 col-md-3">
<div class="single-logo">
  
<a href="<?php the_field('link'); ?>">
  <?php the_post_thumbnail([500,500]); ?>
</a>



<div class="single-options">
  <img src="<?php echo $icon; ?>" alt="">
  <?php echo $desc; ?>
</div>


</div>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>



  </div>
</div>


@endsection
