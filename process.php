<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        span {
            font-family: 'Kanit';
        }

        .a, .b, .c {
            color: green;
            font-size: 20px;
            font-weight: 700;
        }

        .d, .e {
            color: red;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="top">
        <img src="img/gif1.gif" class="gif2"><h2>TUGAS 4 - PW N</h2><img src="img/gif1.gif" class="gif2">
    </div>
    <div class="container">
        <div class="top-box">
            <img src="img/skull.gif" alt=""><h1>HASIL NILAI MAHASISWA</h1><img src="img/skull.gif" alt="">
        </div>
        <div class="box">
            <?php
                    if(isset($_POST['btn'])) {
                        $name = $_POST['nama'];
                        $nilai_math = $_POST['math'];
                        $nilai_pansi = $_POST['pansi'];
                        $nilai_ddp = $_POST['ddp'];
                        $average = ($nilai_math + $nilai_math + $nilai_pansi) / 3;
                        $count = round($average, 2);

                        if ($average >= 85){
                            $grade = '<span class="a">Grade: A</span>';
                        } elseif ($average >= 70) {
                            $grade = '<span class="b">Grade: B</span>';
                        } elseif ($average >= 55) {
                            $grade = '<span class="c">Grade: C</span>';
                        } elseif ($average >= 40) {
                            $grade = '<span class="d">Grade: D</span>';
                        } else {
                            $grade = '<span class="e">Grade: E</span>';
                        };


                        echo "
                            <p>Nama: $name</p>
                            <span>Nilai: </span>
                            <ul>
                                <li>Matematika Diskrit: $nilai_math</li>
                                <li>Pancasila: $nilai_pansi</li>
                                <li>Dasar-Dasar Pemrograman: $nilai_ddp</li>
                            </ul>
                            <p>Rata-rata Nilai: $count</p>
                            $grade  
                            ";
                    }
            ?>
            <a href="index.php">Kembali</a>
        </div>
        <img src="img/gif2.gif" alt="" class="gif1">
    </div>
    <footer>
        <p>Project 10 - @Rynn</p>
    </footer>
</body>
</html>