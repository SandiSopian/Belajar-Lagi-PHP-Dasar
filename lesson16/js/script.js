// ambil element yang dibutuhkan
const keyword = document.getElementById("keyword");
const tombolCari = document.getElementById("tombol-cari");
const container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  // buat objek ajax
  const xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // tangkap response dari ajax
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/pokemon.php?keyword=" + keyword.value, true);
  xhr.send();
});
