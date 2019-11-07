@extends('layouts.master')
@section('content')
    <form action="{{route('login.store')}}" method="post">
        {{ csrf_field() }}        
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email">
            <div class="text-danger">{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password"  name="password">
            <div class="text-danger">{{ $errors->first('password') }}</div>
        </div>        
        <button type="submit" class="btn btn-primary">Sign-up</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
@endsection