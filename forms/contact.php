
<?php
if (isset($_POST['submit'])) {
  // ambil nilai input dari formulir kontak
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // konfigurasi email
  $to = "oby.aubrey@gmail.com"; // ganti dengan alamat email Anda
  $subject = "Pesan dari situs web";
  $body = "Nama: $name\nEmail: $email\n\nMessage:\n$message";

  // kirim email
  if (mail($to, $subject, $body)) {
    echo '<div class="sent-message">Pesan Anda telah berhasil dikirim. Terima kasih!</div>';
  } else {
    echo '<div class="error-message">Maaf, terjadi kesalahan saat mengirim email.</div>';
  }
}
?>