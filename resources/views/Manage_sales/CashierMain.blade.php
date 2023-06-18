@extends('layout.master')
@section('content')
<br>
    <head>
        <meta charset="UTF-8">
        <figure class="text-center">
            <h1>Cashier Main Page</h1>
        </figure>

    </head>
    <style>
        body {
            margin-top: 20px;
            background: #eee;

        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 18rem;
            margin: 0 10px;
        }
    </style>
    <br>
    <div style="margin-left: 275px;">
    <table>
        <tr>
            <td>
                <div class="card">
                    <img src="/assets/img/testimonials/sales-icon-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">OPENING SALES FORM</h5>
                        <p class="card-text">Opening sales for PETAKOM Mart</p>
                        <a href="/cashier" class="btn btn-primary">CLICK HERE</a>
                    </div>
                </div>
            </td>
            <td>
                <div class="card">
                    <img src="assets/img/testimonials/sale-icon-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CLOSING SALES FORM</h5>
                        <p class="card-text">Closing sales for PETAKOM Mart</p>
                        <a href="/cashierclosing" class="btn btn-primary">CLICK HERE</a>
                    </div>
                </div>
            </td>


        </tr>
    </table>
</div>
@endsection
