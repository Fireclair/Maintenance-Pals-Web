<h1> Payment Main Page</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">

<head>

</head>
<!-- for styling -->
<style>
    body {
        background-color: #f7f7ff;
        margin-top: 20px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .card {
        width: 200px;
        height: 300px;
        margin: 10px;
    }

    @media (max-width: 767px) {
        .card {
            width: 100%;
            height: auto;
        }
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card-body h5 {
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .card-body p {
        text-align: center;
    }

    .btn-white {
        background-color: #fff;
        border-color: #e7eaf3;
    }

    .radius-15 {
        border-radius: 15px;
    }

    .contacts-social a {
        font-size: 16px;
        width: 25px;
        height: 25px;
        line-height: 36px;
        background: #ffffff;
        border: 1px solid #eeecec;
        text-align: center;
        border-radius: 50%;
        color: #2b2a2a;
    }

    .bg-info {
        background-color: #0dcaf0 !important;
    }

    .bg-primary {
        background-color: #008cff !important;
    }

    .bg-danger {
        background-color: #fd3550 !important;
    }

    .bg-warning {
        background-color: #ffc107 !important;
    }

    h1 {
        text-align: center;
    }
</style>
<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-15 bg-primary">
                <div class="card-body text-center">
                    <div class="p-4 radius-15">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                        <h5 class="mb-0 mt-5 text-white">Payment for vendors</h5>
                        <p class="mb-3 text-white"></p>

                        <div class="d-grid"> <a href="paymentvendors" class="btn btn-white radius-15">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-15 bg-danger">
                <div class="card-body text-center">
                    <div class="p-4 radius-15">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
                        <h5 class="mb-0 mt-5 text-white">Paymant for Cashier</h5>
                        <p class="mb-3 text-white"></p>

                        <div class="d-grid"> <a href="paymentcashier" class="btn btn-white radius-15">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>