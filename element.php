<!DOCTYPE html>
<html lang="en ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Каталог</title>
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
      $page = 'catalog';
      include 'nav_menu.php';
    ?>
    <div class="container">
      <div
        class="row row-cols-1 row-cols-md-1 row-cols-lg-2 my-element-container border-bottom"
      >
        <div class="my-element-name">
          <h1>Outleap RADIUS ELITE 29</h1>
        </div>
        <div class="d-flex align-items-center">
          <div class="my-element-btn-container d-flex align-items-center">
            <div>
              <button
                class="btn btn-primary my-element-btn-primary"
                type="button"
              >
                В избранное
              </button>
            </div>
            <a href="#"><img src="res/black_heart_large.svg" alt="" /></a>
          </div>
        </div>
        <img
          src="res/outleap_radius.png"
          class="d-block w-200 my-element-img"
          alt="Outleap RADIUS ELITE 29"
        />
        <div class="my-element-info">
          <p>
            Radius - продвинутая модель для прогулочного и спортивного катания.
            Отлично подходит для прогулочного и тренировочного катания, так-же
            имеет задел для старта в любительских кросс-кантри
            гонках.Обновленная рама представлена в геометрии MXG (Modern
            X-Country Geometry), но в отличии от старшей модели Vector, имеет
            прицел в сторону комфорта:<br />• Заваленный угол рулевой в 68
            градусов даст хорошую проходимость и плавное управление на скорости
            <br />• Удлинённый передний треугольник предлагает современную
            спортивную посадку с улучшенным комфортом<br />• Короткий задний
            треугольник добавит маневренности и ускорения<br />• Заниженный
            стендовер для большей свободы в движении над байком и низкий центр
            масс
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="my-element-detail">
        <h1>Характеристики</h1>
      </div>
      <div
        class="row row-cols-2 row-cols-md-2 row-cols-lg-2 my-element-detail-container"
      >
        <div class="my-element-detail-column text-start border-bottom">
          <p>Бренд:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>Outleap</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Сезон:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>2024</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Пол:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>унисекс</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Возраст:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>для взрослых</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Тип велосипеда:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>хардтейл</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Назначение:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>Кросскантри</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Крепление колеса:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>эксцентрик</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Уровень оборудования:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>начальный улучшенный</p>
        </div>
        <div class="my-element-detail-column text-start border-bottom">
          <p>Материал рамы:</p>
        </div>
        <div class="my-element-detail-column text-end border-bottom">
          <p>алюминий</p>
        </div>
      </div>
    </div>
    <?
      include 'footer_menu.php';
    ?>
    <script src="js/functions.js"></script>
    <script src="js/title.js"></script>
    <script src="js/scriptLoginForm.js"></script>
    <script src="js/scriptRegForm.js"></script>
  </body>
</html>
