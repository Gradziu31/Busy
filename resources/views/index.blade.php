<!-- Rozkład jazdy -->
@extends('layouts.app')

@section('content')

<div class="container">
<div class="content-custom">



@include('partials.page-header')

@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif

@while (have_posts()) @php the_post() @endphp
  <div class="posts-blog">
    @include('partials.content-'.get_post_type())
  </div>
@endwhile

{!! get_the_posts_navigation() !!}

<div class="show_more">
    <button class="show_more_comments">więcej aktualności</button>  
</div>

<h2 class="text-left">Trasy</h2>

<?php
$args = array(
    'post_type'      => 'trasy',
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'posts_per_page' => -1,
);

$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>

<div class="faq faq-page">
  <div id="accordion">
<?php $count = 0; ?>
<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>


    <ul>
      <a data-toggle="collapse" data-target="#a<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseOne" class="arrow">
        <li class="mt-2">
            <div><?php the_title(); ?></div>
        </li>
      </a>

      <div id="a<?php echo $count; ?>" class="collapse grayback" aria-labelledby="headingOne" data-parent="#accordion">


<div class="row content-route">
<div class="col-12 col-md-9">
    <?php 
$table = get_field( 'trasy' );
$licznik = 1;
if ( $table ) {
    echo '<table border="1">';
        if ( $table['header'] ) {
            echo '<thead>';
                echo '<tr>';
                   foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
               echo  '<td>'.$licznik.'.</td>';
               ++$licznik;
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}
?>
    </div>


<div class="col-12 col-md-3">


<div class="download-content">
<div class="download">
    <?php 
    $file = get_field('rozklad_jazdy');
    if( $file ): ?>
        <a href="<?php echo $file['url']; ?>" class="button button--orange"><i class="fa fa-file-text p-2" aria-hidden="true"></i><div>Pobierz<br><span>Rozkład jazdy</span></div></a>
    <?php endif; ?>
    </div>



<div class="legend">
    <div class="legend-title">Legenda</div>
<?php
// check if the repeater field has rows of data
if( have_rows('pola_wyboru', 'option') ):

 	// loop through the rows of data
    while ( have_rows('pola_wyboru', 'option') ) : the_row();

        // display a sub field value
        echo "<div class='legend-info'>"; 
        echo "<span class='item'>"; 
        the_sub_field('oznaczenie', 'option'); 
        echo "</span> - "; 
        the_sub_field('opis', 'option');
        echo "</div>"; 
    endwhile;

else :

    // no rows found

endif;
?>
<div class="legend-info mt-3">
<?php the_field('more_info', 'option'); ?>
</div></div>
</div>



</div>
</div>
      </div>

    </ul>

<?php $count++ ?>
<?php endwhile; wp_reset_postdata(); endif; ?>
</div>


</div>
</div>




@endsection 