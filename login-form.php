<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="styles/login-form.css">
    
</head>
<body>
    <div class="login">

        <h2 class="text-center">E-Cart Mo!</h2>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <div class="user-btn">
                <input class="sign-in-btn" type="submit" value="Sign in">
                <input class="sign-up-btn" type="submit" value="Sign up">
            </div>

        </form>

    </div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #71a4f0;
    }

    .login {
        width: 360px;
        height: min-content;
        padding: 20px;
        border-radius: 12px;
        background: #ffffff;
    }

    .login {
        font-size: 36px;
        margin-bottom: 25px;
    }

    .login form {
        font-size: 15px;
    }

    .login form .form-group {
        margin-bottom: 12px;
    }
    .user-btn {
        display: flex;
        justify-content: space-between;
    }
    .sign-in-btn,
    .sign-up-btn {
        padding: 7px;
        background-color: #69b6fa;
        border-width: 1px;
        border-radius: 5px;
        margin-left: 45px;
        margin-right: 45px;
    }
    </style>
    
</head>
<body>
    <div class="login">

        <h2 class="text-center">E-Cart Mo!</h2>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <div class="user-btn">
                <input class="sign-in-btn" type="submit" value="Sign in">
                <input class="sign-up-btn" type="submit" value="Sign up">
            </div>

        </form>

    </div>
</body>
</html>