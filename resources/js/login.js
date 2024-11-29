document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Ambil nilai username dan password
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Validasi login (contoh sederhana)
    if (username === "admin" && password === "1234") {
        alert("Login berhasil!");
        window.location.href = "dashboard.html"; // Redirect ke halaman dashboard
    } else {
        document.getElementById("error-message").textContent = "Username atau Password salah!";
    }
});document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Ambil nilai username dan password
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Validasi login (contoh sederhana)
    if (username === "admin" && password === "1234") {
        alert("Login berhasil!");
        window.location.href = "dashboard.html"; // Redirect ke halaman dashboard
    } else {
        document.getElementById("error-message").textContent = "Username atau Password salah!";
    }
});