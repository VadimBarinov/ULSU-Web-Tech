const loginForm = document.forms["loginForm"]; // считываем форму
const loginFormArr = Array.from(loginForm); // формируем массив из элементов формы
const validLoginFormArr = []; // в этом массиве хранятся поля, которые нужно проверить
const loginFormButton = loginForm.elements["loginFormButton"]; // считываем кнопку

const loginFormPassword = loginForm.elements["loginFormPassword"];

function show_hide_password_login(target) {
  if (loginFormPassword.getAttribute("type") == "password") {
    target.classList.add("view");
    loginFormPassword.setAttribute("type", "text");
  } else {
    target.classList.remove("view");
    loginFormPassword.setAttribute("type", "password");
  }
  return false;
}

loginFormArr.forEach((el) => {
  if (el.hasAttribute("data-reg")) {
    el.setAttribute("is-valid", "0");
    validLoginFormArr.push(el);
  }
});

loginForm.addEventListener("input", inputHandler);
loginFormButton.addEventListener("click", buttonHandler);

function inputHandler({ target }) {
  if (target.hasAttribute("data-reg")) {
    inputCheck(target);
  }
}

function inputCheck(el) {
  const inputValue = el.value;
  const inputReg = el.getAttribute("data-reg");
  const reg = new RegExp(inputReg);
  if (reg.test(inputValue)) {
    el.setAttribute("is-valid", "1");
    el.style.border = "2px solid rgb(0, 196, 0)";
  } else {
    el.setAttribute("is-valid", "0");
    el.style.border = "2px solid rgb(255, 0, 0)";
  }
}

function buttonHandler(e) {
  var isAllValid = 1;
  const inputHidenLabelEmailLogin = document.querySelector(
    "." + validLoginFormArr[0].getAttribute("name") + "Error"
  );
  inputHidenLabelEmailLogin.textContent = "В формате: name@mail.com";
  validLoginFormArr.forEach((el) => {
    const inputHidenLabel = document.querySelector(
      "." + el.getAttribute("name") + "Error"
    );
    if (el.getAttribute("is-valid") == 0) {
      isAllValid = 0;
      el.style.border = "2px solid rgb(255, 0, 0)";
      inputHidenLabel.classList.add("open");
    } else {
      el.style.border = "2px solid rgb(0, 196, 0)";
      inputHidenLabel.classList.remove("open");
    }
  });

  if (!Boolean(Number(isAllValid))) {
    e.preventDefault();
  } else {
    var url = "/login.php";
    var data = {
      loginFormEmail: $("[name=loginFormEmail]").val(),
      loginFormPassword: $("[name=loginFormPassword]").val(),
    };

    $.ajax({
      url: url,
      type: "POST",
      data: data,
      dataType: "json",
      success: (response) => {
        if (response["res"] == false) {
          validLoginFormArr[0].style.border = "2px solid rgb(255, 0, 0)";
          validLoginFormArr[1].style.border = "2px solid rgb(255, 0, 0)";
          inputHidenLabelEmailLogin.textContent = "Неверный логин или пароль";
          inputHidenLabelEmailLogin.classList.add("open");
        } else {
          $(".login-name-temp").html(
            response["values"]["name"] +
              ' <img src="res/profile_icon.svg" width="50" />'
          );

          $("[id=loginModal]").modal("hide"); // скрывается окно
          $("[id=nav_menu_unlogin]").css("display", "none"); // скрывается панель навигации
          $("[id=nav_menu_unlogin_temp]").css("display", "none");
          $("[id=nav_menu_login]").css("display", "block"); // скрывается панель навигации
          $("[id=nav_menu_login_temp]").css("display", "block");

          if (document.title == "Избранное") {
            location.reload();
          }
        }
      },
    });
  }
}
