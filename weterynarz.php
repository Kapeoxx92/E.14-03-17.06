<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'weterynarz';

function script1($server, $user, $password, $db)
{
    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = 'SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 1;';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
        echo ' ';
        echo $row["imie"];
        echo ' ';
        echo $row["wlasciciel"];
        echo '<br>';
    }
    mysqli_close($conn);
}

function script2($server, $user, $password, $db)
{
    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = 'SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 2;';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
        echo ' ';
        echo $row["imie"];
        echo ' ';
        echo $row["wlasciciel"];
        echo '<br>';
    }
    mysqli_close($conn);
}

function script3($server, $user, $password, $db)
{

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = 'SELECT imie, telefon, szczepienie, opis FROM zwierzeta;';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo 'Pacjent: ';
        echo $row['imie'];
        echo '<br>';
        echo 'Telefon właściciela: ';
        echo $row['telefon'] ;
        echo ' ';
        echo 'ostatnie szczepienie: ';
        echo $row['szczepienie'];
        echo ' ';
        echo 'informacje: ';
        echo $row['opis'];
        echo '<hr>';
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="weterynarz.css">
    <title>Weterynarz</title>
</head>

<body>
    <header>
        <h1>GABINET WETERYNARYJNY</h1>
    </header>
    <main>
        <section id="left">
            <br>
            <h2>PSY</h2>
            <br>
            <?php
            script1($server, $user, $password, $db);
            ?>
            <br>
            <h2>KOTY</h2>
            <br>
            <?php
            script2($server, $user, $password, $db);
            ?>
            <br>
        </section>
        <section id="center">
            <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
            <?php
            script3($server, $user, $password, $db);
            ?>
        </section>
        <section id="right">
            <h2>WETERYNARZ</h2>
            <a href="logo.jpg"><img src="logo-mini.jpg" alt=""></a>
            <p>Krzysztof Nowakowski, lekarz weterynarii</p>
            <h2>GODZINY PRZYJĘĆ</h2>
            <table>
                <tr>
                    <td>Poniedziałek</td>
                    <td>15:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Wtorek</td>
                    <td>15:00 - 19:00</td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>