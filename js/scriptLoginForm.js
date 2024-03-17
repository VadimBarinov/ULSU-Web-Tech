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
  console.log(inputValue, reg);
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
  validLoginFormArr.forEach((el) => {
    if (el.getAttribute("is-valid") == 0) isAllValid = 0;
  });

  console.log(isAllValid);

  if (!Boolean(Number(isAllValid))) {
    e.preventDefault();
  } else {
    loginForm.submit();
  }
}
