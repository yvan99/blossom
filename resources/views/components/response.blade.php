@if ($errors->any())
<div class="alert alert-default" role="alert">
  <strong>{{$errors}}</strong> 
</div>
@endif

@if(session('status'))
<div class="alert alert-default" role="alert">
<strong>{{ session('status') }}</strong>
</div>
@endif