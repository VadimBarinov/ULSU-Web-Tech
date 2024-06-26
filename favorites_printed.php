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
      if($_COOKIE['id_login']){
        include 'nav_menu_login.php';
      } else {
        include 'nav_menu.php';
      }
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
            <button
              type="button"
              class="btn btn-outline-primary me-2"
              onclick="delAllFavorites()"
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
        <?foreach ($productsFavorites as $productFavorites):?>
          <div class="col my-card-col">
            <div
              class="card border"
              onclick="window.location.href = 'element.php?paramId=<?=$productFavorites['id']?>'"
            >
              <img src="<?=$productFavorites['image']?>" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"><?=$productFavorites['name']?></h5>
                <p class="card-text">
                <?=$productFavorites['description']?>
                </p>
                <div class="d-flex align-items-center">
                <div class="btn-favorites">
                    <button class="btn btn-heart" onclick="clickOnHeart(<?=$productFavorites['id']?>)" type="button">
                      <img src="<? echo (in_array($productFavorites['id'],$massWithFavorites)) ? "res/grad_heart.svg" : "res/black_heart.svg"; ?>" 
                        id="clickOnHeart<?=$productFavorites['id']?>"/>
                    </button>
                  </div>
                  <div class="my-card-btn btn-favorites">
                    <button class="btn <? echo (in_array($productFavorites['id'],$massWithFavorites)) ? "btn-outline-primary" : "btn-primary"; ?>" 
                    id="clickOnBtnFavorite<?=$productFavorites['id']?>" 
                    onclick="clickOnHeart(<?=$productFavorites['id']?>)" type="button">
                      <? echo (in_array($productFavorites['id'],$massWithFavorites)) ? "В избранном" : "В избранное"; ?>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?endforeach?>
      </div>
    </div>

    <!-- стереть избранное -->
    <?if($_COOKIE['id_login']):?>
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
    <?endif?>
    <?if(!$_COOKIE['id_login']):?>
      <div class="text-center">
      <button
        class="btn btn-clear-text"
        type="button"
        disabled
      >
        Войдите чтобы<br />увидеть избранное
      </button>
    <?endif?>
    <?
      include 'footer_menu.php';
    ?>
    <script src="js/functions.js"></script>
    <script src="js/scriptLoginForm.js"></script>
    <script src="js/scriptRegForm.js"></script>
    <script src="js/catalogFilter.js"></script>
    <script src="js/goOut.js"></script>
    <script src="js/delAllFavorites.js"></script>
  </body>
</html>
