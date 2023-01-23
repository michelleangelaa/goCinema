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
            <div class="container-main m-5 " style="height:250px; justify-content:center;  display:flex; flex-direction:column; align-items:center">
                    <h1><b>Welcome to GoCinema</b></h1>
                    <div class="section m-2"></div>
                    <a type="button" href="{{url('movies')}}" class="btn px-4" style="background-color: #ff66c4; color:white">Watch 🎬</a>
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</head>
<body>
</body>
</html>
