<?php
    include "header.php";
    require_once "connect.php";
?>

<br><br><br><br><br>

<?php
$curs = "";
$comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
if (!empty($comanda)) {
    switch ($comanda){
        case 'add':
            $curs = isset($_REQUEST["DenumireCurs"]) ? $_REQUEST["DenumireCurs"] :NULL ;
            $valid = true;
            if (empty($curs)) {
                echo "<div class='error'>Completati campul pentru a insera un curs!</div>";
                $valid = false;
            }

            if ($valid) {
                $sql="INSERT INTO cursuri(DenumireCurs) VALUES ('$curs')";
                if (!mysqli_query($conexiune, $sql)) {
                die('Error: ' . mysqli_error($conexiune));
                }
                
                echo "<div class='succes'>Intrare adaugata cu succes</div>";
            }
    break;
    }
}
?>



<form action="AdaugaCurs.php" method="post" style='font-size: 30px; color: white; padding-left:40px;'>
<input name="comanda" type="hidden" value="add" />
Denumire Curs: <input type="text" name="DenumireCurs" pattern='[a-z A-Z]{5-30}' title='Cursul nu poate fi vid!' style='font-size:20px;'/>
<input type="submit" value="Adauga" style='font-size:20px;'/>
</form>



<br><br><br><br><br>





<?php
    include "footer.php";
?>