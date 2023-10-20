<?php
session_start();
include('./header.php');
include('./navbar.php');
// if (!isset($_SESSION['is_loggedIn'])) {
//     header("Location: login.php");
// }
?>
<?php
if (isset($_SESSION['is_loggedIn'])) {
?>
    <div class="alert alert-success my-alert alert-dismissible fade show" role="alert">
         Login Successful
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}

echo "We are learning array";

// indexed array

// $colors = ["Red", "Green", "Blue", "Orange"];
// $colors2 = array("Red", "Green", "Blue", "Orange", "Black");

// echo "<pre>";
// print_r($colors);
// echo "</pre>";
// echo $colors[1];

// associative array

$intro = [
    "name" => "Ahmed",
    "age" => 22,
    "course" => "Web Development",
    "institute" => "Birdview Logic"
];

echo "<pre>";
print_r($intro);
echo "</pre>";

echo "My Name is " . $intro['name'] . " and my age is " . $intro['age'];

?>


<h1>UserName:
    <?php if (isset($_SESSION['user_name'])) {
        echo $_SESSION['user_name'];
    } ?>
</h1>
<h1>UserEmail:
    <?php if (isset($_SESSION['user_email'])) {
        echo $_SESSION['user_email'];
    } ?>
</h1>



<?php include('./footer.php'); ?>