@extends('layouts.main')

@section('main')
    <ul>
        @foreach ($novels as $novel_item)
        <li> {{ $novel_item->title}}</li>
            
        @endforeach
    </ul>
@endsection