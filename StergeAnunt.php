<?php
    include "header.php";
    require_once "connect.php";
?>



<?php

$comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
if (!empty($comanda)) {
switch ($comanda){
case 'delete':
$id = $_REQUEST["id"];

$sql = "DELETE FROM noutati WHERE ID=$id";
if (!mysqli_query($conexiune, $sql)) {
die('Error: ' . mysqli_error($conexiune));
}
echo "<div class='succes'>Intrarea cu id-ul $id a fost stearsa cu succes</div>";
break;

}
}
?>



<div id="table">
    <?php
    $query = "SELECT * FROM noutati";
    $result = mysqli_query($conexiune, $query);
    if(mysqli_num_rows($result)) {
    print("<table border='1' cellspacing='0'>\n");
    while($row = mysqli_fetch_array($result)){
    print("<tr>\n");
    print("<td>" . $row['Descriere']. "</td>\n");
    print("<td><a href='StergeAnunt.php?comanda=delete&id=" . $row['ID']. "'>Sterge</a></td>\n");
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