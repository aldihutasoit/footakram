<html>

<head>
    <title>Beri Komentar</title>
</head>

<body>
    <div class="home">
        <?php
        include "koneksi.php";
        $sql_hitung = mysqli_query($konek, "SELECT * FROM komentar");
        $nama = $_POST['kotak1'];
        $email = $_POST['kotak2'];
        $komen = $_POST['kotak3'];
        $result = mysqli_query($konek, "insert into komentar
                        values('null','$nama','$email','$komen')");
        if ($result) {
            echo "Terimakasih atas tanggapan anda<br> 
                            semoga bisa menambah pengetahuan anda<br> <br>";
        }
        echo "<br><a href='home.php'>KLIK DISINI UNTUK KEMBALI</a>";
        ?>
    </div>
</body>

</html>