var email = document.getElementById("inputemail");
var password = document.getElementById("inputpassword");
var rememberme = document.getElementById("customCheck");

email.addEventListener("input", (event) => {
  // Validasi email
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email.value)) {
    document.getElementById("dialog").innerHTML = '<div class="alert alert-danger" role="alert">Invalid email format</div>';
  } else {
    document.getElementById("dialog").innerHTML = "";
  }
});

password.addEventListener("input", (event) => {
  // Validasi password
  if (password.value.length < 8 || !/[a-z]/.test(password.value) || !/[A-Z]/.test(password.value) || !/[0-9]/.test(password.value) || !/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password.value)) {
    document.getElementById("dialog").innerHTML =
      '<div class="alert alert-danger" role="alert">Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character</div>';
    return;
  } else {
    document.getElementById("dialog").innerHTML = "";
  }
});

document.getElementById("login-form").addEventListener("submit", function (event) {
  event.preventDefault();
  console.log("Form submitted");

  // Kirim data ke server menggunakan AJAX
  fetch("verifikasi.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "inputemail=" + encodeURIComponent(email.value) + "&password=" + encodeURIComponent(password.value) + "&rememberme=" + encodeURIComponent(rememberme.value),
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data);
      if (data.trim() === "success") {
        // Redirect ke halaman profil jika login berhasil
        window.location.replace("index.php");
      } else {
        // Tampilkan pesan kesalahan jika login gagal
        document.getElementById("dialog").innerHTML = '<div class="alert alert-danger" role="alert">Wrong Username or Password</div>';
      }
    });
});
