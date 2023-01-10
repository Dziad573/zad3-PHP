<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="baner">
        <h1>Moje kwiaty</h1>
    </header>

    <div id="menu">
        <h3>Kwiaty dla Ciebie!</h3><br>
        <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br>
        <a href="znajdz.php">Znajdź kwiaciarnię</a><br>
        <img src="gozdzik.jpg" alt="Goździk">
    </div>

    <main id="main">
        <img src="gerbera.jpg" alt="Gerbera">
        <img src="gozdzik.jpg" alt="Goździk">
        <img src="roza.jpg" alt="Róża">
        <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
        <form action="znajdz.php" method="post">
            <input type="text" name="pobierz">
            <input type="submit" value="SPRAWDŹ"><br>
            <?php
            if(isset($_POST['pobierz'])){
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "kwiaciarnia";
                $pobierz = $_POST["pobierz"];
                $conn = mysqli_connect($host, $user, $pass, $db);
                $q = "SELECT nazwa, ulica FROM `kwiaciarnie` WHERE miasto = '$pobierz';";
                mysqli_select_db($conn, $db);
                $res = mysqli_query($conn, $q);
                $row = mysqli_fetch_row($res);
                echo $row[0].", ".$row[1];
                mysqli_close($conn);
                };
            ?>
        </form>
    </main>
    
    <footer id="stopka">
        <h3>Stronę opracował: 000000000000</h3>
    </footer>
</body>
</html>