@extends('sidebar')

@section('beaut_services')
<div  style="margin: 30px 60px">
    <h2 style="color:#e75480; margin-bottom: 20px; font-weight:700">Services</h2>
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
                <th scope="row" style="border-top: 2px solid #e75480;">1</th>
                <td style="border-top: 2px solid #e75480;">Party Makeup</td>
                <td style="border-top: 2px solid #e75480;">Makeup</td>
                <td style="border-top: 2px solid #e75480;">2000</td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Update</button></td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Delete</button></td>
            </tr>
        </tbody>
    </table>
    <div style="margin-top: 60px; margin-right: 50%; padding: 30px 20px; background-color:pink;">
        <form style="font-size: 22px;">
            <div align="center" class="form-group form-col">
                <div class="form-group col-md-7 mb-3">
                    <label for="inputCategory" style="font-weight: 600">Enter Category</label>
                    <select id="inputCategory" class="form-control" style="font-weight: 500; border-radius: 8px;" required>
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-7 mb-3">
                    <label for="inputService" style="font-weight: 600">Enter Service</label>
                    <input type="text" class="form-control" style="font-weight: 500; border-radius: 8px;" id="inputService" placeholder="Service" required>
                </div>
                <div class="form-group col-md-7 mb-3">
                    <label for="inputPrice" style="font-weight: 600">Enter Price</label>
                    <input type="number" min="100" step="10" class="form-control" style="font-weight: 500; border-radius: 8px;" id="inputPrice" placeholder="0" required>
                </div>
                <div style="margin-top: 30px; display: flex; flex-direction: row; justify-content: center;">
                    <button type="submit" class="form-control col-md-3 mb-3 btn btn-primary" style="background-color: #e75480; color: white; border: 2px solid #e75480; border-radius: 20px; font-weight: 700">Add</button>
                    <button type="submit" class="form-control col-md-3 mb-3 btn btn-primary" style="margin-left: 30px; background-color: #e75480; color: white; border: 2px solid #e75480; border-radius: 20px; font-weight: 700" disabled>Update</button>
                </div>
            </div> 
        </form>
    </div>
</div>
@endsection