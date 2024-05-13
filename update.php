<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="all-record">Edit Record</h3>

                    <!-- Horizontal Form -->
                    <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sid" id="inputText">
                            </div>
                            <div class="text-center pt-2">
                                <button type="submit" class="btn btn-warning" name="showbtn">Show</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['showbtn'])) {
                        include 'config.php';
                        $stu_id = $_POST['sid'];
                        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
                        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <form class="post-form" method="post" action="updatedata.php">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sname" id="inputText" value="<?php echo $row['sname'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="saddress" id="inputEmail" value="<?php echo $row['saddress'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="sclass">
                                                <?php
                                                $sql1 = "SELECT * FROM studentclass";
                                                $result1 = mysqli_query($conn, $sql1) or die("query unsuccessful.");

                                                if (mysqli_num_rows($result1) > 0) {
                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                        $selected = ($row['sclass'] == $row1['cid']) ? 'selected' : '';
                                                        echo "<option value='{$row1["cid"]}' {$selected}>{$row1["cname"]}</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
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
                                </form>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="add">
                <img src="images/edit.jpg" class="mx-auto d-block" alt="" srcset="">
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ?>