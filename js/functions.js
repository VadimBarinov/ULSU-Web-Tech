var button = document.querySelectorAll(".btn-favorites");
button.forEach((btn) => {
  btn.addEventListener("click", function (event) {
    event.stopPropagation();
  });
});
