@if(session()->has('message'))
    <div class="alert alert-{{ session('type') }} text-center">
        {{ session('message') }}
    </div>
@endif
