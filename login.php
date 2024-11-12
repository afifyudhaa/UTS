<?php

session_start();

$message = '';
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f0e68c;
            border-radius: 15px 15px 0 0;
            text-align: center;
            font-size: 24px;
            padding: 20px;
        }

        .card-body {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 0 0 15px 15px;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 15px;
        }

        .btn-primary {
            background-color: #0069d9;
            border: none;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-label {
            font-size: 14px;
            font-weight: bold;
        }

        .error-message {
            color: red;
            font-style: italic;
            text-align: center;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        .register-link a {
            text-decoration: none;
            color: #007bff;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            <span>Login</span>
        </div>
        <div class="card-body">
            <form action="./ctrl_login.php" method="POST">
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>

                <?php if (isset($message)): ?>
                    <div class="error-message"><?= $message ?></div>
                <?php endif ?>

                <input type="submit" name="submit" value="Login" class="btn btn-primary mt-4">
            </form>

            <!-- Optional Registration Link -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3msP9s5NfEX5Mw3b6f6+Y8OgY3W0g5K4gVO2vSvA0V0g6k5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DbjGwlQFqFwvVQ4Ho+Xy1BfX56uJmblTmszkkAxXYzAAlUNeVh7TYxk+5p+hwkbg" crossorigin="anonymous"></script>
</body>

</html>