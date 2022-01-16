<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
</head>
<body>
@include('nav');
<div class="form-head">
    <div class="sub-head">
        <h2 class="form-h2">User Login</h2>
    <form action="/login" method="post">
    @csrf
    <div class="form-email">
            <label class="form-label" for="email">Email &nbsp; : &nbsp;</label>
        <input type="email" name="email" autocomplete="off" placeholder="Enter your email" /><br/>
        </div>
        <div class="form-password">
            <label class="form-label" for="password">Password &nbsp; : &nbsp;</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your password" /> <br/>
        </div>
        <div class="form-button">
        <button class="form-btn" type="submit">Submit</button>
        </div>
    </form>
   <p class="form-redirect"> Don't have an account? <a href="/"> Sign Up</a> </p>
</div>
</div>
</body>
</html>