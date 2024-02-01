<!--header-->
<header>
    <!--intestazione-->
    <div class="d-flex justify-content-center p-4">
        <h1 class="text-primary fw-bolder">DC Comics</h1>
    </div>
    <!--/intestazione-->

    <!--navbar-->
    <nav class="d-flex justify-content-center navbar navbar-expand-lg">
        <!--link go to home-->
        <a class="navbar-brand" href="/">Home</a>
        <!--/link go to home-->
        <!--link add a novel-->
        <a class="navbar-brand" href="{{ route ('novels.create')}}">New Novel</a>
        <!--/link add a novel-->
    </nav>
    <!--/navbar-->
</header>
<!--/header-->