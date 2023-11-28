<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        /* Gaya CSS */
        /* ... */
    </style>
</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="text" name="input1" placeholder="Nilai 1" required>
            <input type="text" name="input2" placeholder="Nilai 2" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <button type="submit">Hitung</button>
        </form>
        <div class="output">
            Hasil:             
            <?php
            // Logika PHP untuk menghitung hasil
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input1 = $_POST['input1'];
                $input2 = $_POST['input2'];
                $operator = $_POST['operator'];

                switch ($operator) {
                    case 'add':
                        $result = $input1 + $input2;
                        break;
                    case 'subtract':
                        $result = $input1 - $input2;
                        break;
                    case 'multiply':
                        $result = $input1 * $input2;
                        break;
                    case 'divide':
                        if ($input2 != 0) {
                            $result = $input1 / $input2;
                        } else {
                            $result = "Tidak bisa dibagi oleh 0";
                        }
                        break;
                    default:
                        $result = "Pilih operator";
                        break;
                }

                echo $result; // Menampilkan hasil di dalam output
            }
            ?>
        </div>
    </div>
</body>
</html>
