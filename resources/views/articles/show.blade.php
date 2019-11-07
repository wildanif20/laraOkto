@extends('layouts.master')
@section('content')
<form >
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" readonly class="form-control" id="title" placeholder="title..." name="title"
            value="{{$article->title}}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea readonly class="form-control" id="content" rows="3" name="content">{{$article->content}}</textarea>
    </div>    
</form>


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            @endforeach
        </ul>
    </div>    
@endif


<h3 class="mt-5">Comment This Article</h3>
<form action="{{route('Comment.store',$article->id)}}" method="post">
    {{ csrf_field() }}    
    <div class="form-group">
        {{-- <label for="title">Title</label> --}}
        <input type="text" class="form-control" id="title" placeholder="title..." name="article_id"
            value="{{$article->id}}" hidden>
    </div>
    <div class="form-group">
        <label for="title">User</label>
        <input type="text" class="form-control" id="title" placeholder="Alias..." name="user">
    </div>
    <div class="form-group">
        <label for="content">Comment</label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
</form>

<h3 class="mt-5 text-center">Comments</h3>
@foreach ($comments as $item)
<div class="card">
    <div class="card-header">
      <span class="badge badge-info">{{$item->user}}</span>
    </div>
    <div class="card-body">      
      <p class="card-text">{{$item->content}}</p>      
    </div>
  </div>
  <br />
@endforeach
@endsection