<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Document</title>
    </head>
    <body>
         <form action="{{url('/')}}/register" method="post">
             @csrf

                <div class = "container">

                    <h1 class= "text-center"> Registration</h1>
                    <x-index type="text" name="firstname" label="First Name" />
                    <x-index type="text" name="lastname" label="Last Name" />
                    <x-index type="text" name="address" label="Address" />
                    <x-index type="email" name="email" label="Email" />
                    <x-index type="text" name="password" label="Password" />
                    <x-index type="text" name="phone" label="Contact Number" />
                    <x-index type="date" name="dob" label="Date OF Birth" />

                    <button class="btn btn-primary" href="{{ route('list') }}">Submit</button>
                 
                </div>
         </form>
    </body>
</html> 