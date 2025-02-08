<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal text-center">Admin Login</h1>
        <form method="post" action="#">
            @csrf
            <label for="adminEmail" class="sr-only">Email</label>
            <input type="email" name="adminEmail" id="adminEmail" class="form-control" placeholder="Email address"
                required autofocus>
            <label for="adminPass" class="sr-only">Password</label>
            <input type="password" name="adminPass" id="adminPass" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" id="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        </form>
    </div>
</body>

</html>
