
<html>
    <body>
        <form method="post" action="Ejercicio25.php">
            <input type="text" name="1">
            <input type="text" name="2">
            <input type="text" name="3">
            <input type="text" name="4">
            <input type="submit" name="enviar">
        </form>
   <table border="1">
       <tr>


<?php
$enviar=$_POST['enviar']??false;
if($enviar)
for($i=1;$i<5;$i++){
    ?>
           <td><?php echo $variables=$_POST[$i]; ?></td>
  <?php
}

?>
       </tr>
   </table>
    </body>
</html>


