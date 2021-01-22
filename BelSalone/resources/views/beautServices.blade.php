@extends('sidebar')

@section('beaut_services')
<div  style="margin: 30px 60px">
    <h2 id="data" style="color:#e75480; margin-bottom: 20px; font-weight:700">Services</h2>
    <table class="table" style="border: 2px solid #e75480;">
        <thead style="color:white; background-color:#e75480; font-size: 20px; font-weight:500;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Service Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Price</th>
                <th scope="col" class="text-hide">Update</th>
                <th scope="col" class="text-hide ">Delete</th>
            </tr>
        </thead>
        <tbody style="color:black; background-color:pink; font-size: 18px; font-weight:400;">
            <tr>
                <th class="number" scope="row" style="border-top: 2px solid #e75480;">1</th>
                <td class="SName" style="border-top: 2px solid #e75480;">Party Makeup</td>
                <td class="CName" style="border-top: 2px solid #e75480;">Makeup</td>
                <td class="Price" style="border-top: 2px solid #e75480;">2000</td>
                <td style="border-top: 2px solid #e75480;"><button type="button" onclick='Update(1);' class="buttons">Update</button></td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Delete</button></td>
            </tr>
        </tbody>
        <tbody style="color:black; background-color:pink; font-size: 18px; font-weight:400;">
            <tr>
                <th class="number" scope="row" style="border-top: 2px solid #e75480;">2</th>
                <td class="SName" style="border-top: 2px solid #e75480;">Naya Makeup</td>
                <td class="CName" style="border-top: 2px solid #e75480;">Makeup</td>
                <td class="Price" style="border-top: 2px solid #e75480;">200</td>
                <td style="border-top: 2px solid #e75480;"><button type="button" onclick='Update(2);' class="buttons">Update</button></td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Delete</button></td>
            </tr>
        </tbody>
    </table>
    <div style="margin-top: 60px; margin-right: 50%; padding: 30px 20px; background-color:pink;">
        <form style="font-size: 22px;" method="GET" action="{{URL::to('/Supdate')}}">
            <div align="center" class="form-group form-col">
                <div class="form-group col-md-7 mb-3">
                    <label for="inputCategory" style="font-weight: 600">Enter Category</label>
                    <div>
                    <select id="mySelect" name="category" style="width:300px;font-weight: 500;background-color:pink;color:#6c757d; border-radius: 8px;" required>
    <option >Choose...</option>
    <option>...</option>
  </select>
                </div>
                <div class="form-group col-md-7 mb-3">
                    <label for="inputService" style="font-weight: 600">Enter Service</label>
                    <input id="Service" name="service" type="text" class="form-control" style="font-weight: 500; border-radius: 8px;" id="inputService" placeholder="Service" required>
                </div>
                <div class="form-group col-md-7 mb-3">
                    <label for="inputPrice" style="font-weight: 600">Enter Price</label>
                    <input id="IPrice" name="price" type="number" min="100" step="10" class="form-control" style="font-weight: 500; border-radius: 8px;" id="inputPrice" placeholder="0" required>
                </div>
                <div style="margin-top: 30px; display: flex; flex-direction: row; justify-content: center;">
                    <button id="Addbtn" type="submit" class="form-control col-md-3 mb-3 btn btn-primary" style="background-color: #e75480; color: white; border: 2px solid #e75480; border-radius: 20px; font-weight: 700">Add</button>
                    <button id="Updatebtn" type="submit" class="form-control col-md-3 mb-3 btn btn-primary" style="margin-left: 30px; background-color: #e75480; color: white; border: 2px solid #e75480; border-radius: 20px; font-weight: 700" disabled>Update</button>
                </div>
            </div> 
        </form>
    </div>
</div>
<script>
    function Update(n){
          var sel=document.getElementById("mySelect");
          var opt=document.createElement('option')
          var txt=document.getElementsByClassName('CName')[n-1].textContent;
          opt.appendChild(document.createTextNode(document.getElementsByClassName('CName')[n-1].textContent));
          opt.value=txt;
          sel.appendChild(opt);
        document.getElementById("Service").value = document.getElementsByClassName('SName')[n-1].textContent;
        document.getElementById("IPrice").value = document.getElementsByClassName('Price')[n-1].textContent;
        Ubtn=document.getElementById('Updatebtn').disabled = false;
        Abtn=document.getElementById('Addbtn');
        Abtn.disabled = true;
        //Abtn.textContent=num;

    }
</script>
@endsection