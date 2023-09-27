<?php
session_start();
include("connection1.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $f_name = $_POST['username'];
    $p_name = $_POST['password'];

    if (!empty($f_name) && !empty($p_name) && !is_numeric($f_name)) {
        $query = "SELECT * FROM form WHERE username = '$f_name' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $p_name) {
                    // Store the username in a session variable
                    $_SESSION['username'] = $f_name;
                    
                    // Redirect to the welcome page
                    header("Location:BusMate Tracker/Admin.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card signin_card">
            <!-- card header -->
            <div class="card-header">
                <h3 class="text-center" style="color:red;">Sign In As ADMIN</h3>
            </div>
            <!-- card body -->
            <div class="card-body">
                <form method="POST">
                    <!-- first field -->
                    <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Enter your Username"
                                required="required" autocomplete="off" name="username">
                                <label for="floatingInputGroup1">Enter your Username</label>
                            </div>
                        </div>
                    <!-- second field -->
                    <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGroup1" placeholder="Enter your password"
                                required="required" autocomplete="off" name="password">
                                <label for="floatingInputGroup1">Enter your password</label>
                            </div>
                        </div>
                    <!-- signup button -->
                    <div class="form-group">
                        <input type="submit" name="signin" value="Sign In" class="registration_btn">
                    </div>
                </form>

            </div>
            <!-- card footer -->
            <div class="card-footer text-center text-light signin">
                Don't have an account? <a href="index.php">Sign Up</a>
                <a href="BusMate Tracker/front.html"><p>Go to main Page</a>
                <a style="color:White;" href="admin_signup.php"><p>Not User? Sign in As ADMIN</a>
            </div>
        </div>
    </div>
</body>
</html>
