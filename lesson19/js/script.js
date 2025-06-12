$(document).ready(function () {
  // Hilangkan tombol cari
  $("#tombol-cari").hide();

  // Event ketika keyword diinputkan
  $("#keyword").on("keyup", function () {
    // munculkan tombol cari
    $(".loading").show();

    // Ajax menggunakan $.get()
    $.get("ajax/pokemon.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loading").hide();
    });

    //   // Ajax menggunakan load
    //   $("#container").load("ajax/pokemon.php?keyword=" + $("#keyword").val());
  });
});

// Note:
// . artinya class
// .loading artinya class loading
// # artinya id
// #keyword artinya id keyword
