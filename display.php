<?php
include('./header.php');
?>

<div class="container">
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include("./db_conn.php");
            $sql = "SELECT * FROM student_data";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row  = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row['user_id']; ?></th>
                        <td scope="row"><?php echo $row['user_name']; ?></td>
                        <td scope="row"><?php echo $row['user_email']; ?></td>
                        <td scope="row"><?php echo $row['user_pass']; ?></td>
                        
                    </tr>
            <?php
                }
            } else {
                echo "No Record Found";
            }
            ?>


        </tbody>
    </table>
</div>

<?php include('./footer.php'); ?>