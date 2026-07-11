<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 4 - PW N</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="top">
        <img src="img/gif1.gif" class="gif2"><h2>TUGAS 4 - PW N</h2><img src="img/gif1.gif" class="gif2">
    </div>
    <div class="container">
        <div class="top-box">
            <img src="img/skull.gif" alt=""><h1>INPUT NILAI MAHASISWA</h1><img src="img/skull.gif" alt="">
        </div>
        <form action="process.php" method="POST">
            <p>Nama</p>
            <input type="text" name="nama">
            <p>Nilai Matematika Diskrit :</p>
            <input type="number" min="0" name="math">
            <p>Nilai Pancasila :</p>
            <input type="number" min="0" name="pansi">
            <p>Nilai Dasar-Dasar Pemrograman :</p>
            <input type="number" min="0" name="ddp">
            <input type="submit" name="btn" value="SUBMIT">
        </form>
        <img src="img/gif2.gif" alt="" class="gif1">
    </div>
    <footer>
        <p>Project 10 - @Rynn</p>
    </footer>
</body>
</html>