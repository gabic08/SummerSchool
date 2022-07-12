<?php
    include "header.php";
    require_once "connect.php";
        
?>
<div id="table">
<form action="" method="post">
  <table width="400"  cellpadding="5" style='padding-left: 50px; font-size:50px;'>
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Admin</td>
      <td><input name="Username" type="text" style='font-size: 30px;'></td>
    </tr>
    <tr>
      <td align="right">Parola</td>
      <td><input name="Password" type="password" style='font-size: 30px;'></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login"  style='color: #850000; font-size: 40px; '></td>
    </tr>
  </table>
</form>

    </div>

<?php 

        session_start();
        $valid = false;
        
        if(isset($_POST['Submit'])){
            $query = "SELECT * FROM admin";
            $result = mysqli_query($conexiune, $query);
            
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){
                    $NumeAdmin = htmlspecialchars($row['Admin']);
                    $Parola = htmlspecialchars($row['Parola']);
                }
            }
            
            $Admin = isset($_POST['Username']) ? $_POST['Username'] : NULL;
            $Password = isset($_POST['Password']) ? $_POST['Password'] : NULL;
                        
            
                if (!empty($Admin) && $Password == $Parola){
                  $valid = true;
                }
                
                if($valid)
                {
                        header("location:Admin.php");
                        exit;
                } else {
                    echo "<div class='error'>Date de logare invalide!</div>";
                }
            }
        
?>



 <?php
    include "footer.php";
?>