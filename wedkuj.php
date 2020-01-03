<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Wędkujemy</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styl_1.css" type="text/css">
</head>
<body>
<div id="baner">
    <h1>Portal dla wędkarzy</h1>
  </div>
  <div id="lewy">
    <h2>Ryby drapieżne naszych wód</h2>
    <div id="script"></div>
    <?php
    $conn = mysqli_connect("localhost","root","","wedkowanie");
    $query = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
      $result = mysqli_query($conn,$query);
        echo "<ul>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<li>".$row['nazwa']." ";
            echo "występowanie: ";
            echo $row['wystepowanie']."</li>";
          }
        echo "</ul>";
    mysqli_close($conn);
    ?>
  </div>
  <div id="prawy">
    <img src="ryba1.jpg" alt="Sum"><br>
    <a href="kwerendy.txt" download>Pobierz kwerendy</a>
  </div>
  <div id="stopka">
    <p>Stronę wykonal: 1234567890111</p>
  </div>
</body>
</html>