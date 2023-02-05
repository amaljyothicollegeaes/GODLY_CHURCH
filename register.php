<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">Welcome to<br />
                        <span style="color: hsl(218, 81%, 75%)">St. George Church Adakkakundu</span>
                    </h1>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-outline error">
                                            <label class="form-label" id="Errors"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">First name</label>
                                            <input type="text" id="fname" name="fname" class="form-control" />
                                            <label class="form-label error" id="f_error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Last name</label>
                                            <input type="text" id="lname" name="lname" class="form-control" />
                                            <label class="form-label error" id="l_error"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Password</label>
                                            <input type="password" id="pwd" name="pwd" class="form-control" />
                                            <label class="form-label error" id="p_error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" id="cpwd" name="cpwd" class="form-control" />
                                            <label class="form-label error" id="cp_error"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example3">Email address <label class="form-label error" id="e_errors"></label></label>
                                            <input type="email" id="email" name="email" class="form-control">
                                            <label class="form-label error" id="e_error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Profile Pic</label>
                                            <input type="file" id="files" name="files" onchange="return fileValidation()" class="form-control" accept="image/*">
                                            <label class="form-label error" id="file_er"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="signup_btns">
                                    <button type="submit" id="signup" name="sign" class="btn btn-primary">Sign
                                        Up</button>
                                    <a href="index.php" class="btn btn-primary">Cancel</a>
                                </div>
                                <div class="text-center"><br>
                                    <a href="./login.php">Already have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/signup.js"></script>
</html>