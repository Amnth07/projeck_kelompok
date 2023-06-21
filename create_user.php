<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ambil data dari permintaan POST
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Lakukan operasi untuk menyimpan pengguna ke database
  // Ganti dengan logika yang sesuai untuk menyimpan pengguna ke database MySQL Anda

  // Beri respons JSON untuk berhasil menambahkan pengguna
  echo json_encode(['message' => 'Pengguna berhasil ditambahkan']);
} else {
  // Beri respons JSON untuk metode permintaan yang tidak diizinkan
  echo json_encode(['error' => 'Metode permintaan tidak diizinkan']);
}
?>
