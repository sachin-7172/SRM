<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="all-record">All Record</h2>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid ORDER BY sid ASC";
                $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">CLASS</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sid'] ?></th>
                                    <td><?php echo $row['sname'] ?></td>
                                    <td><?php echo $row['saddress'] ?></td>
                                    <td><?php echo $row['cname'] ?></td>
                                    <td><?php echo $row['sphone'] ?></td>

                                    <td>
                                        <a href="edit.php?id=<?php echo $row['sid'] ?>" class=" btn btn-success">Edit</a>
                                        <a href="delete-inline.php?id=<?php echo $row['sid'] ?>" class=" btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                <?php   } else {
                    echo "No record found";
                }
                mysqli_close($conn);
                ?>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>