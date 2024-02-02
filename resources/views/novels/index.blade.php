{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($novels as $item_novel )
            <div class="col">
                <!--card-->
                <div class="card text-center">
                    <img src="{{ $item_novel->thumb}}" class="card-img-top ec-img" alt="{{ $item_novel->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item_novel->series}}</h5>
                        <p class="card-text">{{ $item_novel->type}}</p>
                    </div>
                    <!--link show novel-->
                    <a class="pb-1 nav-link ec-text" href="{{ route('novels.show', $item_novel->id) }}">More info</a>
                    <!--/link show novel-->
                </div>
                <!--card-->
            </div>
            @endforeach
        </div>
    </main>
    <!--/main-->
@endsection