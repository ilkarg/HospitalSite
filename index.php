<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Здоровье</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="gooey hidden">
    <div class="loader-dots">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <section>
    <nav class="navbar navbar-expand-lg shadow p-0 mb-5 fixed-top" style="background-color:#2fa6eb;">
      <div class="container">
        <a href="#" class="navbar-brand text-white"><img src="assets/img/logo.png" width="50px" height="50px" alt=""
            style="margin-right:10px;">Здоровье</a>
        <button height="10" class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-three-dots"
            viewBox="0 0 16 16">
            <path
              d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
          </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#departaments">Наши отделения</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#appointment">Запись на приём</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#doctors">Наши доктора</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#about">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="#contacts">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item slide1 active">
          <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
          <div style="color:#00376b;" class="carousel-caption">
            <h4 style="text-shadow: 1.2px 1.2px 1.2px gray">Высококвалифицированные специалисты</h4>
            <h5 style="text-shadow: 1.2px 1.2px 1.2px gray">В нашей больнице работают только самые опытные врачи со стажем работы более 10 лет.</h5>
          </div>
        </div>
        <div class="carousel-item slide1">
          <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
          <div style="color:#00376b;" class="carousel-caption">
            <h4 style="text-shadow: 1.2px 1.2px 1.2px gray">Современные технологии</h4>
            <h5 style="text-shadow: 1.2px 1.2px 1.2px gray">В нашей больницы только самые современные технологии, чтобы мы могли как можно быстрее и лучше помогать нашим пациентам.</h5>
          </div>
        </div>
        <div class="carousel-item slide1">
          <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
          <div style="color:#00376b;" class="carousel-caption ">
            <h4 style="text-shadow: 1.2px 1.2px 1.2px gray">Отзывчивый персонал</h4>
            <h5 style="text-shadow: 1.2px 1.2px 1.2px gray">Персонал нашей больницы всегда отличался отзывчивостью. Мы всегда готовы выслушать наших пациентов и помочь им.</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
  </section>
  <section class="pt-5 pb-5" style="background-color:white;" id="departaments">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pb-5">
          <div class="text-center">
            <h3 class="text-center tit2">
              Наши Отделения
            </h3>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px;color:#f2356e;"
                  class="fas fa-brain"></i><br>Неврология</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px;color:#eb1010;"
                  class="fas fa-ambulance"></i></i><br>Приёмная</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px;color:#1b72f5;"
                  class="fas fa-eye"></i><br>Челюстно-Лицевая хирургия</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px;color:#f2356e;"
                  class="fas fa-lungs"></i><br>Пульмонология</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px;color:#eb1010;"
                  class="fas fa-heartbeat"></i><br>Кардиология</h4>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
          <div class="service-item">
            <a>
              <h4 class="text-center mt-4 pb-4"><i style="font-size:50px; color:#f7c443;"
                  class="fas fa-bone"></i><br>Травматология</h4>
            </a>
          </div>
        </div>
  </section>

  <section class="section-booking" id="appointment">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 pb-5 pt-5">
          <div style="padding-top:50px;" class="text-center m-auto">
            <img style="border-radius:10px; width:100%;" src="assets/img/5.jpg" alt="IMG-OUR">
          </div>
        </div>
        <div class="col-lg-6 pb-5">
          <div class="text-center pt-5">
            <span class="tit3 text-center">
              Записаться на приём
            </span>
          </div>

          <div class="pt-5">
            <div class="row">
              <div class="col-md-6">
                <!-- Date -->
                <span class="txt9">
                  Дата
                </span>

                <div class="position-relative txt10 mt-2 mb-4">

                  <input type="date" id="appointment-date" class="form-control" name="date" placeholder="Дата">
                </div>

                <!-- Time -->
                <span class="txt9">
                  Время
                </span>

                <div class="mt-2 mb-4">
                  <!-- Select2 -->
                  <input type="time" id="appointment-time" class="form-control" name="time" placeholder="Время">
                </div>

                <!-- People -->
                <span class="txt9">
                  На что жалуетесь?
                </span>

                <div class="position-relative txt10 mt-2 mb-4">
                  <!-- Select2 -->
                  <input type="text" id="appointment-complaints" class="form-control" name="number" placeholder="Жалобы" required>
                </div>
              </div>

              <div class="col-md-6">
                <!-- Name -->
                <span class="txt9">
                  Представьтесь
                </span>

                <div class="position-relative mt-2 mb-4">
                  <input class="form-control" id="appointment-fio" type="text" name="name" placeholder="Ф.И.О.">
                </div>

                <!-- Phone -->
                <span class="txt9">
                  Телефон
                </span>

                <div class="position-relative txt10 mt-2 mb-4">
                  <input class="form-control" id="appointment-phone" type="number" name="phone" placeholder="Телефон">
                </div>

                <!-- Email -->
                <span class="txt9">
                  Email
                </span>

                <div class="position-relative txt10 mt-2 mb-4">
                  <input class="form-control" id="appointment-email" type="email" name="email" placeholder="Email">
                </div>
              </div>
            </div>

            <div class="col-lg-12 mt-5 text-center">
              <!-- Button3 -->
              <button style="font-size:20px;" class="btn btn-primary rounded-pill" onclick="addAppointment()" type="submit">Записаться</button>
            </div>
</div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pb-5" id="doctors">
    <div class="col-md-12">
      <div class="text-center">
        <h3 class="text-center tit2">Наши Доктора</h3>
      </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container d-flex">
            <div class="col-md-4 mb-8 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/6.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Дмитрий Одарченко</h5>
                  <p class="mb-0">Ортопед, Травматолог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/7.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Юлия Заводова</h5>
                  <p class="mb-0">Акушер-гинеколог, Гинеколог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/8.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Елена Тихонова</h5>
                  <p class="mb-0">Терапевт</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4"> 20 лет Стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <div class="container d-flex">
            <div class="col-md-4 mb-8 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/6.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Дмитрий Одарченко</h5>
                  <p class="mb-0">Ортопед, Травматолог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/7.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Юлия Заводова</h5>
                  <p class="mb-0">Акушер-гинеколог, Гинеколог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/8.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Елена Тихонова</h5>
                  <p class="mb-0">Терапевт</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4"> 20 лет Стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <div class="container d-flex">
            <div class="col-md-4 mb-8 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/6.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Дмитрий Одарченко</h5>
                  <p class="mb-0">Ортопед, Травматолог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/7.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Юлия Заводова</h5>
                  <p class="mb-0">Акушер-гинеколог, Гинеколог</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4">14 лет стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pt-5 pb-5 mb-md-0">
              <div class="card h-100 card-span shadow">
                <div class="card-body m-auto text-center d-flex flex-column">
                  <img src="assets/img/8.jpg" style="border:10px solid #eaf0ff; border-radius:100%;" width="100%" alt="...">
                  <h5 class="mt-3">Елена Тихонова</h5>
                  <p class="mb-0">Терапевт</p>
                  <p class="mb-0">Россия, Омск</p>
                  <p class="mb-4"> 20 лет Стажа</p>
                  <div class="text-center">
                    <button class="btn btn-outline-primary rounded-pill" type="submit">Смотреть профиль</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
  </section>
  <section class="" style="background-color:#b0deff">
    <div class="container" id="about">
      <div class="row pt-5 pb-5">
        <div class="col-md-12 pb-5">
          <div class="text-center">
            <h3 class="text-center tit2">
              О нас
            </h3>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 pt-3 pb-5">
          <div class="text-left">
            <span style="color:#001aff;" class="tit2">
              Мы развиваем вокруг вас систему здравоохранения
            </span>

            <p style="color:#002e63; font-size:20px;" class="mt-5 pt-2 mb-5 m-auto">
              Мы считаем, что у каждого должен быть легкий доступ к отличному
              медицинскому обслуживанию. Наша цель - максимально упростить процедуру
              для наших пациентов и предложить лечение независимо от того,
              где они находятся - лично или в удобное для них время.
            </p>
          </div>
          <div class="col-lg-12 pt-5 text-center">
            <!-- Button3 -->
            <button style="font-size:20px;" type="button" class="btn btn-primary">Узнать больше</button>
          </div>
        </div>

        <div class="col-md-6 pt-3 text-center">
          <div class="m-auto">
            <img src="assets/img/4.jpg" alt="IMG-OUR">
          </div>
        </div>
  </section>
  
  <footer class="footer">
    <div class="container pb-3">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="logo pt-5">
            <img src="assets/img/logo.png" href="#" width="40px" height="40px" alt="" style="margin-right:10px;"><a href="#"
              class="text-white"> Здоровье </a>
          </h2>
        </div>
        <div class="col-sm-4">
          <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#departaments">Наши отделения</a></li>
            <li><a href="#appointment">Запись на приём</a></li>
            <li><a href="#doctors">Наши доктора</a></li>
            <li><a href="#about">О нас</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </div>
        <div class="col-sm-2" id="contacts">
          <h5>Контакты</h5>
          <ul>
            <li><a href="tel:88184532683">8 (8184) 53-26-83</a></li>
            <li><a href="mailto:hospit2@yandex.ru">hospit2@yandex.ru</a></li>
            <li><a>ул. К. Маркса, д. 48.</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <p>© 2023 Здоровье </p>
    </div>
  </footer>

  <script src="assets/js/jquery-3.7.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>