<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "{{ mix ('css/app.css') }}">
    <script src = "{{ mix('js/app.js') }}"></script>
    <link rel="icon" type="image/png" src="{{ asset('/storage/images/assets/gocinemafav.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoCinema</title>
    
    <div>
        
        <x-navbar></x-navbar>
        <main>
            <div class="container-movies">
                <h1>Currently Showing</h1>
                <div class="image-cards">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="movieposter">
                                <img src="{{ asset('/storage/images/assets/avatar.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="movieposter">
                                <img src="{{ asset('/storage/images/assets/cektokosebelah.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="movieposter">
                                <img src="{{ asset('/storage/images/assets/m3gan.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            
                <div class="cards">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($current as $c)
                        <div class="col">
                            <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$c->title}}</h5>
                                <div class = "like-section">
                                    <a href="">
                                    <img src = "{{ asset('/storage/images/assets/like.png') }}" ></a>
                                    <h6 class="card-text">{{$c->likes}}</h6>
                                    
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach  
                    </div>
                </div>

            <div class="pt-5"></div>
            <div></div>
            <div></div>

            <h1>Coming Soon</h1>
            <div class="image-cards">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="movieposter" style="">
                            <img src="{{ asset('/storage/images/assets/thequietgirl.jpg') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="movieposter" style="">
                            <img src="{{ asset('/storage/images/assets/amancalledotto.jpg') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="movieposter" style="">
                            <img src="{{ asset('/storage/images/assets/infinitypool.jpg') }}" class="card-img-top" alt="...">
                        </div>
                    </div>

                </div>
            </div>
            <div class="cards">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($upcoming as $u)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$u->title}}</h5>
                                <div class = "like-section" style="display:flex;height: 30px">
                                    <img src = "{{ asset('/storage/images/assets/like.png') }}" >
                                    <h6 class="card-text">{{$u->likes}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach  
                </div>

            </div>
        </main>
        <x-footer></x-footer>
    </div>
</head>
<body>
</body>
</html>
