<?php
   $connect = mysqli_connect("localhost","cp473227_thaw","ThawZinSoe@932001","cp473227_laravel2");
    if(!$connect){
        ?>
        <h2 style="color:red">Database Connection Error</h2>
        <?php
    }
?>