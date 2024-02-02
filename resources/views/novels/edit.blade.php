{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container py-5">
        <h2>Edit Novel: <span class="ec-text">{{ $novel->title }}</span></h2>
        <!--link torna a index-->
        <a href="{{ route('novels.index') }}">Torna alla lista delle paste</a>
        <!--link torna a index-->
        <!--forum-->
        <form class="py-3" action="{{ route('novels.update', $novel->id)}}" method="POST">
            <!--token-->
            @csrf
            <!--/token-->
            <!--direttiva-->
            @method('PUT')
            <!--direttiva-->
            <!--title-->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $novel->title}}">
            </div>
            <!--/title-->
            
            <!--price-->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $novel->price}}">
            </div>
            <!--/price-->

            <!--series-->
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $novel->series}}">
            </div>
            <!--series-->

            <!--sale_date-->
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $novel->sale_date}}">
            </div>
            <!--/sale_date-->

            <!--type-->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $novel->type}}">
            </div>
            <!--/type-->

            <!--artists-->
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ $novel->artists}}">
            </div>
            <!--/artists-->

            <!--writers-->
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ $novel->writers}}">
            </div>
            <!--/writers-->

            <!--thumb-->
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $novel->thumb}}">
            </div>
            <!--/thumb-->

            <!--description-->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control mb-3" id="description" name="description" cols="10" rows="5">{{ $novel->description}}</textarea>
            <!--description-->

            <!--checkbox-->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><em>Check to confirm the changes</em></label>
            </div>
            <!--/checkbox-->

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <!--/forum-->
    </main>
    <!--/main-->
@endsection