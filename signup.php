<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NzCoding - LiveChat Application</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- fontawesome icon pack -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/styles/signup.css">
</head>
<body>
    

    <div class="container" style="margin-top: 120px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4><strong>NzCoding - Live Chat</strong></h4>
                        <h6>Create Account</h6>
                    </div>

                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" class="form-control" placeholder="enter name" autocomplete="false">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="enter email" autocomplete="false">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="enter password" autocomplete="false">
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="confirm_password" name="confirm_password" id="confirm_password" class="form-control" placeholder="enter confirm password" autocomplete="false">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary w-50">Create Account</button>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12 text-center mt-3">
                                <p class="already_signed">Already have an account? <a href="login.php">Login Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

