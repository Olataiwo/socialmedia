@extends('layouts.master')

@section('title')
    !Welcome
@endsection

@section('content')
    <div class="row">

        <div class="col-md-6">
            <h3>Sign up</h3>
            <form action ="#" method="post">
                    <div class="form-group">
                        <label for="email">Your email:</label>  
                        <input class="form-control" type="text" name="email" id="email"> 
                         <label for="first_name">Your First name:</label>  
                        <input class="form-control" type="text" name="first_name" id="first_name"> 
                        
                        <label for="password">Your password:</label>  
                        <input class="form-control" type="password" name="password" id="password"> 
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
            
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action ="#" method="post">
                    <div class="form-group">
                        <label for="email">Your email:</label>  
                        <input class="form-control" type="text" name="email" id="email"> 
                        
                        <label for="password">Your password:</label>  
                        <input class="form-control" type="password" name="password" id="password"> 
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
            
        </div>
        
    </div>
@endsection
