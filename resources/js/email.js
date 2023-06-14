function sendEmail() {
  // Mengambil nilai input dari formulir kontak
  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const subject = document.querySelector('#subject').value;
  const message = document.querySelector('#message').value;

  // Mengirim email menggunakan EmailJS
  emailjs.send("service_p41mykt", "template_icy9fon", {
    from_name: name,
    from_email: email,
    subject: subject,
    message: message,
  })
  .then(function(response) {
    console.log("Email berhasil dikirim!", response.status, response.text);
    // Menampilkan pesan sukses di halaman
    const sentMessage = document.querySelector('.sent-message');
    sentMessage.style.display = 'block';
  }, function(error) {
    console.log("Email gagal dikirim:", error);
    // Menampilkan pesan error di halaman
    const errorMessage = document.querySelector('.error-message');
    errorMessage.style.display = 'block';
  });

  // Mengosongkan nilai input setelah email dikirim
  document.querySelector('#name').value = '';
  document.querySelector('#email').value = '';
  document.querySelector('#subject').value = '';
  document.querySelector('#message').value = '';
}