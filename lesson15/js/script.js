document.addEventListener("DOMContentLoaded", function () {
  const keywordInput = document.getElementById("keyword");
  const container = document.getElementById("tabel-container");

  // Live search saat mengetik
  keywordInput.addEventListener("keyup", function () {
    const xhr = new XMLHttpRequest();
    const url = "?keyword=" + encodeURIComponent(keywordInput.value);
    xhr.open("GET", url, true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const html = xhr.responseText;
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, "text/html");
        const newTable = doc.querySelector("#tabel-container");
        container.innerHTML = newTable.innerHTML;
      }
    };
    xhr.send();
  });

  // Live pagination saat klik nomor halaman
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("page-link")) {
      e.preventDefault();
      const url = e.target.href;
      const xhr = new XMLHttpRequest();
      xhr.open("GET", url, true);
      xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const html = xhr.responseText;
          const parser = new DOMParser();
          const doc = parser.parseFromString(html, "text/html");
          const newTable = doc.querySelector("#tabel-container");
          container.innerHTML = newTable.innerHTML;
        }
      };
      xhr.send();
    }
  });
});
