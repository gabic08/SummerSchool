<?php
    include "header.php";
    require_once "connect.php";
        
?>


<?php
$query = "SELECT * FROM noutati";
$result = mysqli_query($conexiune, $query);
if(mysqli_num_rows($result)) {
    
    echo("<table border='2' cellspacing='40' font-size:90%> \n");
    echo("</tr>\n");
    while($row = mysqli_fetch_array($result)){
        echo("<tr>\n");echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['Descriere']). "</td>\n");
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
