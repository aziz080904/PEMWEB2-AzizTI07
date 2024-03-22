function validateLogin() {

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === 'admin2024' & password === 'satuduatiga') {
      
        alert('Login berhasil');
        window.location.href = 'index.php'; 
    } else {
       
        alert('Login Gagal. Periksa kembali username dan password.');
    }
}