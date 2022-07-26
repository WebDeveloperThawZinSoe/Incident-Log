<?php
session_start();
?>
<?php
   $connect = mysqli_connect("localhost","cp473227_thaw","ThawZinSoe@932001","cp473227_laravel2");
    if(!$connect){
        ?>
        <h2 style="color:red">Database Connection Error</h2>
        <?php
    }
?>
<?php
if(isset($_POST['login'])){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    
    $sql = "SELECT * FROM member WHERE  name='$username' && password='$password'";
    $data = mysqli_query($connect,$sql);
    $result = mysqli_num_rows($data);
    if($result > 0){
      foreach($data as $key=>$value){
        $role = $value['role'];
        if($role == "admin"){
          $_SESSION['admin_username'] = $username;
          $_SESSION["admin_password"] = $password;
          $_SESSION["username"] = $username;
          header("location:admin");
        }else{
          $_SESSION['user_username'] = $username;
          $_SESSION["user_password"] = $password;
          $_SESSION["username"] = $username;
          header("location:user");
        }
      }
    }else{
      header("location:index.php");
      
    }
}
?>