{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container py-5">
        
        <!--list errors-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--list errors-->

        <h2>New Novel</h2>
        <!--forum-->
        <form class="py-3" action="{{ route('novels.store')}}" method="POST">
            <!--token-->
            @csrf
            <!--/token-->
            <!--title-->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" required class="form-control @error('title') is-invalid @enderror">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
            </div>
            <!--/title-->
            
            <!--price-->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required>
                @error('title')
                    <div class="alert alert-success">{{ $message }}</div>                    
                @enderror
            </div>
            <!--/price-->

            <!--series-->
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <!--series-->

            <!--sale_date-->
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <!--/sale_date-->

            <!--type-->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <!--/type-->

            <!--artists-->
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" required>
            </div>
            <!--/artists-->

            <!--writers-->
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" required>
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
                <textarea class="form-control mb-3" id="description" name="description" cols="10" rows="5"></textarea>
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