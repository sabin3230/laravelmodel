<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>User List</h1>

    <table border="1px">
        <tr>
            <td>id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td> Email</td>
            <td> Password</td>
            <td>Phone Number</td>
            <td>Date of Birth</td>
        </tr>

       

        @foreach ($users as $dt)
            <tr>
                <td>{{$dt->id}}</td>
                <td>{{$dt->firstname}}</td>
                <td>{{$dt->lastname}}</td>
                <td>{{$dt->address}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->password}}</td>
                <td>{{$dt->phone}}</td>
                <td>{{$dt->dob}}</td>


            </tr>
        @endforeach
    </table>


</body>
</html>