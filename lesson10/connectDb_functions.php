<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// Function untuk mengambil data dari database
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function untuk menambahkan data ke database
function tambah($data)
{
    global $koneksi;

    // Ambil data dari form
    $nama = htmlspecialchars($data["nama"]);
    $national_no = htmlspecialchars($data["national_no"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $generasi = htmlspecialchars($data["generasi"]);

    // Cek apakah gambar sudah diupload
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // Query insert data
    $query = "INSERT INTO pokemon VALUES (NULL, '$nama', '$national_no', '$tipe', '$generasi', '$gambar')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// Function untuk menghapus data dari database
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM pokemon WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

// Function untuk mengubah data di database
function ubah($data)
{
    global $koneksi;

    // Ambil data dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $national_no = htmlspecialchars($data["national_no"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $generasi = htmlspecialchars($data["generasi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Cek apakah gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $gambar = $gambarLama;
    } else {
        // Jika ada gambar baru, upload gambar baru
        $gambar = upload();
        if (!$gambar) {
            return false; // Jika upload gagal, hentikan proses
        }
    }

    // Query update data
    $query = "UPDATE pokemon SET
                nama = '$nama',
                national_no = '$national_no',
                tipe = '$tipe',
                generasi = '$generasi',
                gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//  Function untuk mencari data di database
function cari($keyword)
{
    $query = "SELECT * FROM pokemon WHERE
                nama LIKE '%$keyword%' OR
                national_no LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%' OR
                generasi LIKE '%$keyword%'
                ";
    return query($query);
}

// Function untuk mengupload gambar
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah ada gambar yang diupload
    if ($error === 4) {
        // 4 itu kode error untuk tidak ada file yang diupload
        echo "<script>
            alert('Pilih gambar terlebih dahulu!');
             </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
             alert('Yang anda upload bukan gambar!');
             </script>";
        return false;
    }

    // Cek ukuran gambar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
                </script>";
        return false;
    }

    // Lolos pengecekan, gambar siap diupload
    // Generate nama gambar baru
    // Membuat nama file baru yang unik
    // Menggunakan uniqid untuk menghasilkan ID unik
    $namaFileBaru = uniqid();
    // Mennempelkan . pada nama file baru
    $namaFileBaru .= '.';
    // Menggabungkan nama file baru dengan ekstensi gambar
    $namaFileBaru .= $ekstensiGambar;
    // Memindahkan file yang diupload ke folder img
    // Menggunakan fungsi move_uploaded_file untuk memindahkan file
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;

    if (!move_uploaded_file($tmpName, 'img/' . $namaFileBaru)) {
        echo "<script>alert('Gagal memindahkan file!');</script>";
        return false;
    }
}
