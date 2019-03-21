<article @php post_class() @endphp>
  <div>
    <h2 class="entry-title">{{ get_the_title() }}</h2>
    @include('partials/entry-meta')
</div>
  <div class="entry-summary">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  <!-- aby aktywowac komentarze, skasowac spacje przy @ oraz odkomentowac -->
  <!-- @ php 
    comments_template('/partials/comments.blade.php') 
  @ endphp -->
</article>


