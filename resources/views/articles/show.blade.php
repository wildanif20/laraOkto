@extends('layouts.master')
@section('content')
<?php
    $url = $article->img_article();
?>
<form >
    <label for="Image"></label>
    <div class="form-group">
        <img src="{{ $url }}" alt="nul" class="img-fluid" width="400px" height="200px">
    </div>
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


{{-- Error Notice --}}
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
<form action="{{route('Comment.store',$article->id)}}" class="fcomment">
    {{ csrf_field() }}    
    <div class="form-group" >
        {{-- <label for="title">Title</label> --}}
        <input type="text" class="form-control" id="title" placeholder="title..." name="article_id"
            value="{{$article->id}}" hidden>
    </div>
    <div class="form-group">
        <label for="title">User</label>
        <input type="text" class="form-control" id="title" placeholder="Alias..." name="user" id="user">
    </div>
    <div class="form-group fcomment">
        <label for="content">Comment</label>
        <textarea class="form-control" id="content" rows="3" name="content" id="content"></textarea>
    </div>
    <button type="button" class="btn btn-primary" id="save">Post</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>


<h3 class="mt-5 text-center">Comments</h3>
<div class="comment_article">
    @include('articles.comment')
</div>
@endsection