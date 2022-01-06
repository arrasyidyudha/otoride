@extends('layouts.doc')


@section('content')
<h1> Edit artikel </h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/artikel/{{ $article->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title"> Judul </label>
        <input type="text" class="form-control" id="title" name="title"
            value="{{old('title') ? old('title') : $article->title }}">
    </div>

    <div class="form-group mt-2">
        <label for="title"> Subject </label>
        <textarea class="form-control" id="subject" name="subject" rows="3">
{{old('subject') ? old('subject') : $article->subject}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2"> Submit </button>
</form>
@endsection

