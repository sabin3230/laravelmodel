<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>laravel</title>
</head>
<body>
    <body>
    <div class="container">
    <div class="header mt-3">
        <a href="#default" class="navbar-brand"><h3>Nepal</h3></a>
            <div class="header-right">
                <a class="active btn-primary me-2" href="#home">Home</a>
                <a href="#">About Us</a>
                <a href="#">List</a>
                <a href="#">Contact us</a>
            </div>
            </div>
    </div>
   
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="C:\Users\Lenovo\Desktop\3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="C:\Users\Lenovo\Desktop\4.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="C:\Users\Lenovo\Desktop\5.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="container py-5 custom_tab_style1_outer">
                <div class="row">
    
                    <div class="col-md-12">
                    <ul class="nav nav-tabs custom_tab_style1" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Profile" type="button" role="tab" aria-controls="home" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Gallery" type="button" role="tab" aria-controls="profile" aria-selected="false">Gallery</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="home-tab">
                        <div class="member_card_style">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                    <div class="col-md-4 left_img">
                                        <img class="img-fluid " style= " height: 235px;" src="C:\Users\Lenovo\Desktop\3.jpg" alt="" />
                                    </div>
                                    <div class="col-md-8 d-flex align-items-center">
                                        <div class="member-info">
                                        <h4>Nepal</h4>
                                        <span>Kingdom of Nepal</span>
                                        <p>
                                            Nepal, country of Asia, lying along the southern slopes of the Himalayan mountain ranges. It is a landlocked country located between India to the east, south, and west and the Tibet Autonomous Region of China to the north. Its territory extends roughly 500 miles (800 kilometres) from east to west and 90 to 150 miles from north to south. The capital is Kathmandu.
                                        </p>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="col-md-4"><img class="img-fluid" src="C:\Users\Lenovo\Desktop\5.webp" alt="" /></div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="Gallery" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img
                            src="C:\Users\Lenovo\Desktop\3.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                            />

                            <img
                            src="C:\Users\Lenovo\Desktop\5.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape"
                            />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img
                            src="C:\Users\Lenovo\Desktop\4.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds"
                            />

                            <img
                            src="C:\Users\Lenovo\Desktop\3.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                            />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img
                            src="C:\Users\Lenovo\Desktop\3.jpg"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea"
                            />

                            <img
                            src="C:\Users\Lenovo\Desktop\5.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park"
                            />
                        </div>
                        </div>

                    </div>
                        </div>
                        </div>
                </div>
            </div>


            <div class="container  bg-light mt-5 ">
                <h2 style="text-align:center; padding-top: 35px;">Our Nepal</h2>
                    <div class="row" style="width: 96%; height: 640px; padding: 43px 0 0 110px;">
                    <div class="column">
                        <div class="card">
                        <img src="C:\Users\Lenovo\Desktop\1.jfif"  style="width:100%">
                        <div class="container">
                            <h2 height="100%"> Mount Everest</h2>
                            <p class="title">Nepal</p>
                            <p>Mount Everest is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. The China–Nepal border runs across its summit point. Its elevation of 8,848.86 m was most recently established in 2020 by the Chinese and Nepali authorities.</p>
                            <p>8848m</p>
        
                        </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                        <img src="C:\Users\Lenovo\Desktop\2.jfif"  style="width:100%">
                        <div class="container">
                            <h2>Kathmandu</h2>
                            <p class="title">Capital City</p>
                            <p>Kathmandu, Nepal's capital, is set in a valley surrounded by the Himalayan mountains. At the heart of the old city’s mazelike alleys is Durbar Square, which becomes frenetic during Indra Jatra, a religious festival featuring masked dances. </p>
                            <p>capital city</p>
                
                        </div>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card">
                        <img src="C:\Users\Lenovo\Desktop\3.jfif"  style="width:100%">
                        <div class="container">
                            <h2>Culture</h2>
                            <p class="title">Culture</p>
                            <p>Culture of Nepal Nepal was declared a secular country by the Parliament on May 18, 2006. Religions practiced in Nepal are: Hinduism, Buddhism, Islam, Christianity, Jainism, Sikhism, Bon, ancestor worship and animism. The majority of Nepalis are either Hindus or Buddhism.</p>
                            <p> Culture</p>
                        
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="container  bg-light mt-5">
                <div class="row">
                    
                    <div class="col-6">
                        <div class="card" style="width: 100%;">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="240px" id="gmap_canvas" src="https://maps.google.com/maps?q=nepal%20kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
                                <div class="">
                                    <p class="title">location</p>
                                    <p>According to schedule 4 of the new Constitution, Nepal is divided into 7 provinces and 75 districts. They are simply called as Province No.1 to No.7.147,181 square kilometers, the world's 94th largest country.Hinduism (81.3%), Buddhism (9%), Islam (4.4%), Kirant (3%), Christianity (1.4%), Animism (0.4%), Irreligion (0.5%)</p>
                                    <p> Total Area: 147,181 square kilometers, the world's 94th largest country</p>
                                </div>
                            </div>
                        </div>
                    

                    <div class="col-6">

                        <div class="container py-4">

                         <h2 style="text-align: center;">Contact</h2>
                            
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                                <form action="{{route("homepage.store")}}" method="post" role="form" class="contact-form">
                                    @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" >
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                            </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="emailAddress">Email Address</label>
                                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="message">Message</label>
                                                <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" style="height: 10rem;"></textarea>
                            
                                                    @if ($errors->has('message'))
                                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                                    @endif
                                        </div>

                                        <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                        </form>
                                        </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>


            <div class="container bg-light">
            <h2 style="text-align:center">List</h2>
            <div class="container"  style="width: 100%;">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Category Name</th>
                            <th>Type</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            @foreach ($data as $dt)
                            
                                <tr>
                                    <td>{{$dt['pid']}}</td>
                                    <td>{{$dt['name']}}</td>
                                    <td>{{$dt['email']}}</td>
                                    <td>{{$dt['massage']}}</td>
                                    <td>{{$dt->category['name']}}</td>
                                    <td>{{$dt->category['type']}}</td>
                                    <td>{{$dt->category['method']}}</td>

                                 </tr>

                            @endforeach
                
                    </tbody>
                 </table>
             </div> 
            </div>
            
        </div>

        <div  class="container bg-light my-5">

            <footer class="text-center text-lg-start" style="background-color: hsl(0, 0%, 100%);">
                <div class="container d-flex justify-content-center py-5">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                   <i class="fa-brands fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">           
                <i class="fa-brands fa-facebook"></i>
                </button>

                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                    <i class="fab fa-instagram"></i>
                </button>

                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                    <i class="fab fa-twitter"></i>
                </button>
                </div>

                <div class="text-center text-white p-3" style="background-color: #009879;">
                © 2020 Copyright:
                <a class="text-white" href="https:/sabin.com/">Nepal.com</a>
                </div>

            </footer>
  
        </div>

</body>
</html>