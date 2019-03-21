{{--
  Template Name: Wycena
--}}

@extends('layouts.app')

@section('content')

<div class="container">
<div class="valuation-content">
@while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('partials.content-page')
@endwhile
</div>

<div class="valuation-form">
<?php echo do_shortcode('[contact-form-7 id="70" title="Wycena"]'); ?>
</div>


</div>

@endsection
