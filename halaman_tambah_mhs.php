<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .card {
            border-radius: 15px;
            background-color: #ffffff;
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
            box-shadow: none;
        }
        .card-header {
            background-color: #0069d9;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 30px;
        }
        .container {
            max-width: 800px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card card-body m-5">
            <?php
            session_start();
            require "./config.php";

            // cek apakah yang mengakses halaman ini sudah login
            if ($_SESSION['level'] == "") {
                header("location:login.php?pesan=gagal");
            }
            ?>
            <div class="card-header text-center">
                <h4>Tambah Mahasiswa</h4>
            </div>
            <form action="./ctrl_tambah_data.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="diskusi" class="form-label">Diskusi (14%)</label>
                    <input type="number" class="form-control" id="diskusi" name="diskusi" placeholder="Masukkan Nilai Diskusi" required>
                </div>
                <div class="mb-3">
                    <label for="praktikum" class="form-label">Praktikum (26%)</label>
                    <input type="number" class="form-control" id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" required>
                </div>
                <div class="mb-3">
                    <label for="responsi" class="form-label">Responsi (15%)</label>
                    <input type="number" class="form-control" id="responsi" name="responsi" placeholder="Masukkan Nilai Responsi" required>
                </div>
                <div class="mb-3">
                    <label for="uts" class="form-label">UTS (20%)</label>
                    <input type="number" class="form-control" id="uts" name="uts" placeholder="Masukkan Nilai UTS" required>
                </div>
                <div class="mb-3">
                    <label for="uas" class="form-label">UAS (25%)</label>
                    <input type="number" class="form-control" id="uas" name="uas" placeholder="Masukkan Nilai UAS" required>
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                    <a href="halaman_dosen.php" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3msP9s5NfEX5Mw3b6f6+Y8OgY3W0g5K4gVO2vSvA0V0g6k5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DbjGwlQFqFwvVQ4Ho+Xy1BfX56uJmblTmszkkAxXYzAAlUNeVh7TYxk+5p+hwkbg" crossorigin="anonymous"></script>
</body>

</html>