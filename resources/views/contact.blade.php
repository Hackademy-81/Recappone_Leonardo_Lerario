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

             <div class="col-12 col-lg-4 ">
                <form method="post" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">nome e cognome</label>
                        <input type="text" class="form-control" name="user">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dicci cosa pensi di noi</label>
                        <input type="text" class="form-control" name="message">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>    

        </div>
    </div>
</x-layout>