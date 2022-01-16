<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="css/booklist.css">
</head>
<body>
@include('nav')
<div class="table-head">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
        </thead>
       <tbody>
       @foreach($data as $member)
    <tr>
        <td>{{$member->email}}</td>
        <td>{{$member->title}}</td>
        <td>{{$member->desc}}</td>
        <td>
            <a class="edit" href={{"edit/".$member->id}}>Edit</a>
            <a href={{"delete/".$member->id}}>Delete</a>
        </td>
    </tr>
    @endforeach
       </tbody>
   
    </table>
    </div>
</body>
</html>