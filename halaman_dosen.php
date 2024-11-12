<?php

session_start();

$username = @$_SESSION['username'];
$password = @$_SESSION['password'];

$akses = @$_SESSION["akses"];

require "./config.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script language="JavaScript" type="text/javascript">
        function Hapus() {
            return confirm('Apakah anda yakin ingin menghapus?');
        }
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content-wrapper {
            margin-left: 260px;
            padding: 20px;
        }
        .header {
            background-color: #0069d9;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .card-custom {
            background-color: #F0E68C;
            border-radius: 10px;
            padding: 20px;
        }
        .tombol-edit, .tombol-hapus {
            border-radius: 10px;
            color: white;
            padding: 8px 16px;
            font-size: 13px;
            text-decoration: none;
            margin-right: 5px;
        }
        .tombol-edit {
            background-color: #04AA6D;
        }
        .tombol-edit:hover {
            background-color: #45a049;
        }
        .tombol-hapus {
            background-color: #FF0000;
        }
        .tombol-hapus:hover {
            background-color: #c00;
        }
        #bottom{
            position: absolute;
            display: inline-block;
            bottom: 0;
            left: 15px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center text-white">Dashboard</h3>
        <div id='bottom'>
            <a class='btn btn-danger btn-sm mb-3' href="logout.php">Log Out</a>
        </div>
    </div>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="header">
            <h4>NILAI KULIAH</h4>
            <h5>SELAMAT DATANG DI HALAMAN DOSEN</h5>
        </div>

        <!-- Table -->
        <div class="card card-custom mt-4">
            <div class="input-group w-25 mb-4">
                <a href="halaman_tambah_mhs.php" class="btn btn-warning">Tambah Mahasiswa</a>
            </div>
            <?php
            // Ganti dengan koneksi database Anda
            $sql = "select * from user";
            $query = mysqli_query($sambung, $sql);
            ?>
            <div class="container mt-3">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nomer</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">Diskusi (14%)</th>
                            <th scope="col">Praktikum (26%)</th>
                            <th scope="col">Responsi (15%)</th>
                            <th scope="col">UTS (20%)</th>
                            <th scope="col">UAS (25%)</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($sambung, "SELECT * FROM user WHERE level = 'mahasiswa'");
                        $i = 1;
                        while ($db_uts_5030 = mysqli_fetch_array($query)) {
                            $total_nilai =
                                ($db_uts_5030['diskusi'] * 0.14) +
                                ($db_uts_5030['praktikum'] * 0.26) +
                                ($db_uts_5030['responsi'] * 0.15) +
                                ($db_uts_5030['uts'] * 0.20) +
                                ($db_uts_5030['uas'] * 0.25);

                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>" . $db_uts_5030["username"] . "</td>";
                            echo "<td>" . $db_uts_5030["diskusi"] . "</td>";
                            echo "<td>" . $db_uts_5030["praktikum"] . "</td>";
                            echo "<td>" . $db_uts_5030["responsi"] . "</td>";
                            echo "<td>" . $db_uts_5030["uts"] . "</td>";
                            echo "<td>" . $db_uts_5030["uas"] . "</td>";
                            echo "<td>" . number_format($total_nilai, 2) . "</td>";
                            echo "<td>
                                    <a class='tombol-edit' href=./update.php?username=$db_uts_5030[username]>Edit</a>
                                    <a class='tombol-hapus' href=./delete.php?username=$db_uts_5030[username] onclick='return Hapus()'>Hapus</a>
                                  </td>";
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (needed for modal, dropdowns, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3msP9s5NfEX5Mw3b6f6+Y8OgY3W0g5K4gVO2vSvA0V0g6k5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DbjGwlQFqFwvVQ4Ho+Xy1BfX56uJmblTmszkkAxXYzAAlUNeVh7TYxk+5p+hwkbg" crossorigin="anonymous"></script>
</body>

</html>