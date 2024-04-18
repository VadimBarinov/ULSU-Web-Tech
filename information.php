<!DOCTYPE html>
<html lang="en ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О себе</title>
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
      $page = 'info';
      include 'nav_menu.php';
    ?>

    <!-- текст о себе -->
    <div class="container border-bottom">
      <div class="my-info-text-32">
        <h1>О себе</h1>
        <div
          class="my-info-text-16 row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-sm-1 d-flex"
        >
          <p>
            Eu non diam phasellus vestibulum lorem. Fringilla est ullamcorper
            eget nulla facilisi etiam dignissim. Id diam vel quam elementum
            pulvinar.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
            pellentesque at bibendum euismod tellus duis cursus dignissim odio.
            Sit vulputate et integer in. Sit vel, senectus iaculis morbi. Amet
            interdum imperdiet laoreet morbi tincidunt fermentum, libero. Ante
            enim eget.
          </p>
          <p>
            Elementum eu facilisis sed odio morbi quis commodo. Sed odio morbi
            quis commodo odio aenean sed adipiscing odio diam. uno fablotoson
            louw uit.
          </p>
        </div>
      </div>
    </div>

    <!-- карточка -->
    <div class="container my-info-card-container-lg">
      <div class="my-founder-text-32">
        <h1>Основатель</h1>
      </div>
      <div>
        <div class="my-info-card-lg">
          <img src="res/me.png" class="d-block col-5" />
          <div class="card-body row row-cols-1">
            <div>
              <img src="res/velo.svg" class="d-block col-3 my-velo-logo" />
            </div>
            <div class="my-info-card-text-lg">
              <h2>Баринов Вадим</h2>
              <p class="card-text">
                Lorem ipsum dolor sit amet con sectet piscing elit, sed do
                eiusmod tempor rarylet podofcast.
              </p>
            </div>
            <div class="my-btn-info-box">
              <a
                href="https://t.me/I_wawawa_I"
                target="_blank"
                class="btn btn-outline-primary me-2 my-btn-info-2"
                >Telegram</a
              >
              <a
                href="https://github.com/VadimBarinov"
                target="_blank"
                class="btn btn-outline-primary me-2 my-btn-info-1"
                >GitHub</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-info-card-container-sm">
      <div class="my-founder-text-32">
        <h1>Основатель</h1>
      </div>
      <div>
        <div class="my-info-card-sm">
          <img src="res/me.png" class="d-block col-12" />
          <div class="card-body my-info-card-text-sm">
            <h2>Баринов Вадим</h2>
            <p class="card-text my-info-card-text-sm">
              Lorem ipsum dolor sit amet con sectet piscing elit, sed do eiusmod
              tempor rarylet podofcast.
            </p>
          </div>
          <div class="text-end">
            <a
              href="https://github.com/VadimBarinov"
              target="_blank"
              class="btn btn-outline-primary me-2"
              >GitHub</a
            >
            <a
              href="https://t.me/I_wawawa_I"
              target="_blank"
              class="btn btn-outline-primary me-2"
              >Telegram</a
            >
          </div>
        </div>
      </div>
    </div>
    <?
      include 'footer_menu.php';
    ?>
    <script src="js/scriptLoginForm.js"></script>
    <script src="js/scriptRegForm.js"></script>
  </body>
</html>
