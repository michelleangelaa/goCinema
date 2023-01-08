<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "{{ mix ('css/app.css') }}">
    <link rel="icon" type="image/png" src="{{ asset('/storage/images/assets/gocinemafav.png') }}>
    <script src = "{{ mix('js/app.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoCinema</title>
    
    <div>
        
        <x-navbar></x-navbar>
        <main>
            <p>Welcome to GoCinema</p>
            <div class="cards">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        {{-- @foreach ( as )
                        @endforeach --}}
                        <div class="card h-100">
                        <img src="{{ asset('/storage/images/assets/avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{}}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a short card.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        </div>
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
