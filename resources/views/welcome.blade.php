@extends('layouts.main')

@section('main')
<main class="container d-flex justify-content-center py-5">
    <div class="ec-bg">
        <a href="{{ route('novels.index') }}" class="btn btn-primary">Mostra fumetti</a>
    </div>
</main>
@endsection