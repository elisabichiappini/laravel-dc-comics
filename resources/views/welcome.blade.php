{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container d-flex justify-content-center py-5">
        <div class="ec-bg d-flex gap-4">
            <!--link to list all novels-->
            <a href="{{ route('novels.index') }}" class="btn btn-primary">Show Novels</a>
            <!--link to list all novels-->
             {{-- <!--link to add new novel-->
            <a href="{{ route('novels.index') }}" class="btn btn-primary">Your Novel</a>
             <!--link to add new novel--> --}}
        </div>
    </main>
    <!--/main-->
@endsection