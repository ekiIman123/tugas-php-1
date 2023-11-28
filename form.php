<?php
$munculkalkulator = false;
$munculform = false;
$munculjumlah = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_GET['action'];

    // Form
    if ($action == 'form') {
        $munculform = true;

        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];
        $absen = $_POST['absen'];

        if ($nilai >= 75 && $absen >= 75) {
            $lulus = 'Selamat Anda Lulus';
        } else {
            $lulus = 'Maaf Anda gagal';
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Formulir Ihza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: whitesmoke;
        }

        .container {
            background-color: white;
        }
    </style>
</head>

<body>

    <!-- Form kelulusan -->
    <div class="container p-3 mt-5 border">
        <h2 class="text-center">FORM KELULUSAN</h2>
        <form action="form.php?action=form" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="masukan nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM</label>
                <input type="text" class="form-control" placeholder="masukan NIM" name="nim">
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" class="form-control" placeholder="masukan nilai" name="nilai">
            </div>
            <div class="mb-3">
                <label for="absen" class="form-label">Absen</label>
                <input type="number" class="form-control" placeholder="masukan absen" name="absen">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if ($munculform == true) { ?>
            <h3 class="text-center">
                <?= $nama ?>, dengan NIM
                <?= $nim ?>.
                <?= $lulus ?>
            </h3>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>