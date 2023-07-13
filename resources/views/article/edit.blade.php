<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center">
                    Recappone
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form method="POST" enctype="multipart/form-data" action="{{route('article.update', compact('article'))}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{$article->title}}" >
                        @error('title')
                        <div class="aler alert-danger">{{$message}}</div>
                        @enderror
                      </div>  
                      <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror""> {{$article->body}}</textarea>
                        @error('body')
                        <div class="aler alert-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Cover : </label>
                        <img src="{{Storage::url($article->img)}}" height="100px" width="100px" alt="">
                      </div>   
                      <div class="mb-3">
                        <label class="form-label">Copertina</label>
                        <input type="file"   name="img" >
                      </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>