@extends('sidebar')

@section('appointment')
<div  style="margin: 30px 40px">
    <h2 style="color:#e75480; margin-bottom: 20px; font-weight:700">Appointments</h2>
    <table class="table" style="border: 2px solid #e75480;">
        <thead style="color:white; background-color:#e75480; font-size: 20px; font-weight:500;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Service Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col" class="text-hide">Approve</th>
                <th scope="col" class="text-hide ">Disapprove</th>
            </tr>
        </thead>
        <tbody style="color:black; background-color:pink; font-size: 18px; font-weight:400;">
            <tr>
                <th scope="row" style="border-top: 2px solid #e75480;">1</th>
                <td style="border-top: 2px solid #e75480;">Nadia Hussain</td>
                <td style="border-top: 2px solid #e75480;">Party Makeup</td>
                <td style="border-top: 2px solid #e75480;">16/02/2021</td>
                <td style="border-top: 2px solid #e75480;">2:00</td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Approve</button></td>
                <td style="border-top: 2px solid #e75480;"><button type="button" class="buttons">Disapprove</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection