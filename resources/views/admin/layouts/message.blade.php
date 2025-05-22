@if (Session::has('success'))
<div class="alert alert-success text-center py-2 m-0">
    {{ Session::get('success') }}
</div>
@endif
@if (Session::has('danger'))
<div class="alert alert-danger text-center py-2 m-0">
    {{ Session::get('danger') }}
</div>
@endif