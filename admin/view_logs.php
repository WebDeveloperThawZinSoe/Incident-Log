<?php
            include "head.php";
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

            <!-- View All Logs -->

            <a href="export.php" class="btn btn-primary ">Download As CSV</a>
         
            <button onclick="window.print()" class="btn btn-primary ">Print</button>
            <br> <br>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Incident</th>
                        <th>Solution</th>
                        <th>User</th>
                        <th>Remark</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>

<?php
            include "footer.php";
        ?>