<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Buat koneksi ke database
  $host = 'localhost'; // Ganti dengan host database Anda
  $username = 'nama_pengguna'; // Ganti dengan nama pengguna database Anda
  $password = 'kata_sandi'; // Ganti dengan kata sandi database Anda
  $database = 'nama_database'; // Ganti dengan nama database Anda

  $mysqli = new mysqli($host, $username, $password, $database);

  // Periksa koneksi database
  if ($mysqli->connect_errno) {
    echo json_encode(['error' => 'Gagal terhubung ke database MySQL']);
    exit;
  }

  // Lakukan query untuk mendapatkan daftar pengguna
  $query = 'SELECT * FROM user'; // Ganti dengan nama tabel pengguna Anda

  $result = $mysqli->query($query);

  // Periksa hasil query
  if ($result) {
    $users = [];

    // Loop melalui hasil query dan tambahkan data pengguna ke array
    while ($row = $result->fetch_assoc()) {
      $users[] = $row;
    }

    // Bebaskan hasil query
    $result->free();

    // Tutup koneksi database
    $mysqli->close();

    echo json_encode($users);
  } else {
    echo json_encode(['error' => 'Gagal mendapatkan daftar pengguna']);
  }
} else {
  // Beri respons JSON untuk metode permintaan yang tidak diizinkan
  echo json_encode(['error' => 'Metode permintaan tidak diizinkan']);
}
?>
