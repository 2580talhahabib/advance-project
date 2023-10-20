<?php
session_start();
include('./header.php');

// Getting data from html form
if (isset($_REQUEST['login_data'])) {
    $user_email = $_REQUEST['user_email'];
    $user_pass = $_REQUEST['user_pass'];

    include("./db_conn.php");
    $sql = "SELECT * FROM student_data WHERE user_email = '$user_email' AND user_pass = '$user_pass'";

    $result = mysqli_query($conn, $sql);



    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['is_loggedIn'] = true;
        $_SESSION['msg'] = "Login Successful";

        header("Location: index.php");
    } else {
        echo "User Does not Exist";
    }
}

?>


<div class="container py-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center my-3">Login Form</h2>
            <div class="card">
                <div class="card-header">
                    Enter Your All Details
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group mb-3">
                            <label for="user_name" class="form-label">User Email</label>
                            <input type="email" id="user_email" placeholder="Enter email" name="user_email" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="user_pass" class="form-label">Password</label>
                            <input type="password" name="user_pass" placeholder="Enter Password" id="user_pass" required class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit" name="login_data">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>