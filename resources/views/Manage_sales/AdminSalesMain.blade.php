@extends('layout.master')
@section('content')
<br>
<br>
    <head>
        <meta charset="UTF-8">
        <figure class="text-center">
            <h1>Admin Main Page</h1>
        </figure>

    </head>
    <br>
    <br>
    <br>
    <div style="margin-left: 250px;">
        <table >
            <tr>
                <td>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/martReport.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MART REPORT</h5>
                            <p class="card-text">Report for PETAKOM Mart</p>
                            <a href="/sales-chart" class="btn btn-primary">CLICK HERE</a><!-- Redirect to mart report main Page -->
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CALCULATE SALES</h5>
                            <p class="card-text">Calculate sales for PETAKOM Mart</p>
                            <a href="/calcu" class="btn btn-primary">CLICK HERE</a><!-- Redirect to calculate sales Page -->
                        </div>
                    </div>
                </td>

                <td>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/pay.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PAYMENT</h5>
                            <p class="card-text">Payment for Cashier and Vendor</p>
                            <a href="/paymentmain" class="btn btn-primary">CLICK HERE</a><!-- Redirect to payment Page -->
                        </div>
                    </div>
                </td>

            </tr>
        </table>
    </div>
@endsection
