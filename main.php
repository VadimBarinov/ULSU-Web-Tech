<!DOCTYPE html>
<html lang="en ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
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
      $page = 'main';
      if($_COOKIE['id_login']){
        include 'nav_menu_login.php';
      } else {
        include 'nav_menu.php';
      }
    ?>
    <!-- карусель -->
    <div class="container my-carousel border my-border">
      <div
        id="carouselExampleDark"
        class="carousel carousel-dark slide"
        data-bs-ride="carousel"
      >
        <!-- индикаторы карусели -->
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="0"
            class="active btn"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="1"
            class="btn"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="2"
            class="btn"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to="3"
            class="btn"
            aria-label="Slide 4"
          ></button>
        </div>
        <!-- слайды карусели -->
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div
              class="carousel-container-lg"
              onclick="window.location.href = 'element.php?paramId=1'"
            >
              <img
                src="res/outleap_radius.png"
                class="d-block w-200 carousel-image-lg col-7"
              />
              <div class="carousel-text-lg col-5">
                <h5>Outleap RADIUS ELITE 29</h5>
                <p>
                  Radius - продвинутая модель для прогулочного и спортивного
                  катания. Отлично подходит для прогулочного и тренировочного
                  катания, так-же имеет задел для старта в любительских
                  кросс-кантри гонках. Обновленная рама представлена в геометрии
                  MXG (Modern X-Country Geometry), но в отличии от старшей
                  модели Vector, имеет прицел в сторону комфорта.Radius Expert
                  оснащен надежными и легкими компонентами: колеса на "промах",
                  система трансмиссии Shimano Cues, а в качестве вилки SR
                  Suntour c блокировкой. Остальные компоненты так-же подобраны
                  со специализацией под тренировки и прогулочное катание.
                  Отдельно хочется отметить качественный завораживающие цвета, с
                  Fade переходом на перьях, и "бесшовный" вид рамы, что в
                  совокупности дарит настоящее визуальное удовольствие.
                </p>
              </div>
            </div>
            <div
              class="carousel-container-sm"
              onclick="window.location.href = 'element.php?paramId=1'"
            >
              <img
                src="res/outleap_radius.png"
                class="d-block w-100 carousel-image-sm col-7"
              />
              <div class="carousel-text-sm">
                <h5>Outleap RADIUS ELITE 29</h5>
                <p>
                  Radius - продвинутая модель для прогулочного и спортивного
                  катания. Отлично подходит для прогулочного и тренировочного
                  катания, так-же имеет задел для старта в любительских
                  кросс-кантри гонках. Обновленная рама представлена в геометрии
                  MXG (Modern X-Country Geometry), но в отличии от старшей
                  модели Vector, имеет прицел в сторону комфорта.Radius Expert
                  оснащен надежными и легкими компонентами: колеса на "промах",
                  система трансмиссии Shimano Cues, а в качестве вилки SR
                  Suntour c блокировкой. Остальные компоненты так-же подобраны
                  со специализацией под тренировки и прогулочное катание.
                  Отдельно хочется отметить качественный завораживающие цвета, с
                  Fade переходом на перьях, и "бесшовный" вид рамы, что в
                  совокупности дарит настоящее визуальное удовольствие.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div
              class="carousel-container-lg"
              onclick="window.location.href = 'element.php?paramId=3'"
            >
              <img
                src="res/gt_aggressor.jpg"
                class="d-block w-200 carousel-image-lg col-7"
              />
              <div class="carousel-text-lg col-5">
                <h5>GT 27.5 AGGRESSOR SPORT</h5>
                <p>
                  Только начинаете свой путь в мир маунтинбайка или уже
                  являетесь опытным специалистом в неспешных поездках по городу
                  и за его пределами – с самым универсальным и самым доступным в
                  серии AGGRESSOR SPORT каждый ваш выезд будет сопровождаться
                  комфортом и удовольствием. Как и более дорогие трейл-хартейлы,
                  этот байк оборудован качественными компонентами комплектации и
                  представлен в двух вариантах.
                </p>
              </div>
            </div>
            <div
              class="carousel-container-sm"
              onclick="window.location.href = 'element.php?paramId=3'"
            >
              <img
                src="res/gt_aggressor.jpg"
                class="d-block w-100 carousel-image-sm col-7"
              />
              <div class="carousel-text-sm">
                <h5>GT 27.5 AGGRESSOR SPORT</h5>
                <p>
                  Только начинаете свой путь в мир маунтинбайка или уже
                  являетесь опытным специалистом в неспешных поездках по городу
                  и за его пределами – с самым универсальным и самым доступным в
                  серии AGGRESSOR SPORT каждый ваш выезд будет сопровождаться
                  комфортом и удовольствием. Как и более дорогие трейл-хартейлы,
                  этот байк оборудован качественными компонентами комплектации и
                  представлен в двух вариантах.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div
              class="carousel-container-lg"
              onclick="window.location.href = 'element.php?paramId=4'"
            >
              <img
                src="res/jamis_durango.jpg"
                class="d-block w-200 carousel-image-lg col-7"
              />
              <div class="carousel-text-lg col-5">
                <h5>Jamis DURANGO A2</h5>
                <p>
                  Горный велосипед, построенный на легкой алюминиевой раме и
                  укомплектованный большими колесами не обязан быть непременно
                  гоночным и дорогим. Если более расслабленная, чем спортивная,
                  посадка не делает вас намного медленнее, если вы считаете, что
                  дорогие гоночные компоненты не стоят больших вложений, а
                  лучший приз, ожидающий вас в конце поездки – заряд бодрости и
                  удовольствия, Durango А2 полностью оправдает ваши ожидания и
                  приятно обрадует не только своей надежностью и ценой, но и
                  уверенной управляемостью.
                </p>
              </div>
            </div>
            <div
              class="carousel-container-sm"
              onclick="window.location.href = 'element.php?paramId=4'"
            >
              <img
                src="res/jamis_durango.jpg"
                class="d-block w-100 carousel-image-sm col-7"
              />
              <div class="carousel-text-sm">
                <h5>Jamis DURANGO A2</h5>
                <p>
                  Горный велосипед, построенный на легкой алюминиевой раме и
                  укомплектованный большими колесами не обязан быть непременно
                  гоночным и дорогим. Если более расслабленная, чем спортивная,
                  посадка не делает вас намного медленнее, если вы считаете, что
                  дорогие гоночные компоненты не стоят больших вложений, а
                  лучший приз, ожидающий вас в конце поездки – заряд бодрости и
                  удовольствия, Durango А2 полностью оправдает ваши ожидания и
                  приятно обрадует не только своей надежностью и ценой, но и
                  уверенной управляемостью.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div
              class="carousel-container-lg"
              onclick="window.location.href = 'element.php?paramId=5'"
            >
              <img
                src="res/outleap_rudeway.jpg"
                class="d-block w-200 carousel-image-lg col-7"
              />
              <div class="carousel-text-lg col-5">
                <h5>Outleap RUDEWAY A3</h5>
                <p>
                  Верхний сегмент универсальных алю-грэвелов - Rudeway A. Как и
                  положено старшей модели, он собран на крепких и легких
                  компонентах, подобранных таким образом, чтобы обеспечивать
                  универсальность и скоростные характеристики. Рама в дизайне
                  AGG (Adventure Gravel Geometry) создана для гравийных
                  покатушек и скоростных поездок по асфальту. Так-же были
                  обновлены основные трубы рамы, добавлены технологии
                  гидроформинга и баттинга, что позволило снизить вес рамы.
                  Rudeway A предназначен для скорости и универсальности, на
                  таком "снаряде" можно проехать бревет или отправиться в
                  многодневное путешествие. Универсальный велосипед, только вам
                  решать, каким он будет сегодня: загруженным под завязку
                  турингом, агрессивным грэвелом или же коммутером с багажником.
                </p>
              </div>
            </div>
            <div
              class="carousel-container-sm"
              onclick="window.location.href = 'element.php?paramId=5'"
            >
              <img
                src="res/outleap_rudeway.jpg"
                class="d-block w-100 carousel-image-sm col-7"
              />
              <div class="carousel-text-sm">
                <h5>Outleap RUDEWAY A3</h5>
                <p>
                  Верхний сегмент универсальных алю-грэвелов - Rudeway A. Как и
                  положено старшей модели, он собран на крепких и легких
                  компонентах, подобранных таким образом, чтобы обеспечивать
                  универсальность и скоростные характеристики. Рама в дизайне
                  AGG (Adventure Gravel Geometry) создана для гравийных
                  покатушек и скоростных поездок по асфальту. Так-же были
                  обновлены основные трубы рамы, добавлены технологии
                  гидроформинга и баттинга, что позволило снизить вес рамы.
                  Rudeway A предназначен для скорости и универсальности, на
                  таком "снаряде" можно проехать бревет или отправиться в
                  многодневное путешествие. Универсальный велосипед, только вам
                  решать, каким он будет сегодня: загруженным под завязку
                  турингом, агрессивным грэвелом или же коммутером с багажником.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- кнопка назад -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="prev"
        >
          <img src="res/prev.svg" aria-hidden="true" alt="prev" />
          <span class="visually-hidden">Previous</span>
        </button>
        <!-- кнопка вперед -->
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="next"
        >
          <img src="res/next.svg" aria-hidden="true" alt="next" />
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- открывает каталог -->
    <div class="container my-view-all">
      <div class="my-view-all-container">
        <a class="nav-link" aria-current="page" href="catalog.php">
          Посмотреть все <img src="res/right.svg" alt="" />
        </a>
      </div>
    </div>

    <!-- карточки -->
    <div class="container my-5">
      <div
        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 my-card-container"
      >
        <?foreach ($products as $product):?>
          <div class="col my-card-col">
            <div
              class="card border"
              onclick="window.location.href = 'element.php?paramId=<?=$product['id']?>'"
            >
              <img src="<?=$product['image']?>" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"><?=$product['name']?></h5>
                <p class="card-text">
                <?=$product['description']?>
                </p>
                <div class="d-flex align-items-center">
                  <div class="btn-favorites">
                    <button class="btn btn-heart" onclick="clickOnHeart(<?=$product['id']?>)" type="button">
                      <img src="<? echo (in_array($product['id'],$massWithFavorites)) ? "res/grad_heart.svg" : "res/black_heart.svg"; ?>" 
                        id="clickOnHeart<?=$product['id']?>"/>
                    </button>
                  </div>
                  <div class="my-card-btn btn-favorites">
                    <button class="btn <? echo (in_array($product['id'],$massWithFavorites)) ? "btn-outline-primary" : "btn-primary"; ?>" 
                    id="clickOnBtnFavorite<?=$product['id']?>" 
                    onclick="clickOnHeart(<?=$product['id']?>)" type="button">
                      <? echo (in_array($product['id'],$massWithFavorites)) ? "В избранном" : "В избранное"; ?>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?endforeach?>
      </div>
    </div>
    <?
    include 'footer_menu.php';
    ?>
    <script src="js/functions.js"></script>
    <script src="js/scriptLoginForm.js"></script>
    <script src="js/scriptRegForm.js"></script>
    <script src="js/goOut.js"></script>
  </body>
</html>
