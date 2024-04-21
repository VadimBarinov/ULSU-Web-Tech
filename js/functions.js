var button = document.querySelectorAll(".btn-favorites");
button.forEach((btn) => {
  btn.addEventListener("click", function (event) {
    event.stopPropagation();
  });
});

function clickOnHeart(product_login) {
  var btn = document.getElementById("clickOnBtnFavorite" + product_login);
  var heart = document.getElementById("clickOnHeart" + product_login);

  if (btn.classList.contains("btn-primary")) {
    var url = "/add_favorite.php";
    var data = {
      product_login: product_login,
    };

    $.ajax({
      url: url,
      type: "POST",
      data: data,
      dataType: "json",
      success: (response) => {
        if (response["res"] == true) {
          btn.classList.remove("btn-primary");
          btn.classList.add("btn-outline-primary");
          btn.innerText = "В избранном";

          heart.src = "res/grad_heart.svg";
        }
      },
    });
  } else {
    var url = "/del_favorite.php";
    var data = {
      product_login: product_login,
    };

    $.ajax({
      url: url,
      type: "POST",
      data: data,
      dataType: "json",
      success: (response) => {
        if (response["res"] == true) {
          btn.classList.remove("btn-outline-primary");
          btn.classList.add("btn-primary");
          btn.innerText = "В избранное";

          heart.src = "res/black_heart.svg";
        }
      },
    });
  }
}
