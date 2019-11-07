@extends('layouts.master')
@section('content')
<form action="{{route('Article.update',$articles->id)}}" method="post">
    {{ csrf_field() }} {{method_field('put')}} 
        <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title..." name="title" value="{{$articles->title}}">
              </div>
              <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control" id="content" rows="3" name="content">{{$articles->content}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
</form>
@endsection