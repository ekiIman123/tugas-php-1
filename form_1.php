<?php
// Set nilai default untuk $result
$result = 0;

// Lakukan pengecekan jika formulir sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input number1 dan number2
    $number1 = isset($_POST['number1']) ? $_POST['number1'] : '';
    $number2 = isset($_POST['number2']) ? $_POST['number2'] : '';

    // Jika tombol "Hapus" ditekan, atur $result menjadi 0
    if (isset($_POST['hapus'])) {
        $result = 0;
    } else {
        // Jika kedua nilai tidak kosong, lakukan penjumlahan
        if ($number1 !== '' && $number2 !== '') {
            $result = $number1 + $number2;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form</title>
</head>
<body style="padding: 0; margin: 0;">

    
    <div class="card" style="padding: 1rem; border-radius: 15px; margin: 5rem 10rem; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);">
        <h1>Tugas Formulir</h1>
        <div class="container">
            <div class="column" style="border: 1px solid #ccc; padding: 1rem; border-radius: 15px">
                <h3 style="text-align: center;">Penjumlahan Angka Sederhana</h3>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <table>
                        <tr>
                            <td><input type="number" name="number1" id="number1" placeholder="Masukkan angka pertama" style="padding: .5rem;"></td>
                            <td><input type="number" name="number2" id="number2" placeholder="Masukkan angka kedua" style="padding: .5rem;"></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="hapus" style="background-color: blue; color: white; cursor: pointer; border-radius: 15px; border: none; font-weight: bold; padding: .5rem 1.5rem;">Hapus</button>
                                <button type="submit" name="submit" style="background-color: blue; color: white; cursor: pointer; border-radius: 15px; border: none; font-weight: bold; padding: .5rem 1.5rem;">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <p>Hasil penjumlahan: 
                    <?php
                    // Tampilkan hasil penjumlahan
                    echo $result;
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>