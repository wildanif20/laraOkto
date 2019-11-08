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