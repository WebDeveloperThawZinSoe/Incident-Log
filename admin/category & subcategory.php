<?php
            include "head.php";
            include "alert.php";
        ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php
                include "slidebar.php";
           ?>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <?php
                    include "nav.php";
                ?>
        <!-- Page content-->
        <div class="container-fluid">
            <br>

            <!-- Category -->
           
            <div class="row">
                <div class="col-md-6">
                    <form action="backend.php" method="post">
                        <div class="form-group ">
                            <label for="category">Category:</label>
                            <input type="text" class="form-control" placeholder="Enter Category" name="category"
                                id="category" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="category_create" class="btn btn-primary" value="Create">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM category Order by id DESC";
                                $result = mysqli_query($connect,$sql);
                                $number_row = mysqli_num_rows($result);
                                $number = 0;
                                $number += $number;
                                if($number_row > 0){
                                    foreach($result as $key=>$value){
                                        $status = $value['status'];
                                        if($status == 1){

                                        
                                        ?>
                            <tr>
                                <td><?php echo ++$number; ?></td>
                                <td><?php echo $value['category']; ?></td>
                                <td>

                                    <form style="display:inline-block" class="" action="" method="post">
                                        <input type="hidden" value="<?php echo $value['id'] ?>">
                                        <input type="submit" name="category_edit" value="Edit" class="btn btn-warning">
                                    </form>

                                    <form style="display:inline-block" class="form-display" action="backend.php" method="post">
                                        <input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                                        <input type="submit" name="category_delete" value="Delete" onclick="return confirm('Are you sure you want to delete this Category?')" class="btn btn-danger">
                                    </form>

                                </td>
                            </tr>
                            <?php
                                        }
                                    }
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

             <hr>

            <!-- Sub Category -->
           
            <div class="row">
                <div class="col-md-6">
                    <form action="backend.php" method="post">
                      <div class="form-group ">
                            <label for="category">Category:</label>
                            <select  class="form-control"  name="category"
                                id="category" required>
                                <option value="" disabled selected>---- Select ----</option> 
                                <?php
                                    $sql = "SELECT * FROM category ORDER BY id DESC";
                                    $result = mysqli_query($connect,$sql);
                                    foreach($result as $row){
                                        $id = $row['id'];
                                        $name = $row['category'];
                                        $status = $row['status'];
                                        if($status == 1){
                                            ?>
                                                <option value="<?php echo $id; ?>"><?php  echo $name; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <br>
                        <div class="form-group ">
                            <label for="category">Sub Category:</label>
                            <input type="text" class="form-control" placeholder="Enter Sub Category" name="subcategory"
                                id="category" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="sub_category_create" class="btn btn-primary" value="Create">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>SubCategory</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM sub_category Order by id DESC";
                                $result = mysqli_query($connect,$sql);
                                $number_row = mysqli_num_rows($result);
                                $number = 0;
                                $number += $number;
                                if($number_row > 0){
                                    foreach($result as $key=>$value){
                                        $status = $value['status'];
                                        if($status == 1){

                                        
                                        ?>
                            <tr>
                                <td><?php echo ++$number; ?></td>
                                <td><?php echo $value['subcategory']; ?></td>
                                <td>

                                    <form style="display:inline-block" class="" action="" method="post">
                                        <input type="hidden" value="<?php echo $value['id'] ?>">
                                        <input type="submit" name="category_edit" value="Edit" class="btn btn-warning">
                                    </form>

                                    <form style="display:inline-block" class="form-display" action="backend.php" method="post">
                                        <input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                                        <input type="submit" name="category_delete" value="Delete" onclick="return confirm('Are you sure you want to delete this Sub Category?')" class="btn btn-danger">
                                    </form>

                                </td>
                            </tr>
                            <?php
                                        }
                                    }
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
            include "footer.php";
        ?>