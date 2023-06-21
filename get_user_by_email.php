<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Ambil parameter email dari URL
  $email = $_GET['email'];

  // Lakukan operasi untuk mendapatkan pengguna berdasarkan email dari database
  // Ganti dengan logika yang sesuai untuk mengambil pengguna dari database MySQL Anda berdasarkan email

  // Contoh respons JSON dengan data pengguna berdasarkan email
  $user = ['id' => 1, 'name' => '', 'email' => ''];

  echo json_encode($user);
} else {
  // Beri respons JSON untuk metode permintaan yang tidak diizinkan
  echo json_encode(['error' => 'Metode permintaan tidak diizinkan']);
}
?>
