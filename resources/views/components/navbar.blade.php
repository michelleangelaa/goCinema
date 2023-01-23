<nav class="navbar navbar-light bg-light mx-4"  style="display:flex">
  <div class="container-fluid" style="display:flex">
    <a class="navbar-brand" href="#"><img src="{{ asset('/storage/images/assets/gocinemalogo.png') }}" alt="" width="200" height="auto" class="d-inline-block align-text-top"></a>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> --}}
      {{-- <span class="navbar-toggler-icon"></span>
    </button> --}}
    {{-- <div class="collapse navbar-collapse" id="navbarNav" style="display:flex"> --}}
      <ul class="navbar-nav" style="display:flex">
        <div style="display:flex">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/movies')}}">Movies</a>
          </li>
          <div class="space" style="color:white">_____________________________</div>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/cinemas')}}">Cinemas</a>
          </li>
          </div>
      </ul>
      <button type="button" class="btn" style="background-color: #ff66c4; color:white">Login</button>
    {{-- </div> --}}
  </div>
</nav>

