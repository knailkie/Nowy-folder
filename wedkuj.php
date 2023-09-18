<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header><h1 class="hed">Portal dla wędkarzy</h1></header>
    <div class="griid">
   <div class="nagorze">
    <div class="blok1">
    <h3>Ryby zamieszkujące rzeki</h3>
    <ol>
    <?php
				$con = mysqli_connect('localhost', 'root', '', 'wedkowanie');
				
				$q1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
				$res1 = mysqli_query($con, $q1);
				while ($row = mysqli_fetch_array($res1)) {
					echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
				}
				?>
    </ol>
</div>
<div class="blok2">
<h3>Ryby drapieżne naszych wód</h3>
<table>
    <tbody>
    <tr>
    <td class="first3">L.p.</td>
    <td class="first3">Gatunek</td>
    <td class="first3">Występowanie</td>
    </tr>
    <?php
				$q2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;";
				$res2 = mysqli_query($con, $q2);
				while ($row = mysqli_fetch_array($res2)) {
					echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
				}
				mysqli_close($con);
				?>
  
    </tbody>
    </table>
</div>
</div>
    <div class="obraz">
    <img src="ryba1.jpg" width="400px" alt="Sum">
    <div class="kweren">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
</div>
</div>

</div>
<footer><p>Stronę wykonał: Nikodem Gierdziejewski</p></footer>
</body>
</html>