@extends('layout')

@section('content')
<div align="center" class="container">
    <form style="margin: 100px 100px">
        <div align="center" style="background-color: pink; padding: 80px 0px; border: 2px solid #e75480; border-radius: 20px">
            <div align="center" class="form-group form-col">
                <div class="form-group col-md-5 mb-3">
                    <label for="BeautName" style="font-weight: 500; color: black">Beautician Name</label>
                    <div col-md-4>
                        <input type="text" id="beautName" class="form-control" style="background-color: white; border-radius: 10px" placeholder="Beautician Name" readonly>
                    </div>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="ServiceName" style="font-weight: 500; color: black">Service Name</label>
                    <input type="text" id="serviceName" class="form-control" style="background-color: white; border-radius: 10px" placeholder="Service Name" readonly>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="date-input" style="font-weight: 500; color: black">Enter Date</label>
                    <input class="form-control" type="date" style="background-color: white; border-radius: 10px" value="2021-02-18" id="date-input" required>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="time-input" style="font-weight: 500; color: black">Enter Time</label>
                    <input class="form-control" type="time" style="background-color: white; border-radius: 10px" value="12:00:00" id="time-input" min="12:00" max="22:00" required>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="Payment" style="font-weight: 500; color: black">Payment</label>
                    <div col-md-4>
                        <input type="number" id="Price" min="100" step="10" class="form-control" style="background-color: white; border-radius: 10px" placeholder="0" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 60%; background-color: #e75480; color: white; margin-top: 20px;  border: 2px solid #e75480; border-radius: 20px; font-weight: 700">Book Appointment</button>
            </div>
        </div>
    </form>
</div>
<script>
var getUrlParameter = function getUrlParameter(sParam) {
    let parameters=new URLSearchParams(window.location.search);
    var data=parameters.get(sParam);
    if (data != null) {
     document.getElementById(sParam).value = data;
}
    // var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    //     sURLVariables = sPageURL.split('&'),
    //     sParameterName,
    //     i;
    // for (i = 0; i < sURLVariables.length; i++) {
    //     sParameterName = sURLVariables[i].split('=');
    //     if (sParameterName[0] === sParam) {
    //         return sParameterName[1] === undefined ? true : sParameterName[1];
    //     }
    // }
    // document.getElementById('BeautName').value = VARIABLE;
};

var VARIABLE = getUrlParameter('beautName');
var VARIABLE = getUrlParameter('Price');
var VARIABLE = getUrlParameter('serviceName');

</script>
@endsection
