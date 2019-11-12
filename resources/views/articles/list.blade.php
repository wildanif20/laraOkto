@foreach ($articles as $item)
        <div class="card mt-5">
                <div class="card-header font-weight-bold text-uppercase">
                    {{$item->title}} <a href="{{route('Article.edit',$item->id)}}" class="badge badge-info">Edit</a>                    
                    <a href="{{route('Article.show',$item->id)}}" class="badge badge-info">Comment</a>                    
                    <form method="POST" action="{{route('Article.destroy', $item->id)}}">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                      {{-- <a href="{{route('Article.destroy', $item->id)}}" class="badge badge-danger">Delete</a> --}}
                      <input type="submit" value="hapus" class="btn btn-danger">
                      </form>        
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>{{$item->content}}</p>
                    <footer class="blockquote-footer">Date :<cite title="Source Title">{{$item->created_at}}</cite></footer>
                  </blockquote>
                </div>
              </div>

              {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="" alt="null">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div> --}}
        @endforeach