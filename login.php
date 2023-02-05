<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
  <section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
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
              <form action="#" method="POST">
                <div class="form-outline mb-4 error">
                  <label class="form-label" id="Errors"></label>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="email" name="email" class="form-control" />
                  <label class="form-label error" id="e_error"></label>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="pwd" name="pwd" class="form-control" />
                  <label class="form-label error" id="p_error"></label>
                </div>
                <div class="log_btns">
                  <button type="submit" id="signin" name="signin" class="btn btn-primary">Sign In</button>
                  <a href="index.php" class="btn btn-primary">Cancel</a>
                </div>
                <div class="text-center"><br>
                  <a href="register.php">Create New Account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="./js/signin.js"></script> -->
</html>