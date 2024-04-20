var button = document.querySelectorAll(".btn-favorites");
button.forEach((btn) => {
  btn.addEventListener("click", function (event) {
    event.stopPropagation();
    // НУЖНО СДЕЛАТЬ НАЖАТИЕ НА СЕРДЕЧКО И ДОБАВЛЕНИЕ В ИЗБРАННОЕ
  });
});
