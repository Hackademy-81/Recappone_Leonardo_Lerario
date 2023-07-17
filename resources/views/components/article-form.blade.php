<form method="POST" enctype="multipart/form-data" action="{{route('article.store')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{old('title')}}" >
        @error('title')
        <div class="aler alert-danger">{{$message}}</div>
        @enderror
      </div>  
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror""> {{old('body')}}</textarea>
        @error('body')
        <div class="aler alert-danger">{{$message}}</div>
        @enderror
      </div>  
      <div class="mb-3">
        <label class="form-label">Copertina</label>
        <input type="file"   name="img" >
      </div>  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>