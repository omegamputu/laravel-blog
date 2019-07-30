@include('partials.header')
<div id="app">
    @include('component.message')

    <main role="main" class="py-4">
        @yield('content')
    </main>

</div>
@include('partials.footer')
