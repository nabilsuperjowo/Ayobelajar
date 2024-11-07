<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyoBelajar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Open+Sans:wght@600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Preahvihear&family=Questrial&family=Rubik:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        
        .navbar-brand {
            transform: rotate(-5deg);
            font-size: 28px;
        }

        .tulisan h1 {
            font-family: "Inria Sans", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .tulisan p {
            font-family: "Inria Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .card {
            background-color: #e0e0e0;
            position: relative;
            margin: 5px;
            border-radius: 10px;
        }

        .card h4 {
            color: white;
            font-family: "Inria Sans", sans-serif;
            font-weight: 700;
            font-style: normal; 
        }

        .card button {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            font-family: "Inria Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .card-body h5 {
            font-family: "Inria Sans", sans-serif;
            font-weight: 700;
            font-style: normal; 
        }

        .card-body p {
            font-family: "Inria Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .card-tombol h4 {
            color: black;
            font-size: 30px
        }

        .custom-button {
            display: inline-block;
            border: 2px solid #007bff; /* Blue outline */
            color: #007bff; /* Blue text color */
            background-color: transparent; /* Transparent background */
            border-radius: 30px; /* Rounded corners */
            padding: 10px 25px; /* Narrow padding for left and right */
            font-family: "Inria Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
            text-decoration: none; /* Remove underline from link */
            transition: background-color 0.3s, color 0.3s; /* Smooth hover transition */
        }

        .custom-button:hover {
            background-color: #007bff; /* Blue background on hover */
            color: #ffffff; /* White text color on hover */
        }

        .tulisan2 {
            font-family: "Inria Sans", sans-serif;
            font-weight: 700;
            font-style: normal; 
        }

        .footer {
            background-color: #f1f5f8;
            padding: 40px 0;
            font-size: 14px;
            color: #333;
        }
        .footer a {
            color: #333;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer-bottom {
            border-top: 1px solid #ccc;
            padding-top: 10px;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
        .footer .footer-logo img {
            max-width: 120px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>