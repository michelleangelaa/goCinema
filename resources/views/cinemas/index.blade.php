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
            <div class="container-movies m-5">
                <h1>Cinemas</h1>
                <div class="cards">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($bioskop as $c)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$c->name}}</h5>
                                    <h5 class="card-title">{{$c->region}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach  
                    </div>
                </div>
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</head>
<body>
</body>
</html>
