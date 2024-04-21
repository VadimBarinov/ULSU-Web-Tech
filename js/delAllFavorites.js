function delAllFavorites() {
  var url = "/del_all_favorites.php";

  $.ajax({
    url: url,
    type: "POST",
    success: () => {
      $("[id=clearModal]").modal("hide"); // скрывается окно
      location.reload();
    },
  });
}
