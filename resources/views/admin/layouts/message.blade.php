@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ Session::get('success') }}
</div>
@endif
@if (Session::has('danger'))
 <div class="alert alert-danger alert-dismissible text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ Session::get('danger') }}
</div>
@endif