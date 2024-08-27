<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 h1">BizNest</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/">categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('load.trends') }}">Trending</a>
                    </li>


                </ul>
                <form class="d-flex">

                    <button class="btn btn-success me-4" type="submit">Sign Up</button>
                    <button class="btn btn-success" type ="submit">Sign in</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="album py-5 bg-dark">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/catering.jpg" class="card-img-top" alt="..." height="190 px"
                            width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Catering services</h5>
                            <h6>{{ $catering->Name }}</h6>
                            <p class="card-text">{{ $catering->Description }}</p>
                            <a href="/caterings/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/items.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Bakery Items</h5>
                            <h6>{{ $bakery->Name }}</h6>
                            <p class="card-text">{{ $bakery->Description }}</p>
                            <a href="/bakers/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/fur.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Furniture</h5>
                            <h6>{{ $fur->Name }}</h6>
                            <p class="card-text">{{ $fur->Description }}</p>
                            <a href="/furnis/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/kids.jpg" class="card-img-top" alt="..." height="190px" width="960px">
                        <div class="card-body">
                            <h5 class="card-title">Kids</h5>
                            <h6>{{ $kids->Name }}</h6>
                            <p class="card-text">{{ $kids->Description }}</p>
                            <a href="/kids/1" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/aromatic.jpg" class="card-img-top" alt="..." height="170 px"
                            width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Aromatic spices</h5>
                            <h6>{{ $aroma->Name }}</h6>
                            <p class="card-text">{{$aroma->Description}}</p>
                            <a href="/aromatics/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/bags.jpg" class="card-img-top" alt="..." height="140px"
                            width="960px">
                        <div class="card-body">
                            <h5 class="card-title">Bags</h5>
                            <h6>{{ $bag->Name }}</h6>
                            <p class="card-text">{{ $bag->Description }}</p>
                            <a href="/bags/1" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/images.jpg" class="card-img-top" alt="..." height="190 px"
                            width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Flowers</h5>
                            <h6>{{ $flower->Name }}</h6>
                            <p class="card-text">{{ $flower->Description }}</p>
                            <a href="/flowers/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/music.jpg" class="card-img-top" alt="..." height="190 px"
                            width="960 px">
                        <div class="card-body">
                            <h5 class="card-title">Music</h5>
                            <h6>{{ $music->Name }}</h6>
                            <p class="card-text">{{ $music->Description }}</p>
                            <a href="/musics/1" class="btn btn-success">view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <footer class="d-flex flex-wrap justify-content-between align-items-center py-5 my-0  border-top bg-secondary p-5"
        data-bs-theme="dark">
        <div class="col-md-4 d-flex align-items-center">

            <div class="copyright p-2">
                © Copyright <strong><span>2024</span></strong> All Rights Reserved-******
            </div>
        </div>
        <a href="#"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="/assest/logo.jpg" alt="..." width="100 px" height="32 px">
        </a>
        <div class="credits justify-content-end p-2">Desing &amp; Develop by <a href="#"
                style="text-decoration: none;">#Biz Team</a>
        </div>
    </footer>


</body>

</html>
