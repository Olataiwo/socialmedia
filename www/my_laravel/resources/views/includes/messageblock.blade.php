    @if(count($errors) > 0)
    <div class='row'>
      <div class='col-md-6'>
          <ul>
            @foreach($errors->all() as $error)

            @endforeach
            <li>{{$error}}</li>
          </ul>
      </div>
        
    </div>
    @endif


    @if(Session::has('message'))

     <div class='row'>
      <div class='col-md-4'>
         {{Session::get('message')}}
      </div>
        
    </div>
    @endif