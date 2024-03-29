{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container ec-padding-body">
        <h2 class="text-center">Graphic Novel</h2>
        <div class="d-flex justify-content-center align-items-center py-3">
            <!--card-->
            <div class="card" style="width: 30rem;">
                <img src="{{ $novel->thumb }}" class="card-img-top" alt="{{ $novel->title }}">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $novel->title }}</h5>
                    <p class="card-text"><strong>Price:</strong> {{ $novel->price }}</p>
                    <p class="card-text"><strong>Genre:</strong> {{ $novel->type }}</p>
                    <p class="card-text"><strong>Available from:</strong> {{ $novel->sale_date }}</p>
                    <p class="card-text"><strong>Series:</strong> {{ $novel->series }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $novel->description }}</p>
                </div>
            </div>
            <!--/card-->
        </div>
        <div class="d-flex justify-content-center align-items-center py-2">
            <a href="{{ route('novels.index') }}" class="btn btn-primary py-2">Torna ai fumetti</a>
        </div>
    </main>
    <!--/main-->
@endsection