<!-- форма входа -->
<div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      aria-labelledby="loginModalLabel"
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
            <h1 class="modal-title fs-5 my-modal-title" id="loginModalLabel">
              Вход
            </h1>
          </div>
          <div class="modal-body">
            <!-- временно указываю на другую страницу (action) -->
            <form action="#" id="loginForm" name="loginForm">
              <div class="mb-3 input-box">
                <label for="loginFormEmail" class="col-form-label"
                  >Email:</label
                >
                <input
                  class="form-control"
                  type="text"
                  id="loginFormEmail"
                  name="loginFormEmail"
                  data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$"
                  required
                />
                <p
                  class="col-form-label-red loginFormEmailError"
                  id="loginFormEmailError"
                  name="loginFormEmailError"
                >
                  В формате: name@mail.com
                </p>
              </div>
              <div class="mb-3 input-box">
                <label for="loginFormPassword" class="col-form-label"
                  >Пароль:</label
                >
                <div class="password">
                  <input
                    type="password"
                    class="form-control"
                    id="loginFormPassword"
                    name="loginFormPassword"
                    data-reg="^[^]{8,40}$"
                    required
                  />
                  <a
                    href="#"
                    class="password-control"
                    onclick="return show_hide_password_login(this);"
                  ></a>
                  <p
                    class="col-form-label-red loginFormPasswordError"
                    id="loginFormPasswordError"
                    name="loginFormPasswordError"
                  >
                    От 8 символов
                  </p>
                </div>
              </div>
              <div class="modal-footer-btn">
                <button
                  type="button"
                  class="btn btn-primary"
                  id="loginFormButton"
                  name="loginFormButton"
                >
                  Войти
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- форма выйти -->
    <div
      class="modal fade"
      id="goOutModal"
      tabindex="-1"
      aria-labelledby="goOutModalLabel"
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
            <h1 class="modal-title fs-5 my-modal-title" id="goOutModalLabel">
              Вы действительно хотите выйти?
            </h1>
          </div>
          <div class="modal-footer my-modal-footer-clear">
            <!-- временное решение для демонстрации -->
            <!-- нужно будет сделать метод на js и убрать ссылку -->
            <button
              type="button"
              class="btn btn-outline-primary me-2"
              onclick="window.location.href = 'index.php'"
            >
              Да
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

    <!-- навигация -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand p-0" href="index.php">
          <img src="res/logo.svg" alt="Logo" width="60" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul
            class="navbar-nav text-center d-flex align-items-center container-fluid"
          >
            <li class="nav-item">
              <!-- ссылка на главную -->
              <a class="nav-link <? echo ($page == 'main') ? "active" : ""; ?>" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
              <!-- ссылка на каталог -->
              <a class="nav-link <? echo ($page == 'catalog') ? "active" : ""; ?>" href="catalog.php">Каталог</a>
            </li>
            <li class="nav-item">
              <!-- ссылка на избранное -->
              <a class="nav-link <? echo ($page == 'favorite') ? "active" : ""; ?>" href="favorites.php">Избранное</a>
            </li>
            <li class="nav-item">
              <!-- ссылка на о себе -->
              <a class="nav-link <? echo ($page == 'info') ? "active" : ""; ?>" href="information.php">О себе</a>
            </li>
            <li class="my-btn-box-1-lg">
              <!-- кнопки регистрации и входа БОЛЬШОЙ ЭКРАН -->
              <p class="my-nav-box-name">
                Вадим <img src="res/profile_icon.svg" width="50" />
              </p>
            </li>
            <li class="my-btn-box-2-lg">
              <!-- кнопки регистрации и входа БОЛЬШОЙ ЭКРАН -->
              <button
                class="btn btn-outline-primary"
                data-bs-toggle="modal"
                data-bs-target="#goOutModal"
                type="button"
              >
                Выйти
              </button>
            </li>
            <li class="my-btn-box-1-sm">
              <!-- кнопки регистрации и входа МАЛЕНЬКИЙ ЭКРАН -->
              <p class="my-nav-box-name">
                Вадим <img src="res/profile_icon.svg" width="50" />
              </p>
            </li>
            <li class="my-btn-box-2-sm">
              <!-- кнопки регистрации и входа МАЛЕНЬКИЙ ЭКРАН -->
              <button
                class="btn btn-outline-primary"
                data-bs-toggle="modal"
                data-bs-target="#goOutModal"
                type="button"
              >
                Выйти
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>