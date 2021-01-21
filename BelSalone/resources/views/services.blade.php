<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Services</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

body {
    font-family: 'Maven Pro', sans-serif
}

body {
    background-color: pink;
}

.add {
    border-radius: 20px
}

.card {
    border: none;
    border-radius: 10px;
    transition: all 1s;
    cursor: pointer
}

.card:hover {
    -webkit-box-shadow: 3px 5px 17px -4px #777777;
    box-shadow: 3px 5px 17px -4px #777777
}

.ratings i {
    color: yellow;
}

.apointment button {
    border-radius: 20px;
    background-color: #e75480;
    color: #eee;
    border-color: #eee;
    font-size: 13px
}

.dropdown{    
    margin: 100px 50px ;
}

.dropdown button{
    background-color: #e75480;
}

.dropdown-menu button{
    background-color: pink;
}

.three-inline-buttons .button {
    margin-left: 100px;
    margin-right: 100px;
}

.three-inline-buttons {
     display: table;
     margin: 100px auto 0px auto;
}

@media only screen and (max-width: 960px) {

    .three-inline-buttons .button{
        width: 100%;
        margin: 20px;
        text-align: center;
    }
    
}
</style>
<body>

{{-- From wpsites --}}

{{--  --}}

<div   style="display: flex; flex-direction:row">
    {{-- Button 1 --}}
<span class="dropdown three-inline-buttons">
    <button class="btn btn-secondary dropdown-toggle button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Service
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="dropdown-item" type="button">Action</button>
      <button class="dropdown-item" type="button">Another action</button>
      <button class="dropdown-item" type="button">Something else here</button>
    </div>
</span>
{{-- Button 2 --}}
  <span class="dropdown three-inline-buttons">
    <button class="btn btn-secondary dropdown-toggle button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Price
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="dropdown-item" type="button">Action</button>
      <button class="dropdown-item" type="button">Another action</button>
      <button class="dropdown-item" type="button">Something else here</button>
    </div>
  </span>
{{-- Button 3 --}}
  <span class="dropdown three-inline-buttons">
    <button class="btn btn-secondary dropdown-toggle button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Stylist
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="dropdown-item" type="button">Action</button>
      <button class="dropdown-item" type="button">Another action</button>
      <button class="dropdown-item" type="button">Something else here</button>
    </div>
  </span>
</div>

{{-- Card --}}

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-between mb-3"> <span><strong>Services</strong></span> {{-- <button class="btn btn-success add">Add Doctors</button> --}} </div>
        <div class="row g-2" >
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    {{-- <div class="img mb-2"> <img src="https://i.imgur.com/LohyFIN.jpg" width="70" class="rounded-circle"> </div> --}}
                    <h3 class="mb-0">Beautician 1</h3>
                    <h4 class="mb-0">Service Name</h4>
                    <h5>Service Category</h5>
                    <h6>100</h6>
                    
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment">
                        <button class="btn btn-success text-uppercase">Read Reviews</button>
                        <button class="btn btn-success text-uppercase">Book Oppointment</button>
                    </div>
                </div>
            </div>
{{-- Card 1 ending and I haven't customized the others because we'll be using for loop for the first one and load into its template --}}
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/o5uMfKo.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Mario Speedway</h5> <small>Cardiologist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
            <div class="col-md-3 mb-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/tmdHXOY.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Anna Sthesia</h5> <small>Surgeon</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/C4egmYM.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Paul Moliv</h5> <small>Dentist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/0LKZQYM.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Anna Maul</h5> <small>Eye Specialist</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> <button class="btn btn-success text-uppercase">Book Oppointment</button></div>
                </div>
            </div>
            <div class="col-md-3 mb-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/ZSkeqnd.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Gail Forcewind</h5> <small>Urology</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/MZm1LNz.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Patey Cruiser</h5> <small>Neurosurgeon</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom:20px">
                <div class="card p-2 py-3 text-center">
                    <div class="img mb-2"> <img src="https://i.imgur.com/HFpxxJz.jpg" width="70" class="rounded-circle"> </div>
                    <h5 class="mb-0">Patey Cruiser</h5> <small>Neurosurgeon</small>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">View Details</button> </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


