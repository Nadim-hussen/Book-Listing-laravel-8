<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/booklist.css') }}">
</head>
<body>
<div class="home-bottom">
    <form action="/edit" method="post">
    @csrf
    <div class="form-email">
        <input type="hidden" name="id" value="{{$data->id}}" /> <br/>
        </div>
    
        <div class="form-title">
            <label for="title">Book Title &nbsp; : &nbsp;</label>
        <input type="text" name="title" id="title" placeholder="Book Title" value="{{$data->title}}" /> <br/>
        </div>
        <div class="form-description">
            
            <textarea type="text" name="desc"  id="desc" cols="40" rows="15" placeholder="Enter The description of your book" >{{$data->desc}}</textarea>
        </div>
        <button class="form-btn">Submit</button>
    </form>
   </div>
</body>
</html>