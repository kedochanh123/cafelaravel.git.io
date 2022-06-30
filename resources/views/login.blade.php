<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- import css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cafe+</title>
    <style type="text/css">
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .bgr-body {
            background-image: url("https://hanoispiritofplace.com/wp-content/uploads/2018/04/hinh-anh-ly-cafe-buoi-sang-dep-ly-va-ngon-tuyet-dam-da-13.jpg");
            background-size: cover;
            padding: 40px;
            overflow: hidden;
        }
    </style>
    <script !src="">
        if ()
    </script>
</head>
<body class="bgr-body">
<form method="POST" action="{{ route('login') }}">
@csrf
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <?php
                            if(isset($error_login) && $error_login) {
                                echo "<p class='text-danger'> $error_login </p>";
                            }
                        ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label text-white" for="email" color="blue"">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{isset($email)?$email:''}}"
                                   placeholder="Enter a valid email address"/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label text-white" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" value="{{isset($password)?$password:''}}"
                                   placeholder="Enter password"/>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3"/>
                                <label class="form-check-label text-warning" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" name="btn-login"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login
                            </button>
                                <p class="small fw-bold mt-2 pt-1 mb-0 text-warning">Don't have an account? <a href="{{ route('create') }}" class="link-danger">Register</a></p>
                        </div>

                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>
