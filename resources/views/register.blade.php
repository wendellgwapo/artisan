<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login.blade.php');
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body> 
    <section class="h-100 h-custom gradient-custom-2" style="background-color: #6B44DA;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12" >
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="row g-0">
                <div class="col-lg-6">
                    <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #4835d4;">Personal Infomation</h3>
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class=error-msg>'.$error.'</span>';
                        }
                    }
                    ?>
                    <div class="mb-4 pb-2">
                        <select name="user_type">
                            <option value="worker">Skilled Worker</option>
                        </select>
                    </div>
                    <div class="mb-4 pb-2">
                        <div class="form-outline">
                            <label class="form-label" for="">Full Name</label>
                            <input type="text" name="name" required placeholder="" id="form3Examplev2" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <div class="mb-4 pb-2">
                        <div class="form-outline">
                            <label class="form-label" for="">Address</label>
                            <input type="text" name="" required placeholder="" id="form3Examplev2" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <div class="text">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label" for="">Date of Birth</label>
                                <input type="text" required placeholder="August" id="form3Examplev2" class="form-control form-control-lg" />
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="">Day</label>
                                <input type="number" required placeholder="00" id="form3Examplev2" class="form-control form-control-lg" />
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="">Year</label>
                                <input type="number" required placeholder="2000" id="form3Examplev2" class="form-control form-control-lg" />
                            </div>
                        </div>
                    </div>    

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                        <h6 class="mb-0 me-4">Gender: </h6>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                    </div>
                        <div class="mb-4">
                            <div class="form-outline form-white">
                                <label class="form-label" for="">Phone Number</label>
                                <input type="number" name="number" required placeholder="09..." id="form3Examplea8" class="form-control form-control-lg" />
                            </div>
                        </div>
                    <div class="mb-4">
                        <div class="form-outline form-white">
                            <label class="form-label" for="">Your Email</label>
                            <input type="email" name="email" required placeholder="...@gmail.com" id="form3Examplea9" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-outline form-white">
                            <label class="form-label" for="">New Password</label>
                            <input type="text" name="password" required placeholder="********" id="form3Examplea9" class="form-control form-control-lg" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-indigo">
                    <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #4835d4;">Professional Details</h3>

                    <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3">Job Title</label>
                            <input type="text" id="" class="form-control form-control-lg" />
                            
                        </div>
                    </div>

                    <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3">Field of Expertise</label>
                            <input type="text" id="form3" class="form-control form-control-lg" />
                            
                        </div>
                    </div>
       
                    <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3">Work Experience</label>
                            <input type="text" id="form3" class="form-control form-control-lg" />
                            
                        </div>
                    </div>

                    <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3">Educational and Qualifications</label>
                            <input type="text" id="form3" class="form-control form-control-lg" />
                            
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                        I do accept the <a href="#!" class=""><u>Terms and Conditions</u></a> of your
                        site.
                        </label>
                    </div>

                    <div class="text-center">    
                        <button type="button" name="submit" class="text-center btn btn-success btn-lg w-80"
                            data-mdb-ripple-color="dark" href="login">Register</button>
                    </div>
                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login"
                            class="fw-bold text-body"><u>Login here</u></a></p>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>