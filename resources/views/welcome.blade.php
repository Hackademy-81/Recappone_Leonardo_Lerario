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
            @foreach ($articles as $article)
            {{-- @dd($article) --}}
             <div class="col-12 col-lg-4 ">
                <x-card
                :article='$article'
                />
            </div>    
            @endforeach
        </div>
    </div>
</x-layout>