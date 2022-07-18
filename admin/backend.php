<?php
    session_start();
    include "database.php";

    /* Success message */
function success_message($data,$location){
    $_SESSION["success"] = $data;
    header("location:$location");
}

/* Error message */
function error_message($data,$location){
    $_SESSION["error"] = $data;
    header("location:$location");
    
}
/* Image Filter */
function image_filter($image,$location){
    $name = $image["name"];
    $size = $image["size"];
    $error = $image["error"];
    $tmp_name = $image["tmp_name"];
    $type = $image["type"];
    $image_upload_location = "uploads/";
    global $unique_file_name ;
    $unique_file_name = rand(0,100) . "_" . $name;

    if($error == 0){
        if($size < 2000000){
            if($type == "image/png" || $type=="image/jpg" || $type =="image/jpeg" || $type == "image/gif"){
                move_uploaded_file($tmp_name , $image_upload_location . $unique_file_name);
                return $unique_file_name;
            }else{
                error_message("We only accept jpg png and gif",$location);
                die();
            }
        }else{
            error_message("File is too big",$location);
            die();
        }
    }else{
        error_message("File has error" , $location);
        die();
    }

}


    /* Create Category */
    if(isset($_POST["category_create"])){
       $category = htmlspecialchars($_POST["category"]);
       $sql = "INSERT INTO category(category,status) VALUES ('$category',1)";
       $result = mysqli_query($connect,$sql);
       if($result){
        success_message("Create Category Success","category & subcategory.php");
       }else{
        error_message("Create Category Fail","category & subcategory.php");
       }
    }


    /* Category Delete */
    if(isset($_POST["category_delete"])){
        $id = htmlspecialchars($_POST["id"]);
        $sql = "UPDATE category SET status='0' WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result){
         success_message("Delete Category Success","category & subcategory.php");
        }else{
         error_message("Delete Category Fail","category & subcategory.php");
        }
    }

    /* Sub Category Create */
    if(isset($_POST["sub_category_create"])){
       $category = htmlspecialchars($_POST["category"]);
       $subcategory = htmlspecialchars($_POST["subcategory"]);
       $sql = "INSERT INTO sub_category(cat_id,subcategory,status) VALUES ('$category','$subcategory','1')";
       $result = mysqli_query($connect,$sql);
       if($result){
        success_message("Create SubCategory Success","category & subcategory.php");
       }else{
        error_message("Create SubCategory Fail","category & subcategory.php");
       }
    }
?>