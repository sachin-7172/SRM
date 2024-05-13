<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="all-record">Add New Record</h2>

                        <!-- Horizontal Form -->
                        <form class="post-form" action="savedata.php" method="post">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="sname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" name="saddress">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-select" name="sclass">
                                        <option selected="">Select Class...</option>
                                        <?php

                                        include 'config.php';
                                        $sql = "SELECT * FROM studentclass";
                                        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="sphone">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success submit" value="submit">Save</button>

                            </div>
                        </form><!-- End Horizontal Form -->

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