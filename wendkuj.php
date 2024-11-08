<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">

</head>
<body>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <section>
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3";
            $wynik = mysqli_query($polaczenie, $sql);
            while ($wiersz = mysqli_fetch_assoc($wynik)) {
                echo "<li>" . $wiersz['nazwa'] . ", " . $wiersz['akwen'] . ", ", $wiersz['wojewodztwo'];
            }
            mysqli_close($polaczenie);
            ?>
        </ol>
    </section>
    <aside>
        <img src="./ryba1.jpg" alt="Sum">
        <a href="./05312507197/kwerendy.txt">Pobierz kwerendy</a>
        </aside>
        <main>
            <table>
                <h3>Ryby drapieżne naszych wód</h3>
                <tr>
                    <th>L.p</th>
                    <th>Gatunek</th>
                    <th>Występowanie></th>
        </tr>
        <?php
        $polocznie = mysqli_connect('localhost', 'root','', 'wedkowanie');
        $sql = "SELECT ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.drapieznosc = 1";
        $wynik = mysqli_query($polaczenie, $sql);
        while ($wiersz = mysqli_fetch_assoc($wynik)) {
            echo "<tr><td>" . $wiersz['id'] . "</td><td>" . $wiersz['nazwa'] . "</td><td>" . $wiersz['wystepowanie'] . "</td></tr>";
        }

        mysqli_close($poloczenie);
        ?>
        </table>
    </main>
    <footer>
        <p>Stronę wykonał: Krystian Potoczek</p>
    </footer>
    </body>
    </html>
