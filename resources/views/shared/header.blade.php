<!--header-->
<header id="ec-nav" class="px-3 d-flex justify-content-between align-items-center position-fixed top-0 end-0 start-0 z-index">
    <!--intestazione-->
    <div class="d-flex justify-content-center">
        <h1 class="fw-bolder m-0"><em>Gestionale</em> DC Comics</h1>
    </div>
    
    <div>
        <!--navbar-->
        <nav class="d-flex justify-content-center navbar navbar-expand-lg gap-3">
            <!--link go to home-->
            <a class="navbar-brand text-white" href="{{ route('novel') }}">Home</a>
            <!--/link go to home-->
            <!--link list novels-->
            <a class="navbar-brand text-white" href="{{ route('novels.index') }}">List Graphic Novels</a>
            <!--/link list novels-->
            <!--link add a novel-->
            <a class="navbar-brand text-white" href="{{ route('novels.create') }}">Add Novel</a>
            <!--/link add a novel-->
            <!--link to list all novels-->
            <a href="#" class="btn btn-primary">Login</a>
            <!--link to list all novels-->
        </nav>
        <!--/navbar-->
    </div>
    <!--/intestazione-->
</header>
<!--/header-->