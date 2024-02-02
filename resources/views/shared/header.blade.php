<!--header-->
<header id="ec-nav" class="d-flex justify-content-between position-fixed top-0 end-0 start-0 z-index">
    <!--intestazione-->
    <div class="d-flex justify-content-center p-4">
        <h1 class="fw-bolder">DC Comics</h1>
    </div>
    <!--/intestazione-->

    <!--navbar-->
    <nav class="d-flex justify-content-center navbar navbar-expand-lg gap-3">
        <!--link go to home-->
        <a class="navbar-brand text-white" href="{{route('novel')}}">Home</a>
        <!--/link go to home-->
        <!--link list novels-->
        <a class="navbar-brand text-white" href="{{ route('novels.index')}}">Graphic Novels</a>
        <!--/link list novels-->
        <!--link add a novel-->
        <a class="navbar-brand text-white" href="{{ route('novels.create')}}">Add Novel</a>
        <!--/link add a novel-->
        <!--link edit novel-->
        <a class="navbar-brand text-white" href="{{ route('novels.edit')}}">Edit Novel</a>
        <!--/link edit novel-->
    </nav>
    <!--/navbar-->
</header>
<!--/header-->