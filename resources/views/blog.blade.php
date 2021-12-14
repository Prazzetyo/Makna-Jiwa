<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | Blog</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('blog.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/article.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
    <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{ url('/') }}">
          <img style="margin-right: 0.75rem"
            src="{{ asset('img/logo.png')}}" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rmpty-state') }}">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">About Us</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <a class="btn btn-fill text-white" href="#category">Let Us Help You</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/empty-state') }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">About Us</a>
            </li>
          </ul>
          <div class="gap-3">
            <a class="btn btn-fill text-white" href="#test">Let Us Help You</a>
          </div>
        </div>
      </nav>
    <div>

</section>
  <div class="container">
    <div class="intro my-5">
        <h2 class="text-center">Latest Articles</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
    </div>
    <div class="row articles">
      @foreach ($body->data as $article)
        <div class="col-sm-6 col-md-4 item mt-5"><a href="#">
            <img class="img-fluid" width="400" src="{{ $article->gambar }}"></a>
            <h3 class="pt-3 name">By {{ $article->penulis }}</h3>
            <p class="description">{{ $article->tanggal_terbit }}</p>           
            <a href="{{ url('/detail-blog/'.$article->id_artikel) }}" class="btn btn-primary">Read More</a>
        </div>
      @endforeach
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>