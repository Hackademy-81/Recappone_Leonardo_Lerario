<div class="card" style="width: 18rem;">
    {{-- @dd($article) --}}
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$article->title}}</h4>
      <h5 class="card-title">{{$article->author}}</h5>
      <p class="card-text">{{$article->body}}</p>
      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
    </div>
  </div>