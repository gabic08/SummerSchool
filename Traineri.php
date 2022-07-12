<?php
    include "header.php";
    require_once "connect.php";
        
?>
<br>
<?php
$query = "SELECT * FROM traineri";
$result = mysqli_query($conexiune, $query);
if(mysqli_num_rows($result)) {
    echo("<table border=none cellspacing='0' font-size:90%  style='border:none; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'> \n");
    echo("</tr>");
    echo("<th></th><th>Nume</th><th>Prenume</th><th>Email</th><th>Telefon</th>");
    echo("</tr>");

    while($row = mysqli_fetch_array($result)){
        echo("<tr>");
        echo '<td><img src="Images/', $row['Nume'], ' ', $row['Prenume'], '.jpg" alt="poza" style="width:180px; height:180px"/></td>';
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp;" . htmlspecialchars($row['Nume']). "</td>\n");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['Prenume']). "</td>\n");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp" . htmlspecialchars($row['Email']). "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>\n");
        echo("<td style='border:none;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp;" . htmlspecialchars($row['Telefon']). "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>\n");
        echo("</tr>");
    }
    echo("</table>");
} 
else {
    echo "Nu exista traineri in baza de date!";
}
?>


<br><br><br><br><br><br>


<?php
    include "footer.php";
?>
