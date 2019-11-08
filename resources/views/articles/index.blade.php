@extends('layouts.master')
@section('content')
    <h1 class="text-center">ARTICLES</h1>    
    <h4 class="text-right"><a href="{{url('add')}}" class="badge badge-primary">New Article</a></h4>
    <form class="mt-5">
      <div class="search">
          <input type="text" class="form-control search-text" placeholder="Search..." name="search">
      </div>
  </form>
  <div class="article_list">
        @include('articles.list')
  </div>
        <nav>
          <ul class="pagination justify-content-end">
        {{$articles->links('vendor.pagination.bootstrap-4')}}
          </ul>
        </nav>
@endsection

