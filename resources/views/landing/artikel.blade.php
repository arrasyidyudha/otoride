@extends('layouts.doc')


@section('content')

<h1 class="title-artikel">Artikel</h1>
<div class="container">

    <div class="text- title-ly-content-1-1">
        @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row">

            @foreach ($articleChunk as $article)

            <div class="col-4 mb-4 card">

                <div class="card-body-bx">
                    <img src="asset/harley-davidson.jpg" width="100px" height="80px" class="img-artikel rounded" alt="...">
                    <p><strong> {{ ucfirst($article->title) }} </strong></p>

                    <a href='/artikel/{{ $article->slug }}' class="btn btn-outline-secondary btn-sm stretched-link mb-2">Baca</a>



                </div>
            </div>


            @endforeach

        </div>
    
    @endforeach
    <div>
        {{$articles->links() }}
    </div>
    </div>
    </div>


@endsection