function goOutFunc() {
  var url = "/goOut.php";

  $.ajax({
    url: url,
    type: "POST",
    success: () => {
      $("[id=goOutModal]").modal("hide"); // скрывается окно
      $("[id=nav_menu_unlogin]").css("display", "block"); // скрывается панель навигации
      $("[id=nav_menu_unlogin_temp]").css("display", "block");
      $("[id=nav_menu_login]").css("display", "none"); // скрывается панель навигации
      $("[id=nav_menu_login_temp]").css("display", "none");

      if (document.title == "Избранное") {
        location.reload();
      }
    },
  });
}
