<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makna Jiwa | About Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="about-us.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
    <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{ url('/') }}">
          <img style="margin-right: 0.75rem"
            src="./img/logo.png" alt="" />
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
                    <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
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
              <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
            </li>
          </ul>
          <div class="gap-3">
            <a class="btn btn-fill text-white" href="#test">Let Us Help You</a>
          </div>
        </div>
      </nav>
      
      <!--===== ABOUT =====-->
      <section class="about section" id="about">
                <h2 class="section-title">About Us</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/perfil.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">Farrel Muhammad Iqbal Yufi</h2>
                        <span class="about__profession">UI/UX Designer and Frontend Developer</span>
                        <p class="about__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci consectetur, architecto quas fugiat, iste inventore facere repellendus delectus id, vitae blanditiis.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-dribbble' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about section" id="about">
                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/perfil.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">Muhammad Dwi Prasetyo</h2>
                        <span class="about__profession">Frontend and Backend Developer</span>
                        <p class="about__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci consectetur, architecto quas fugiat, iste inventore facere repellendus delectus id, vitae blanditiis.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-dribbble' ></i></a>
                        </div>
                    </div>
                </div>
            </section>
</body>
</html>