<?php
    include "header.php";
    require_once "connect.php";
        
?>

<?php
$query = "SELECT * FROM organizatori";
$result = mysqli_query($conexiune, $query);
if(mysqli_num_rows($result)) {
    
    echo("<table border=none cellspacing='0' font-size:90%  style='border:none; color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'> \n");
    echo("</tr>");
    while($row = mysqli_fetch_array($result)){
        echo("<tr>\n");
        echo '<td><img src="Images/', htmlspecialchars($row['Nume']), ' ', htmlspecialchars($row['Prenume']) , '.jpg" alt="poza" style="width:220px; height:220px"/></td>';
        echo("<td style='border:none; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp;" . htmlspecialchars($row['Nume']). "</td>\n");
        echo("<td style='border:none; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['Prenume']). "</td>\n");
        echo("<td style='border:none; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp;" . htmlspecialchars($row['Email']). "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>\n");
        echo("<td style='border:none; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp;" . htmlspecialchars($row['Telefon']). "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>\n");
        
        echo("</tr>\n");
    }
    echo("</table>");
} 
else {
    echo "Nu exista cursuri in baza de date!";
}
?>




<?php
    include "footer.php";
?>
