const regForm = document.forms["regForm"]; // считываем форму
const regFormArr = Array.from(regForm); // формируем массив из элементов формы
const validRegFormArr = []; // в этом массиве хранятся поля, которые нужно проверить
const regFormButton = regForm.elements["regFormButton"]; // считываем кнопку

const regFormName = regForm.elements["regFormName"];
const regFormPassword = regForm.elements["regFormPassword"];

regFormName.addEventListener("input", function () {
  if (this.value != "") {
    this.value =
      this.value[0].toUpperCase() + this.value.substr(1, this.value.length);
    this.setAttribute("value", this.value);
  }
});

function show_hide_password_reg(target) {
  if (regFormPassword.getAttribute("type") == "password") {
    target.classList.add("view");
    regFormPassword.setAttribute("type", "text");
  } else {
    target.classList.remove("view");
    regFormPassword.setAttribute("type", "password");
  }
  return false;
}

regFormArr.forEach((el) => {
  if (el.hasAttribute("data-reg")) {
    el.setAttribute("is-valid", "0");
    validRegFormArr.push(el);
  }
});

regForm.addEventListener("input", inputHandler);
regFormButton.addEventListener("click", buttonHandler);

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
  validRegFormArr.forEach((el) => {
    console.log(el.value); // лог в консоль
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
    loginForm.submit();
  }
}
