<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "{{ mix ('css/app.css') }}">
    <script src = "{{ mix('js/app.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoCinema</title>
    
    <div>
        <x-navbar></x-navbar>
        <main>
            <div class ="form">
                <form method ="POST" action="{{route('movies.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" title="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Release Date" class="form-label">Release Date</label>
                        <input type="date" class="form-control" title="exampleInputPassword1">
                    </div>
                    <div class="input-group mb-3">
                    <div>
                        <label for="Release Date" class="form-label">Currently Showing</label>
                    </div>
                    <div class="input-group-prepend">

                    </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Select</option>
                            <option value="1">True</option>
                            <option value="2">False</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Poster</label>
                        <input type="file" class="form-control" title="picture">
                    </div>
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</head>
<body>
    
</body>
</html>