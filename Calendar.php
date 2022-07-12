<?php
    include "header.php";
    require_once "connect.php";
        
?>


<?php
$query = "SELECT * FROM calendar";
$result = mysqli_query($conexiune, $query);
if(mysqli_num_rows($result)) {
    
    echo("<table border=none cellspacing='0' font-size:90%  style='border:none; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'> \n");
    echo("</tr>");
    echo("<th>Curs</th><th>Prima zi</th><th>Ultima zi</th><th>&nbspDin ziua&nbsp</th><th>&nbspPana in ziua&nbsp</th><th>&nbspDe la ora&nbsp</th><th>&nbspPana la ora&nbsp</th>");
    echo("</tr>");
    while($row = mysqli_fetch_array($result)){
        echo("<tr>\n");
        echo("<td style='border:3px solid white; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['Curs']). "</td>\n");
        echo("<td style='border:3px solid white; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['DataInceput']). "</td>\n");
        echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['DataFinal']). "</td>\n");
        echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['ZiInceput']). "</td>\n");
        echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['ZiFinal']). "</td>\n");
        echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['OraInceput']). "</td>\n");
        echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['OraFinal']). "</td>\n");
        echo("</tr>\n");
    }
    echo("</table>");
} 
else {
    echo "Nu exista cursuri in baza de date!";
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    include "footer.php";
?>