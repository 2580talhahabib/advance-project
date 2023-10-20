<?php
include('./header.php');

// Getting data from html form
if (isset($_REQUEST['reg_data'])) {
    $user_name = $_REQUEST['user_name'];
    $user_email = $_REQUEST['user_email'];
    $user_pass = $_REQUEST['user_pass'];
    $con_user_pass = $_REQUEST['con_user_pass'];

    if ($user_pass === $con_user_pass) {
        include("./db_conn.php");

        // prepare database query
        $sql = "INSERT INTO student_data (user_name, user_email, user_pass)
                VALUES ('$user_name', '$user_email', '$user_pass')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Passwords are not same";
    }
}

?>


<div class="container py-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center my-3">Registration Form</h2>
            <div class="card">
                <div class="card-header">
                    Enter Your All Details
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group mb-3">
                            <label for="user_name" class="form-label">UserName</label>
                            <input type="text" id="user_name" name="user_name" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user_email" class="form-label">Email</label>
                            <input type="email" name="user_email" id="user_email" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user_pass" class="form-label">Password</label>
                            <input type="password" name="user_pass" id="user_pass" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="con_user_pass" class="form-label">Confirm Password</label>
                            <input type="password" name="con_user_pass" id="con_user_pass" required class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit" name="reg_data">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>