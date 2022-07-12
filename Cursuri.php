<?php
    include "header.php";   
    require_once "connect.php";
        
?>

<div id="logo" style='background-color: rgba(0, 0, 0, 0.8);'>
    <br><h1>Cursuri</h1><br>
    <?php
    $query = "SELECT * FROM cursuri";
    $result = mysqli_query($conexiune, $query);
    if(mysqli_num_rows($result)) {
        
        echo("<table border='0' cellspacing='0' font-size:90%> \n");
        echo("</tr>\n");
        while($row = mysqli_fetch_array($result)){
            echo("<tr>\n");
            echo("<td style='border:3px solid white;color:white; background-color: rgba(0, 0, 0, 0.8); font-size:30px; padding:10px; font-weight:bold'>" . htmlspecialchars($row['DenumireCurs']). "</td>\n");
            echo("</tr>\n");
        }
        echo("</table>");
    } 
    else {
        echo "Nu exista cursuri in baza de date!";
    }
    ?>

    <br><br><br><br><br><br><br>


    <h1>Inscriere la cursuri</h1><br>
    <?php
        include "InscriereCurs.php";
    ?>
    <br><br><br><br><br><br><br>



    <h1>Participantii la cursurile noastre</h1><br>
    <?php
        include "CursuriStudenti.php";
    ?>

</div>

<?php
    include "footer.php";
?>
