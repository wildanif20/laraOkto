@extends('layouts.master')
@section('content')
    <form action="{{route('remiders.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for=""></label>
          <input type="email" class="form-control" name="email" id="" required aria-describedby="emailHelpId" placeholder="Email forgot password,,,">
          <small id="emailHelpId" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection