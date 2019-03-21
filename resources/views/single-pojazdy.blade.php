@extends('layouts.app')

@section('content')
  
<div class="container mt-4">
@while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
@endwhile

<?php 
$images = get_field('galeria');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            	<a href="<?php echo wp_get_attachment_image_url( $image['ID'], 'full'); ?>" data-lightbox="example-$image"><?php echo wp_get_attachment_image( $image['ID'], $size); ?></a>
        <?php endforeach; ?>
<?php endif; ?>

</div>
@endsection
