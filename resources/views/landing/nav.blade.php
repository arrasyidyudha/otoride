@extends('layouts.navi')


@section('content')

<div class="container">
    <h1>{{ $article->title }} </h1>
    <p> {{ $article->subject }}</p>
    
    <div class="row mb-1">
       
        <form action="/artikel/{{ $article->id }}" method="POST">
            @csrf
            @method('DELETE')
            {{-- <a href='/artikel/{{ $article->id }}/edit' class="btn btn-primary btn-sm ">Edit</a>
            <button class="btn btn-danger btn-sm ">Hapus</button> --}}
            <a href="/artikel" class="btn btn-sm btn-info ">Back</a>
        </form>
       
    </div>

</div>



@endsection