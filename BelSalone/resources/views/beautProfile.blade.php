@extends('sidebar')

@section('beaut_profile')
<div  style="margin: 30px 60px">
    <h2 style="color:#e75480; margin-bottom: 20px; font-weight:700">Your Profile</h2>
    <div style="margin-top: 40px; padding: 30px 20px; background-color:pink;">
        <form style="font-size: 22px;">
            <div class="form-group col-md-5 mb-5">
                <label for="beautName" style="font-weight: 600">Name</label>
                <input type="text" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;" id="beautName" value={{$name}} required>
            </div>
            <div class="form-group col-md-5 mb-5">
                <label for="beautEmail" style="font-weight: 600">Email Address</label>
                <input type="email" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;" id="beautEmail" value={{$email}} required>
            </div>
            <div class="form-group col-md-5 mb-5">
                <label for="beautPhone" style="font-weight: 600">Phone No.</label>
                <input type="tel" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;" id="beautPhone" pattern="[0-9]{4}-[0-9]{7}" value={{$phone}} required>
            </div>
            <div class="form-group col-md-5 mb-5">
                <label for="beautAddress" style="font-weight: 600">Address</label>
                <input type="text" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;" id="beautAddress" value={{$address}} required>
            </div>
             <div class="form-group col-md-5 mb-5">
                <label for="beautPassword" style="font-weight: 600">Change Password</label>
                <input type="password" id="beautPassword" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;"  autocomplete="new-password">
            </div>
            <div class="form-group col-md-5 mb-5">
                <label for="beautPassword1" style="font-weight: 600">Confirm Password</label>
                <input type="password" class="form-control" style="font-size: 20px; font-weight: 500; border: none; border-bottom: 2px solid #e75480; background-color:pink;" id="beautPassword1" autocomplete="new-password">
            </div>
            <div style="margin-top: 30px; display: flex; flex-direction: row; justify-content: center;">
                <button type="submit" class="btn btn-primary" style="background-color: #e75480; color: white; border: 10px solid #e75480; border-radius: 40px; font-weight: 700">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
