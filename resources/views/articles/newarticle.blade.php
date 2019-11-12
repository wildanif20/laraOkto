@extends('layouts.master')
@section('content')
        <form action="{{route('Article.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="title..." name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" name="article_image" id="article_image"><br />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </form>
    </form>
@endsection