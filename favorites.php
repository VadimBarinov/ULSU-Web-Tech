<!DOCTYPE html>
<html lang="en ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Избранное</title>
    <script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous"></script>
		
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="res/favicon_io/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="res/favicon_io/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="res/favicon_io/favicon-16x16.png"
    />
    <link rel="manifest" href="res/favicon_io/site.webmanifest" />
  </head>
  <body>
    <?
      $page = 'favorite';
      include 'nav_menu.php';
    ?>
    <!-- форма стереть избранное -->
    <div
      class="modal fade"
      id="clearModal"
      tabindex="-1"
      aria-labelledby="clearModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div>
            <div class="my-modal-close-btn">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
          </div>
          <div>
            <h1 class="modal-title fs-5 my-modal-title" id="clearModalLabel">
              Очистить избранное?
            </h1>
          </div>
          <div class="modal-footer my-modal-footer-clear">
            <!-- временное решение для демонстрации -->
            <!-- нужно будет сделать метод на js и убрать ссылку -->
            <button
              type="button"
              class="btn btn-outline-primary me-2"
              onclick="window.location.href = 'favorites.php'"
            >
              Стереть
            </button>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              Отмена
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- фильтр -->
    <div class="container">
      <div class="my-catalog-filter">
        <form id="searchForm" name="searchForm">
          <div class="mb-3 input-box my-search-box">
            <input
              class="form-control"
              placeholder="Поиск"
              type="text"
              id="searchFormValue"
              name="searchFormValue"
            />
            <img src="res/search.svg" class="my-search-icon" />
          </div>
        </form>
      </div>
    </div>

    <!-- карточки -->
    <div class="container my-5">
      <div
        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 my-card-container"
      >
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/gt_aggressor.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">GT 27.5 AGGRESSOR SPORT</h5>
              <p class="card-text">
                Только начинаете свой путь в мир маунтинбайка или уже являетесь
                опытным специалистом в неспешных поездках по городу и за его
                пределами – с самым универсальным и самым доступным в серии
                AGGRESSOR SPORT каждый ваш выезд будет сопровождаться комфортом
                и удовольствием. Как и более дорогие трейл-хартейлы, этот байк
                оборудован качественными компонентами комплектации и представлен
                в двух вариантах.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/jamis_durango.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Jamis DURANGO A2</h5>
              <p class="card-text">
                Горный велосипед, построенный на легкой алюминиевой раме и
                укомплектованный большими колесами не обязан быть непременно
                гоночным и дорогим. Если более расслабленная, чем спортивная,
                посадка не делает вас намного медленнее, если вы считаете, что
                дорогие гоночные компоненты не стоят больших вложений, а лучший
                приз, ожидающий вас в конце поездки – заряд бодрости и
                удовольствия, Durango А2 полностью оправдает ваши ожидания и
                приятно обрадует не только своей надежностью и ценой, но и
                уверенной управляемостью.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_rudeway.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RUDEWAY A3</h5>
              <p class="card-text">
                Верхний сегмент универсальных алю-грэвелов - Rudeway A. Как и
                положено старшей модели, он собран на крепких и легких
                компонентах, подобранных таким образом, чтобы обеспечивать
                универсальность и скоростные характеристики. Рама в дизайне AGG
                (Adventure Gravel Geometry) создана для гравийных покатушек и
                скоростных поездок по асфальту. Так-же были обновлены основные
                трубы рамы, добавлены технологии гидроформинга и баттинга, что
                позволило снизить вес рамы. Rudeway A предназначен для скорости
                и универсальности, на таком "снаряде" можно проехать бревет или
                отправиться в многодневное путешествие. Универсальный велосипед,
                только вам решать, каким он будет сегодня: загруженным под
                завязку турингом, агрессивным грэвелом или же коммутером с
                багажником.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col my-card-col">
          <div
            class="card border"
            onclick="window.location.href = 'element_not_favorite.php'"
          >
            <img src="res/outleap_radius.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Outleap RADIUS ELITE 29</h5>
              <p class="card-text">
                Radius - продвинутая модель для прогулочного и спортивного
                катания. Отлично подходит для прогулочного и тренировочного
                катания, так-же имеет задел для старта в любительских
                кросс-кантри гонках.
              </p>
              <div class="d-flex align-items-center">
                <a href="#" class="btn-favorites"
                  ><img src="res/grad_heart.svg" alt=""
                /></a>
                <div class="my-card-btn btn-favorites">
                  <button class="btn btn-outline-primary" type="button">
                    В избранном
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- стереть избранное -->
    <div class="text-center">
      <button
        class="btn btn-clear-text"
        data-bs-toggle="modal"
        data-bs-target="#clearModal"
        type="button"
      >
        Очистить избранное
      </button>
    </div>
    <?
      include 'footer_menu.php';
    ?>
    <script src="js/functions.js"></script>
    <script src="js/scriptLoginForm.js"></script>
    <script src="js/scriptRegForm.js"></script>
    <script src="js/catalogFilter.js"></script>
  </body>
</html>
