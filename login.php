<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h2 class="text-center mb-4">Login</h2>
                <form id="loginForm" action="process_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <div id="noAccount" class="text-center mt-3">
                    <p>Belum punya akun? <a href="#" id="registerLink">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tambahkan event listener untuk tautan registrasi
        document.getElementById('registerLink').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah default action dari link (pengalihan)

            // Redirect ke halaman registrasi
            window.location.href = 'register.php';
        });
    </script>
</body>
</html>
