@extends('layouts.navi')


@section('content')
<div class="container">
<h1> Buat baru </h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/artikel" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="title"> Judul </label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
    </div>

    <div class="form-group mb-3">
        <label for="title"> Subject </label>
        <textarea class="form-control" id="subject" name="subject" rows="3">{{old('subject')}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div>
@endsection