<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f5f7;
            padding-top: 50px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table-dark th {
            background-color: #343a40;
            color: white;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-logout {
            width: 100%;
            margin-top: 20px;
        }
        .container {
            max-width: 1200px;
        }
        .header {
            background-color: #0069d9;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>
<body>

    <?php
    session_start();
    require "./config.php";

    $username = $_SESSION['username'];

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php");
    }
    ?>

    <div class="container">
        <div class="card card-body m-5">
            <div class="header text-center">
                <h4>Selamat Datang, Mahasiswa</h4>
                <p>Berikut adalah nilai Anda</p>
            </div>
            <div class="mt-4">
                <table class="table table-striped table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">Diskusi (14%)</th>
                            <th scope="col">Praktikum (26%)</th>
                            <th scope="col">Responsi (15%)</th>
                            <th scope="col">UTS (20%)</th>
                            <th scope="col">UAS (25%)</th>
                            <th scope="col">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($sambung, "SELECT * FROM user WHERE username='$username'");
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
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="login.php" class="btn btn-primary btn-logout">Log Out</a>
            </div>
        </div>
    </div>

</body>

</html>