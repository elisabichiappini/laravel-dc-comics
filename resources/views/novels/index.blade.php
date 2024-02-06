{{--import layout--}}
@extends('layouts.main')

{{--workspace yield--}}
@section('main')
    <!--main-->
    <main class="container ec-padding-body">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($novels as $item_novel )
            <div class="col">
                <!--card-->
                <div class="card text-center pb-3">
                    <img src="{{ $item_novel->thumb}}" class="card-img-top ec-img" alt="{{ $item_novel->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item_novel->series}}</h5>
                        <p class="card-text">{{ $item_novel->type}}</p>
                    </div>
                    <!--link show novel-->
                    <a class="pb-1 nav-link ec-text" href="{{ route('novels.show', $item_novel->id) }}">More info</a>
                    <!--/link show novel-->
                    <!--link edit novel-->
                    <a class="pb-1 nav-link ec-text" href="{{ route('novels.edit', $item_novel->id) }}">Edit Novels</a>
                    <!--/link edit novel-->
               
                    <!--add confirm delete-->
                    <div>
                        <!--attiva modale di cancellazione-->
                        <button class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#my-dialog-{{ $item_novel->id }}">Delete</button>
                        <!--attiva modale di cancellazione-->

                        <!--modale -->
                        <div class="modal" id="my-dialog-{{ $item_novel->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!--messaggio di alert -->
                                    <div class="modal-header text-center">
                                        <h3 class=text-center>Delete it?</h3>
                                    </div>
                                    <!--/messaggio di alert -->
                                    <!--name novel to delete -->
                                    <div class="modal-body text-center">
                                        The novel <strong>{{ $item_novel->title }}</strong></span>
                                    </div>
                                    <!--/name novel to delete -->
                                    <div class="modal-footer">
                                        <!--no delete-->
                                        <button class="btn btn-success text-uppercase"
                                            data-bs-dismiss="modal">No
                                        </button>
                                        <!--no delete-->
                                        <!--last confirm delete record-->
                                        <form action="{{ route('novels.destroy', $item_novel->id) }}" method="POST">
                                            <!--token-->
                                            @csrf
                                            <!--/token-->
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Yes</button>       
                                        </form>
                                        <!--/last confirm delete record-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modale -->
                    </div>
                    <!--card-->
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <!--/main-->
@endsection