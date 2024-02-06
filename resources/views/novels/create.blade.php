{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container ec-padding-body">
        
        {{-- <!--list errors-->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--list errors--> --}}

        <h2>New Novel</h2>
        <!--forum-->
        <form class="py-3" action="{{ route('novels.store')}}" method="POST">
            <!--token-->
            @csrf
            <!--/token-->
            <!--title-->
            <div class="mb-3">
                <!--validazione per title-->
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" required class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}">
                <!--/validazione per title-->
                <!--definisco la direttiva error per title-->
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--/definisco la direttiva error per title-->
            </div>
            <!--/title-->
            
            <!--price-->
            <div class="mb-3">
                <!--validazione per price-->
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price')}}">
                <!--/validazione per price-->
                <!--definisco la direttiva error per price-->
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per price-->
            </div>
            <!--/price-->

            <!--series-->
            <div class="mb-3">
                <!--validazione per series-->
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series')}}">
                <!--validazione per series-->
                <!--definisco la direttiva error per series-->
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per series-->
            </div>
            <!--series-->

            <!--sale_date-->
            <div class="mb-3">
                <!--validazione per sale_date-->
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">
                <!--definisco la direttiva error per sale_date-->
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per sale_date-->
            </div>
            <!--/sale_date-->

            <!--type-->
            <div class="mb-3">
                <!--validazione per type-->
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type')}}">
                <!--validazione per type-->
                <!--definisco la direttiva error per type-->
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per type-->
            </div>
            <!--/type-->

            <!--artists-->
            <div class="mb-3">
                <!--validazione per artists-->
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists')}}">
                <!--definisco la direttiva error per artists-->
                @error('artists')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per artists-->
            </div>
            <!--/artists-->

            <!--writers-->
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers')}}">
                <!--definisco la direttiva error per writers-->
                @error('writers')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per writers-->
            </div>
            <!--/writers-->

            <!--thumb-->
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb')}}">
                <!--definisco la direttiva error per thumb-->
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per thumb-->
            </div>
            <!--/thumb-->

            <!--description-->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control mb-3 @error('description') is-invalid @enderror" id="description" name="description" cols="10" rows="5"></textarea>
                <!--definisco la direttiva error per description-->
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>                    
                @enderror
                <!--definisco la direttiva error per description-->
            <!--description-->

            {{-- <!--checkbox-->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><em>Not a computer</em></label>
            </div>
            <!--/checkbox--> --}}

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <!--/forum-->
    </main>
    <!--/main-->
@endsection