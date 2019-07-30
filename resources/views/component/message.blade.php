@if(Session::has('success'))
    <div class="container" style="margin-top: 25px;">
        <div class="alert alert-success mt-1" role="alert">
            <strong>Success:</strong> {{ Session::get('success') }}
        </div>
    </div>
@endif

@if(Session::has('info'))
    <div class="container">
        <div class="alert alert-info mt-1" role="alert">
            <strong>Success:</strong> {{ Session::get('info') }}
        </div>
    </div>
@endif
