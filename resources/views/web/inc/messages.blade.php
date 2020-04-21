@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="btn btn-outline-danger">
        {{$error}}
    </div>
    
    @endforeach
@endif

@if(session('success'))
    <div class="btn btn-outline-success">
        {{session('success')}}
    </div>
   
@endif

@if(session('error'))
    <div class="btn btn-outline-danger">
        {{session('error')}}
    </div>
@endif





