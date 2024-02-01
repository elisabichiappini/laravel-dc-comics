@extends('layouts.main')

@section('main')
<main class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($novels as $item_novel )
        <div class="col">
            <div class="card">
                <img src="{{ $item_novel->thumb}}" class="card-img-top" alt="{{ $item_novel->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item_novel->type}}</h5>
                    <p class="card-text">{{ $item_novel->description}}.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection