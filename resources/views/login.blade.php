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

        <div class="card panel panel-default ks-light ks-panel">
            <div class="card-block">
                <form class="form-container" method="POST">
                    {{csrf_field()}}
                    <h4 class="ks-header">Login</h4>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <span class="icon-addon">
                                <span class="fa fa-at"></span>
                            </span>
                        </div>
                    </div>
                    <p style="color: red">{{ $errors->first('username') }}</p>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="icon-addon">
                                <span class="fa fa-key"></span>
                            </span>
                        </div>
                    </div>
                    <p style="color: red">{{ $errors->first('password') }}</p>
                    <p style="color: red">{{ $errors->first('errorlogin')}}</p>     
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="ks-text-center">
                        Don't have an account. <a href="signup">Sign Up</a>
                    </div>
                    <div class="ks-text-center">
                        <a href="pages-forgot-password.html">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ks-footer">
        <span class="ks-copyright">&copy;  2017 ITREQUEST</span>
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