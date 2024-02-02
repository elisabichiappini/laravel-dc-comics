{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container py-5">
        <h2>New Novel</h2>
        <!--forum-->
        <form action="{{ route('novels.store')}}" method="POST">
            <!--token-->
            @csrf
            <!--/token-->
            <!--title-->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <!--/title-->
            
            <!--price-->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <!--/price-->

            <!--series-->
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <!--series-->

            <!--sale_date-->
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <!--/sale_date-->

            <!--type-->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <!--/type-->

            <!--artists-->
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists">
            </div>
            <!--/artists-->

            <!--writers-->
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers">
            </div>
            <!--/writers-->

            <!--thumb-->
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <!--/thumb-->

            <!--description-->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" col="10" row="10"></textarea>
            <!--description-->

            <!--checkbox-->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><em>Not a computer</em></label>
            </div>
            <!--/checkbox-->

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <!--/forum-->
    </main>
    <!--/main-->
@endsection