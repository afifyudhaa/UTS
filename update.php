<?php

include "./config.php";

$username = @$_GET["username"];
$query = mysqli_query($sambung, "SELECT * from user where username='$username'");

$username = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .form-control {
            border-radius: 10px;
        }
        .card-header {
            background-color: #0069d9;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }
        .container {
            max-width: 700px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card card-body m-5">
            <div class="card-header text-center">
                <h4>Edit Nilai Mahasiswa</h4>
            </div>
            <form action="./ctrl_update.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Mahasiswa</label>
                    <input type="text" id="username" name="username" class="form-control"
                        value="<?php echo $username['username']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="diskusi" class="form-label">Diskusi (14%)</label>
                    <input type="number" id="diskusi" name="diskusi" class="form-control"
                        value="<?php echo $username['diskusi']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="praktikum" class="form-label">Praktikum (26%)</label>
                    <input type="number" id="praktikum" name="praktikum" class="form-control"
                        value="<?php echo $username['praktikum']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="responsi" class="form-label">Responsi (15%)</label>
                    <input type="number" id="responsi" name="responsi" class="form-control"
                        value="<?php echo $username['responsi']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="uts" class="form-label">UTS (20%)</label>
                    <input type="number" id="uts" name="uts" class="form-control"
                        value="<?php echo $username['uts']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="uas" class="form-label">UAS (25%)</label>
                    <input type="number" id="uas" name="uas" class="form-control"
                        value="<?php echo $username['uas']; ?>" required>
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    <input type="submit" value="Simpan" name="edit" class="btn btn-primary">
                    <a href="halaman_dosen.php" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3msP9s5NfEX5Mw3b6f6+Y8OgY3W0g5K4gVO2vSvA0V0g6k5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DbjGwlQFqFwvVQ4Ho+Xy1BfX56uJmblTmszkkAxXYzAAlUNeVh7TYxk+5p+hwkbg" crossorigin="anonymous"></script>
</body>

</html>