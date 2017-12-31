<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Kosmo Bootstrap 4 Admin Template</title>

        <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="public/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="public/css/tether/tether.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/styles/common.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/styles/pages/auth.min.css">
    </head>
    <body>

    <div class="ks-page">
        <div class="ks-body">
            <div class="ks-logo">IT REQUEST</div>

            <div class="card panel panel-default ks-light ks-panel ks-signup">
                <div class="card-block">
                    <form class="form-container" method="POST">
                        {{csrf_field()}}
                        <h4 class="ks-header">Sign Up</h4>
                        <div class="form-group row">
                            <div class="col-lg-6 col-sm-right">
                                <input type="text" name="firstname" class="form-control" placeholder="First name">
                                <p style="color: red">{{ $errors->first('firstname') }}</p>
                            </div>
                            <div class="col-lg-6 col-sm-left">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name">
                                <p style="color: red">{{ $errors->first('lastname') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                <p style="color: red">{{ $errors->first('username') }}</p>
                                <p style="color: red">{{ $errors->first('errorusername') }}</p>
                        <span class="icon-addon">
                            <span class="fa fa-user"></span>
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <p style="color: red">{{ $errors->first('password') }}</p>
                            <span class="icon-addon">
                                <span class="fa fa-key"></span>
                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                        <div class="ks-text-center">
                            Already have an account? <a href="/itrequest">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ks-footer">
            <span class="ks-copyright">&copy; 2017 ITREQUEST</span>
            <ul>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="public/js/jquery/jquery.min.js"></script>
    <script src="public/js/tether/tether.min.js"></script>
    <script src="public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>