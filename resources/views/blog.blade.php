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
@include('partials.navbar')

</section>
  <div class="container">
    <div class="intro my-5">
        <h2 class="text-center">Latest Articles</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
    </div>
    <div class="row articles">
      @foreach ($body as $article)
        <div class="col-sm-6 col-md-4 item mt-5"><a href="#">
            <img class="img-fluid" width="400" src="{{ $article->gambar }}"></a>
            <h3 class="pt-3 name">By {{ $article->penulis }}</h3>
            <p class="description">{{ $article->tanggal_terbit }}</p>           
            <a href="{{ url('/detail-blog/'.$article->id_artikel) }}" class="btn btn-primary">Read More</a>
        </div>
      @endforeach
    </div>
  </div>

  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>