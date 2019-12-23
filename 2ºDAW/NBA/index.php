<?php
include("bbdd.php");
$a= new BBDD();
?>

<form action="index.php" method="post">

    <select name="conferencia">
        <?php
     $a->getConferencias();

        ?>
    </select>

</form>

<?php

?>