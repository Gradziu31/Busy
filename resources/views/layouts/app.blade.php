<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp

@if (is_front_page()) 
  @include('partials.header')
@endif

@if ( is_home() || is_page() && !is_front_page()  && !is_home() || is_single()) 
    @include('partials.header-small') 
@endif



    <div class="wrap" role="document">
      <div class="content">
        


@if (is_front_page()) 
<main class="main">
    @yield('content')
    </main>
@endif

@if ( is_home() || is_page() && !is_front_page()  && !is_home() || is_single()) 
<main class="main space-content">
    @yield('content')
    </main>
@endif

        
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
