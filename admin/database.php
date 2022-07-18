<?php
   $connect = mysqli_connect("localhost","root","","incident_management_system");
    if(!$connect){
        ?>
        <h2 style="color:red">Database Connection Error</h2>
        <?php
    }
?>