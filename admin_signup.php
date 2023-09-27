<?php 
    session_start();
    include("connection1.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email  = $_POST['email'];
        $a_rc   = $_POST['rc'];
        $f_name = $_POST['username'];
        $p_name = $_POST['password'];
        $c_name = $_POST['Confirm_password'];

        if(!empty($email) && !empty($a_rc) && !empty($f_name) && !empty($p_name) && !is_numeric($f_name) &&  ($p_name)==($c_name))
        {
            $query = "INSERT INTO form values('$email','$a_rc','$f_name','$p_name','$c_name')";
            $data  = mysqli_query($conn,$query);

            echo "<script type='text/javascript'> alert('Successsfully Register')</script>";
            $_SESSION['username'] = $f_name;
            header("Location:BusMate Tracker/Admin.php");
            die;
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistration form</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card">
            <!-- card header -->
            <div class="card-header">
                <h3 class="text-center" style="color:red;">Sign Up As Admin</h3>
            </div>
            <!-- card body -->
            <div class="card-body">
                <form action="" method="post">
                    <!-- first field -->
                    <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGroup1" placeholder="Enter your Username"
                                required="required" autocomplete="off" name="email">
                                <label for="floatingInputGroup1">Email Id</label>
                            </div>
                            <!-- rc -->
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Enter your Username"
                                required="required" autocomplete="off" name="rc">
                                <label for="floatingInputGroup1">RC number</label>
                            </div>
                        </div>
                        <!-- user name -->
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
                    <!-- third field -->
                    <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGroup1" placeholder="Confirm password"
                                required="required" autocomplete="off" name="Confirm_password">
                                <label for="floatingInputGroup1">Confirm_password</label>
                            </div>
                     </div>
                    <!-- signup button -->
                    <div class="form-group">
                    <a href="busmate.php" ><input type="submit" name="register" value="signUp"  class="registration_btn"></input></a>
                        
                    </div>
                </form>

            </div>
            <!-- card footer -->
            <div class="card-footer text-center text-light signup">
                Already have an account? <a href="admin_signin.php">Sign In</a>
                <a href="BusMate Tracker/front.html"><p>Go to main Page</a>
                <a style="color:White;" href="signin.php"><p>Not ADMIN? Sign in As User</a>
            </div>
           
        </div>
    </div>
    
</body>
</html>

<?php
    // if($_POST['register'])
    // {
    //    $f_name = $_POST['username'];
    //    $p_name = $_POST['password'];
    //    $c_name = $_POST['Confirm_password'];

    //    $query = "INSERT INTO form values('$f_name','$p_name','$c_name')";

    //    $data = mysqli_query($conn,$query);
    //    if($data)
    //    {
    //     echo "ok";
    //    }
    //    else
    //    {
    //     echo "failed";
    //    }
    // }
?>