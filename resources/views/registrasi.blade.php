<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            position: relative; /* Set position to relative for overlay positioning */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url({{ asset('image/dad.jpg') }}) no-repeat center center/cover;
        }
        /* Overlay style */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            z-index: 1; /* Ensure overlay is below the form */
        }
        .form-container {
            position: relative; /* Set position to relative to layer it above the overlay */
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            z-index: 2; /* Ensure form is above the overlay */
        }
        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 3; /* Ensure home link is above everything */
        }
        .input-password {
            padding-right: 40px; /* Add space for icon on the right */
        }
        .btn-show-password {
            border: none;
            background: none;
            position: absolute;
            top: 50%; /* Center vertically */
            right: 10px; /* Distance from the right edge */
            transform: translateY(-50%); /* Ensure it's centered */
            cursor: pointer;
            padding: 0; /* Remove padding if any */
            margin: 0; /* Remove margin if any */
        }
    </style>
</head>
<body>
    <a href="index.html" class="home-link text-decoration-none text-light">← To Home Page</a>
    <div class="form-container p-4">
        <h2 class="text-center mb-4">Sign Up <span class="text-primary">Ayo</span>Belajar</h2>
        <form action="{{ route('registrasi.submit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}" required>
        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="full-name" class="form-label">Full name</label>
        <input type="text" class="form-control" id="full-name" name="name" placeholder="Jane Doe" value="{{ old('name') }}" required>
        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3 position-relative">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
        <button type="button" class="btn-show-password" onclick="togglePassword()">
            <i class="bi bi-eye"></i>
        </button>
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-success flex-fill">Create <i class="bi bi-arrow-right"></i></button>
        <a href="/login" class="btn btn-outline-secondary flex-fill">login</a>
    </div>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const showPasswordButton = document.querySelector('.btn-show-password i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordButton.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                showPasswordButton.classList.replace('bi-eye-slash', 'bi-eye');
            }
        }
    </script>
</body>
</html>