@if(count($errors)>0)
    
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
      <strong>  {{$error}}</strong>
    </div>    
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success"> 
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif