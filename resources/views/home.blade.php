<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/booklist.css">
</head>
<body>
    @include('nav')
    <div class="home-head">
    <h2>Book List</h2>

    </div>
   <div class="home-bottom">
    <form action="/home" method="post">
    @csrf
  
        <div class="form-title">
            <label for="title">Book Title &nbsp; : &nbsp;</label>
        <input type="text" name="title" id="title" placeholder="Book Title" /> <br/>
        </div>
        <div class="form-description">
            
            <textarea type="text" name="desc"  id="desc" cols="40" rows="15" placeholder="Enter The description of your book"></textarea>
        </div>
        <button class="form-btn">Submit</button>
    </form>
   </div>

</body>
</html>