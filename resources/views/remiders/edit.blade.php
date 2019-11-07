@extends('layouts.master')
@section('content')
    <form action="{{route('remiders.edit' ,['id' => $id, 'code' => $code ])}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password" id="">
        </div>
        <div class="form-group">
          <label for="">Password confirm</label>
          <input type="password" class="form-control" name="password_confirmation" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection