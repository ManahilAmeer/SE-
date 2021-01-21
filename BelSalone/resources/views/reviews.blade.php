<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
body {
    font-family: 'Maven Pro', sans-serif
}
a.list-group-item {
    height:auto;
    min-height:220px;
    margin-left:0px;
}
a.list-group-item.active small {
    color:pink;
}
.stars {
    margin:20px auto 1px;    
}
    </style>
</head>
<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <div class="container">
        <div class="row" >
            <div class="well">
            <h1 class="text-center" style="color: #e75480">Service Reviews</h1>
            <div class="list-group">
              {{-- 1 --}}
              <a href="#" class="list-group-item" style="margin-top: 20px ; background-color:pink">
                <div class="col-md-12">
                    <h4 class="list-group-item-heading" style="margin: 20px 0px" >Review 1</h4>
                    <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <h5 class="list-group-item-heading" style="margin: 20px 0px" >Service Name</h5>

                    <p class="list-group-item-text"> Ut mea viris eripuit theophrastus, cu ponderum accusata consequuntur cum. Suas quaestio cotidieque pro     ea. Nam nihil persecuti philosophia id, nam quot populo ea. 
                        Falli urbanitas ei pri, eu est enim volumus, mei no volutpat periculis. Est errem iudicabit cu. At usu vocibus officiis, ad ius eros tibique appellantur.
                        <h6 class="list-group-item-heading" style="margin: 20px 0px" >Date</h6>                       
                    </p>
                </div>                    
          </a>
              {{-- 2 --}}
              <a href="#" class="list-group-item" style="margin-top: 20px ; background-color:pink">
                <div class="col-md-12">
                    <h4 class="list-group-item-heading" style="margin: 20px 0px" >Review 2</h4>
                    <h5 class="list-group-item-heading" style="margin: 20px 0px" >Service Name</h5>
                    <p class="list-group-item-text"> Ut mea viris eripuit theophrastus, cu ponderum accusata consequuntur cum. Suas quaestio cotidieque pro     ea. Nam nihil persecuti philosophia id, nam quot populo ea. 
                        Falli urbanitas ei pri, eu est enim volumus, mei no volutpat periculis. Est errem iudicabit cu. At usu vocibus officiis, ad ius eros tibique appellantur.                         
                    </p>
                    <h6 class="list-group-item-heading" style="margin: 20px 0px" >Date</h6>                       

                </div>                    
          </a>
              {{-- 3 --}}
              <a href="#" class="list-group-item" style="margin-top: 20px ; background-color:pink">
                    <div class="col-md-12">
                        <h4 class="list-group-item-heading" style="margin: 20px 0px" >Review 3</h4>
                    <h5 class="list-group-item-heading" style="margin: 20px 0px" >Service Name</h5>

                        <p class="list-group-item-text"> Ut mea viris eripuit theophrastus, cu ponderum accusata consequuntur cum. Suas quaestio cotidieque pro     ea. Nam nihil persecuti philosophia id, nam quot populo ea. 
                            Falli urbanitas ei pri, eu est enim volumus, mei no volutpat periculis. Est errem iudicabit cu. At usu vocibus officiis, ad ius eros tibique appellantur.                         
                        </p>
                        <h6 class="list-group-item-heading" style="margin: 20px 0px" >Date</h6>                       

                    </div>                    
              </a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
