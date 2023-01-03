@if (session()->has('signupSuccess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('signupSuccess')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('loginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('changePassword'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('changePassword')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('tokenInvalid'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('tokenInvalid')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif