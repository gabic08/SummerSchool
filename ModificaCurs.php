<?php
    include "header.php";
    require_once "connect.php";
?>



<?php
$comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
if (!empty($comanda)) {
switch ($comanda){
    case 'edit':
    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM cursuri WHERE ID=$id";
    $result = mysqli_query($conexiune, $sql);
    if ($row = mysqli_fetch_array($result)) {
    $curs = $row['DenumireCurs'];
    ?>
 
    <div id="logo">
        <h1>Modificare</h1>
        <form action="ModificaCurs.php" method="post">
        <input name="comanda" type="hidden" value="update" />
        <input name="id" type="hidden" value="<?php echo $id;?>" />

        <h1>Denumire Curs: <input type="text" name="curs" value="<?php echo $curs?>"/></h1>
        <input type="submit" value="Update"/>
        </form>
    </div>

    <?php
    } else {
    echo "<div class='error'>Intrarea cu id-ul $id nu exista!</div>";
    }
    break;


    case 'update':
    $id = $_REQUEST["id"];
    $curs = $_REQUEST["curs"];
    if(!empty($urs)){
    $sql = "UPDATE cursuri SET DenumireCurs='$curs' WHERE ID=$id";
        if (!mysqli_query($conexiune, $sql)) {
        die('Error: ' . mysqli_error($conexiune));
        } else {
        echo "<div class='succes'>Intrarea cu id-ul $id a fost actualizata cu succes!</div>";
        }
    }
    else{
        echo "<div class='error'>Completati campul pentru modifica cursul!</div>";
    }
    break;
}
}
?>







<div id="table">
    <?php
    $query = "SELECT * FROM cursuri";
    $result = mysqli_query($conexiune, $query);
    if(mysqli_num_rows($result)) {
    print("<table border='1' cellspacing='0'>\n");
    while($row = mysqli_fetch_array($result)){
    print("<tr>\n");
    print("<td>" . $row['DenumireCurs']. "</td>\n");
    print("<td><a href='ModificaCurs.php?comanda=edit&id=" . htmlspecialchars($row['ID']). "'>Modifica</a></td>\n");
    print("</tr>\n");
    }
    print("</table>");
    } else {
    print "Nu exista intrari in agenda!";
    }
    ?>
</div>




<?php
    include "footer.php";
?>