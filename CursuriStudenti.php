<?php
    require_once "connect.php";
        
?>
<br>
<?php
$query = "SELECT * FROM student";
$result = mysqli_query($conexiune, $query);
if(mysqli_num_rows($result)) {
    echo("<table border=none cellspacing='0' font-size:90%  style='border:none; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold;'> \n");
    echo("</tr>");
    echo("<th>&nbsp&nbsp&nbsp&nbsp&nbspNume&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbsp&nbspPrenume&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Curs</th>");
    echo("</tr>");

    while($row = mysqli_fetch_array($result)){
        echo("<tr>");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['Nume']. "</td>\n");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['Prenume']. "</td>\n");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['Curs']. "</td>\n");
        echo("</tr>");
    }
    echo("</table>");
} 
else {
    echo "Nu exista traineri in baza de date!";
}
?>