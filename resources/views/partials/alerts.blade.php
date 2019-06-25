@if(session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Pronto!</strong> {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning" role="alert">
        <strong>Então...</strong> {{ session('warning') }}
    </div>
@endif