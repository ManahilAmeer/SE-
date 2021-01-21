<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bel Salone</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Custom fonts for this template-->
        <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/templatemo-style.css')}}" />
        <style>
            .flex-container {
                display: flex;
                flex-flow: row wrap;
            }
            .sidebar {
                padding-bottom: 30%;
                border: 2px solid #e75480;
                background-color: pink;
                height: 100%;
                overflow: auto;
                flex-grow: 1;
            }
            .sidebar a {
                display: block;
                font-weight: 600; 
                font-size: 24px;
                width: 100%; 
                height: 10%; 
                background-color: pink;
                text-decoration: none;
                text-align: left;
                border-bottom: 2px solid #e75480;
                padding: 18px;
            }
                /* Active/current link */
            .sidebar a:active {
                background-color: #e75480;
                color: white;
            }
            /* Responsive layout - makes a one column layout instead of a two-column layout */
            @media (max-width: 800px) {
            .flex-container {
                flex-direction: column;
                }
            }
            /*On screens that are less than 700px wide, make the sidebar into a topbar*/
            @media screen and (max-width: 1200px) {
                .sidebar {
                    width: 100%;
                    height: 100%;
                    position: relative;
                }
                .sidebar a {float: left;}
            }
            /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
            @media screen and (max-width: 400px) {
                .sidebar a {
                    text-align: center;
                    float: none;
                }
            } 
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                border-radius: 50%;
            }
            .buttons {
                border: 2px solid #e75480;
                border-radius: 20px;
                background-color: white;
                color: #e75480;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                padding: 4px 12px;;
                cursor: pointer;
            }
            .buttons:hover {
                background-color: #e75480;
                color: white;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
        </style>    
    </head>
    <body>  
        <header>
            <div style="padding: 5px 0px; background-color:lightgray;">
                <h1 align="center" style= "color:#e75480">Bel Salone</h1>
                <h6 align="center" style="padding-left: 120px">We'll Style You'll Smile</h6>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light" style="padding: 5px 20px; background-color:#e75480;">
                <a class="navbar-brand" href="#" style="font-weight: 900; font-family: RozhaOne; font-size: 30px; color: white">Bel ₻ Salone</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index" style="font-weight: 700; font-size: 20px">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services" style="font-weight: 700; font-size: 20px;">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-weight: 700; font-size: 20px;">About</a>
                        </li>
                    </ul>
                    <div style="padding-left: 0px; padding-right: 50px">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" style="font-weight: 700; font-size: 20px; background-color:#e75480; border:0px; color:rgba(0,0,0,.5);"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Login
                                    </button>
                                    <div class="dropdown-menu" style="font-weight: 700; font-size: 14px; background-color:pink; border:0px; color:rgba(0,0,0,.5);" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"  href="login">Login as Beautician</a>
                                        <a class="dropdown-item" href="CustomLogin">Login as Customer</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" style="font-weight: 700; font-size: 20px; background-color:#e75480; border:0px; color:rgba(0,0,0,.5);"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Register
                                    </button>
                                    <div class="dropdown-menu" style="font-weight: 700; font-size: 14px; background-color:pink; border:0px; color:rgba(0,0,0,.5);" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="register">Register as Beautician</a>
                                        <a class="dropdown-item" href="CustomRegister">Register as Customer</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div>
            @yield('content')
            @yield('sidebarMenu')
        </div>
        <footer class=" text-center text-lg-start" style="background-color: rgba(0, 0, 0, 0.1)">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://cdn2.howtostartanllc.com/images/business-ideas/business-idea-images/makeup-artist-business.jpg" alt="makeup">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://img.onmanorama.com/content/dam/mm/en/lifestyle/beauty-and-fashion/images/2017/5/10/hairdressing.jpg.image.784.410.jpg" alt="hair">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://img.grouponcdn.com/iam/2rjNNQDTNpKGSVaVzkR9oHT2mS9L/2r-2048x1229/v1/c700x420.jpg" alt="nails">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8YmVhdXR5JTIwc2Fsb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="facial">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://thumbs.dreamstime.com/b/applying-henna-tattoo-women-hands-artist-mehndi-traditional-indian-decorative-art-close-up-top-view-87271640.jpg" alt="mehndi">
                    </div>
                </div>
            </div>

            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Footer text</h5>

                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Footer text</h5>

                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright:
                <a class="text-dark" href="#">Bel Salone</a>
            </div>
            <!-- Copyright -->
        </footer>
    </body>
</html>
