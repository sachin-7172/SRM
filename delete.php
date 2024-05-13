<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>


<?php
if (isset($_POST['deletebtn'])) {

    include 'config.php';
    $sid = $_POST['sid'];
    $sql = "DELETE from student WHERE sid={$sid}";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

    header("location: http://localhost/Training/php/project/crud");
    mysqli_close($conn);
}
?>
<div class="container pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="all-record">Delete Record</h2>

                        <!-- Horizontal Form -->
                        <form class="post-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sid" id="inputPassword">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="deletebtn" value="delete" class="btn btn-success">Delete</button>

                            </div>
                        </form><!-- End Horizontal Form -->

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="add">
                <img src="images/delete.jpeg" class="mx-auto d-block" style="border-radius: 50%;" alt="" srcset="">
            </div>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>