<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    @section('content')
        <div class="d-flex align-items-center justify-content-center vh-100"
            style="background-image: url('{{ asset('image/dad.jpg') }}'); background-size: cover;">
            <div class="position-absolute top-0 start-0 p-3">
                <a href="/" class="text-black text-decoration-none fw-bold">&larr; To Home Page</a>
            </div>
            <div class="card shadow p-4" style="width: 400px;">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Login AyoBelajar</h2>
                </div>
                <div class="form-container">
                    <h2 class="text-center mb-4">Login <span class="text-primary">Ayo</span>Belajar</h2>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="email@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="/password-reset" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success w-50">Login</button>
                            <a href="/registrasi" class="btn btn-outline-secondary w-50">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
