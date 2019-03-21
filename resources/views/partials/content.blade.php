<article @php post_class() @endphp>
  <div class="header-article">
    <h3 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
    @include('partials/entry-meta')
  </div>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>