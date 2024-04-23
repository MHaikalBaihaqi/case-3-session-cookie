document.getElementById("login-form").addEventListener("submit", function (event) {
  event.preventDefault();
  console.log("Form submitted");

  var email = document.getElementById("inputemail").value;
  var password = document.getElementById("inputpassword").value;

  // Validasi email menggunakan regular expression
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    document.getElementById("dialog").innerHTML = '<div class="alert alert-danger" role="alert">Invalid email format</div>';
    return;
  }

  // Validasi password
  if (password.length < 8 || !/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/[0-9]/.test(password) || !/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)) {
    document.getElementById("dialog").innerHTML =
      '<div class="alert alert-danger" role="alert">Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character</div>';
    return;
  }

  // Kirim data ke server menggunakan AJAX
  fetch("verifikasi.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "inputemail=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password),
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data)
      if (data.trim() === "success") {
        // Redirect ke halaman profil jika login berhasil
        window.location.replace("index.php");
      } else {
        // Tampilkan pesan kesalahan jika login gagal
        document.getElementById("dialog").innerHTML = '<div class="alert alert-danger" role="alert">Wrong Username or Password</div>';
      }
    });
});

function setcookie() {
  var email = document.getElementById("inputemail").value;
  document.cookie = "myemail=" + email + ";expires=" + new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toUTCString() + ";path=/";
}
