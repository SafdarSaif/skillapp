@include('panels.header-top')

@yield('styles')

@include('panels.header-bottom')
@include('panels.top-menu')
@include('panels.side-menu')
@yield('content')
@include('panels.footer-top')
@yield('scripts')
@include('panels.footer-bottom')
