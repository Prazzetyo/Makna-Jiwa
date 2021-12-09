<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makna Jiwa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('quiz.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
    <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
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
                    <a class="nav-link" href="#">Advice</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
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
              <a class="nav-link" href="#">Advice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <div class="gap-3">
            <a class="btn btn-fill text-white" href="#test">Let Us Help You</a>
          </div>
        </div>
      </nav>

    <div>

    <!-- quiz box -->
    <div class="box">
        <header>
            <div class="title">Anxiety Test</div>
        </header>
        <section>
          @foreach ($body->data as $quiz)
            <div class="que_text">
                <span>{{$quiz->soal}}</span>
            </div>
            <div class="option_list">
                <div class="option form-check-inline ms-5">
                  <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                  <label class="btn btn-outline-success" for="option1">{{$quiz->opsi_a}}</label>
                </div>
                <div class="option form-check-inline">
                  <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                  <label class="btn btn-outline-success" for="option2">{{$quiz->opsi_b}}</label>
                </div>
                <div class="option form-check-inline">
                  <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                  <label class="btn btn-outline-success" for="option3">{{$quiz->opsi_c}}</label>
                </div>
                <div class="option form-check-inline">
                  <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                  <label class="btn btn-outline-success" for="option4">{{$quiz->opsi_d}}</label>
                </div>
                <div class="option form-check-inline">
                  <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                  <label class="btn btn-outline-success" for="option5">{{$quiz->opsi_e}}</label>
                </div>
            </div>  
            @endforeach
        </section>

        <footer>
            <button class="next_btn">Submit</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="complete_text">Kamu telah menyelasaikannya. <br>
            Silahkan tombol hasil untuk melihat solusi untuk diri anda.</div>
        <div class="button">
            <button class="result">Hasil</button>
        </div>
    </div>

    <script src="js/questions.js"></script>
    <script src="{{ asset('script.js')}}"></script>
</body>
</html>