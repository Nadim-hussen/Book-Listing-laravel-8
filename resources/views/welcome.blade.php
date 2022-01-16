<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
@include('nav')
<div class="form-head">
    <div class="sub-head">
        <h2 class="form-h2">Registration</h2>
    <form action="" method="post">
    @csrf
        <div class="form-name">
            <label class="form-label" for="name">Name &nbsp; : &nbsp;</label>
        <input type="text" name="name" id="name" autocomplete="off" placeholder="Enter your name" /> <br/>
        </div>
        <div class="form-email">
            <label class="form-label" for="email">Email &nbsp; : &nbsp;</label>
        <input type="email" name="email" autocomplete="off" placeholder="Enter your email" /><br/>
        </div>
        <div class="form-password">
            <label class="form-label" for="password">Password &nbsp; : &nbsp;</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your password" /> <br/>
        </div>
       
        <div class="form-phone">
            <label class="form-label" for="phone">Phone &nbsp; : &nbsp;</label>
        <input type="number" name="phone" id="phone" autocomplete="off" placeholder="Enter phone number" /> <br/>
        </div>
        <div class="form-button">
        <button class="form-btn" type="submit">Submit</button>
        </div>
        
    </form>
   <p class="form-redirect"> Have an account? <a href="login"> Log in now</a></p>
</div>
    </div>
</body>
</html>