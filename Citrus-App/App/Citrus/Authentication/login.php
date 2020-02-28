<?php
session_start();

require_once '../../../connect.php';

if (isset($_POST['submit'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $sql = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";
    $q = $conn->query($sql);

    if (!$q = $conn->query($sql)) {
        die("Database error!");
    } else {
        if (mysqli_num_rows($q) > 0) {
            $line = $q->fetch_object();
            $_SESSION['admin_id'] = $line->id;
            $_SESSION['admin_name'] = $line->name;
            header("Location: ../../../index.php");
        } else {
            $msg = "Pogresan username i password!";
        };
    };
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Citrus</title>

    <link rel="stylesheet" type="text/css" href="/Citrus-App/css/login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <?php include '../View/Index/navbar.php'; ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <h1 class="text-center">Login</h1>
                        <?php if (!empty($msg)) echo $msg; ?>
                        <form action="" method="POST">
                            <p>Username:</p>
                            <input type="text" class="form-control" name="username">
                            <p>Password:</p>
                            <input type="password" class="form-control" name="password">
                            <div class="button">
                                <input type="submit" name="submit" class="btn btn-primary mt-3" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
        <?php include '../View/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>