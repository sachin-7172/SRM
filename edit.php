<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="all-record">Update Record</h2>
                        <?php

                        include 'config.php';
                        $stu_id = $_GET['id'];
                        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
                        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <!-- Horizontal Form -->
                                <form class="post-form" method="post" action="updatedata.php">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" name="sid" value="<?php echo $row['sid'] ?>">
                                            <input type="text" class="form-control" name="sname" value="<?php echo $row['sname'] ?>" id="inputText">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail" name="saddress" value="<?php echo $row['saddress'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
                                        <?php
                                        $sql1 = "SELECT * FROM studentclass";
                                        $result1 = mysqli_query($conn, $sql1) or die("query unsuccessful.");

                                        if (mysqli_num_rows($result1) > 0) {
                                            echo '<div class="col-sm-10">
                                        <select  class="form-select" name="sclass"> ';
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                if ($row['sclass'] == $row1['cid']) {
                                                    $select = "selected";
                                                } else {
                                                    $select = "";
                                                }
                                                echo "<option {$select} value='{$row1["cid"]}'> {$row1["cname"]}</option>";
                                            }
                                            echo "</select> ";
                                        }
                                        ?>
                                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="sphone" value="<?php echo $row['sphone'] ?>">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success submit" value="update">Update</button>

                </div>
                </form><!-- End Horizontal Form -->
        <?php
                            }
                        }
        ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="add">
            <img src="images/add.png" class="mx-auto d-block" alt="" srcset="">
        </div>
    </div>
</div>
</div>


<?php include_once('footer.php') ?>