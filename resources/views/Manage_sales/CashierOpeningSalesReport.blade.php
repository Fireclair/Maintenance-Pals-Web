@extends('layout.master')
@section('content')


    <head>
        <meta charset="UTF-8">
        <figure class="text-center">
            <h1>OPENING FORM</h1>
        </figure>

    </head>
    <style>


.custom-table {
    width: 100%;
}

.custom-table thead th {
    background-color: blue;
    color: white;
    font-weight: bold;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.custom-table tbody tr:hover {
    background-color: #e9e9e9;
}

.row-in-form {
    margin-bottom: 0;
}

.card {
    margin-bottom: 1rem;
}

.card-body {
    padding: 1rem;
}

.btn-primary {
    background-color: blue;
    border-color: blue;
}

.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0069d9;
}

.col-10 {
    margin-top: 10px;
    text-align: center;
}
</style>
<body style="margin: 30px;">


    <form action="/sales/create" method="post" id="openSales">
        {{ csrf_field() }}
        <table class="custom-table table table-bordered table-sm" id="dataTable" width="100%"
            cellspacing="5">
            <div class="card shadow mb-1">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Items</th>
                                    <th scope="col">Quantity sold</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Gardenia bread</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_bread" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Biscut</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_biscut" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mineral water</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_water" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Lychee drink</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_lychee" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Milo drink</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_milo" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Soya soy drink</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_soy" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Ice lemon tea drink</td>
                                    <td>
                                        <p class="row-in-form">

                                            <input id="quantity" type="number" name="quantity_sold_lemon" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Wanda coffee can</td>
                                    <td>
                                        <p class="row-in-form">
                                            <input id="quantity" type="number" name="quantity_sold_wanda" value=""
                                                placeholder="Quantity">
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                    </div>

        </table>

        <div class='col-10' style="width: 100%; text-align: center;">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

</body>
@endsection

