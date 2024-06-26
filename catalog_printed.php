<!DOCTYPE html>
<html lang="en ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Каталог</title>
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
      $page = 'catalog';
      if($_COOKIE['id_login']){
        include 'nav_menu_login.php';
      } else {
        include 'nav_menu.php';
      }
    ?>
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
        <?foreach ($productsCatalog as $productCatalog):?>
          <div class="col my-card-col">
            <div
              class="card border"
              onclick="window.location.href = 'element.php?paramId=<?=$productCatalog['id']?>'"
            >
              <img src="<?=$productCatalog['image']?>" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"><?=$productCatalog['name']?></h5>
                <p class="card-text">
                <?=$productCatalog['description']?>
                </p>
                <div class="d-flex align-items-center">
                  <div class="btn-favorites">
                    <button class="btn btn-heart" onclick="clickOnHeart(<?=$productCatalog['id']?>)" type="button">
                      <img src="<? echo (in_array($productCatalog['id'],$massWithFavorites)) ? "res/grad_heart.svg" : "res/black_heart.svg"; ?>" 
                        id="clickOnHeart<?=$productCatalog['id']?>"/>
                    </button>
                  </div>
                  <div class="my-card-btn btn-favorites">
                    <button class="btn <? echo (in_array($productCatalog['id'],$massWithFavorites)) ? "btn-outline-primary" : "btn-primary"; ?>" 
                    id="clickOnBtnFavorite<?=$productCatalog['id']?>" 
                    onclick="clickOnHeart(<?=$productCatalog['id']?>)" type="button">
                      <? echo (in_array($productCatalog['id'],$massWithFavorites)) ? "В избранном" : "В избранное"; ?>
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
    <script src="js/catalogFilter.js"></script>
    <script src="js/goOut.js"></script>
  </body>
</html>
