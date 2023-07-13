<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center">
                    Dettaglio Articolo
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="card-title">{{$article->title}}</h4>
                <h5 class="card-title">{{$article->author}}</h5>
                <p class="card-text">{{$article->body}}</p>    
                <a href="{{route('welcome')}}" class="btn btn-primary">Torna indietro</a>
                @if (Auth::user()->name == $article->author)
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-success">Modifica</a>
                <form action="{{route('article.delete',compact('article') )}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
                @endif

            </div>
        </div>
    </div>
</x-layout>