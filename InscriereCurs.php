<?php

require_once "connect.php";
?>



<?php

$Nume = "";
$Prenume = "";
$Email = "";
$eroareNume = "";
$eroarePrenume = "";
$eroareEmail = "";

    $comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
    if (!empty($comanda)) {
    switch ($comanda){
        case 'add': 
            $nume = isset($_REQUEST["nume"]) ? $_REQUEST["nume"] : NULL;
            $prenume = isset($_REQUEST["prenume"]) ? $_REQUEST["prenume"] : NULL;
            $email = $_REQUEST["email"];
            $DenumireCurs = $_REQUEST["Cursuri"];
            $valid = true;
            if (empty($nume)) {
                echo "<div class='error'>Completati campul pentru a insera numele!</div>";
            $valid = false;
            }

            if (empty($prenume)) {
                echo "<div class='error'>Completati campul pentru a insera prenumele!</div>";
            $valid = false;
            }

            if (empty($email)) {
                echo "<div class='error'>Completati campul pentru a insera adresa de email!</div>";
                $valid = false;
                } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<div class='error'>Email-ul este invalid!</div>";
                $valid = false;
                }
            if($valid){
                $sql="INSERT INTO student (Nume, Prenume, Email, Curs) VALUES ('$nume', '$prenume', '$email', '$DenumireCurs')";
                if (!mysqli_query($conexiune, $sql)) 
                {
                    die('Error: ' . mysqli_error($conexiune));
                }
                echo "<div class='succes'>Intrare adaugata cu succes</div>";
            
                header('Location: Cursuri.php');
                exit;
            }
            
            break;
        }
    }

?>


<div id="table">
<form action="Cursuri.php" method="post" style='padding-left:30px;'>
    <input name="comanda" type="hidden" value="add" /><br><br>
    Nume: <input type="text" name="nume" style = 'font-size:20px;'/><br><br>
    Prenume: <input type="text" name="prenume" style = 'font-size:20px;'/><br><br>
    Email: <input type="text" name="email" style = 'font-size:20px;'/><br><br>

    <label>Alege un curs:</label>
    <select name="Cursuri" style = 'font-size:20px;'>
                <?php
                    $query = "SELECT * FROM cursuri";
                    $result = mysqli_query($conexiune, $query);
                    if(mysqli_num_rows($result)) {
                
                        while($row = mysqli_fetch_array($result)){
                            echo '<td><option>'.$row['DenumireCurs'].'</option></td>';
                        }

                    }
                    ?>
                    </select>

                <br><br>
                <input type="submit" value="Adauga" style = 'font-size:20px;'/>
</form>
</div>






