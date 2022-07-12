<?php
    include "header.php";
    require_once "connect.php";
?>

<br><br><br><br><br>

<?php

$descriere = "";
$comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
if (!empty($comanda)) {
    switch ($comanda){
        case 'add':
            $descriere = isset($_REQUEST["Descriere"]) ? $_REQUEST["Descriere"] :NULL ;
            $valid = true;
            if (empty($descriere)) {
                echo "<div class='error'>Completati campul pentru a insera un anunt!</div>";
                $valid = false;
            }

            if ($valid) {
                $sql="INSERT INTO noutati(Descriere) VALUES ('$descriere')";
                if (!mysqli_query($conexiune, $sql)) {
                die('Error: ' . mysqli_error($conexiune));
                }
                
                echo "<div class='succes'>Intrare adaugata cu succes</div>";
            }
    break;
    }
}
?>



<form action="AdaugaAnunt.php" method="post" style='font-size: 30px; color: white; padding-left:40px;'>
<input name="comanda" type="hidden" value="add" />
Anunt: <input type="text" name="Descriere" style='font-size:20px;'/>
<input type="submit" value="Adauga" style='font-size:20px;'/>
</form>



<br><br><br><br><br>





<?php
    include "footer.php";
?>
