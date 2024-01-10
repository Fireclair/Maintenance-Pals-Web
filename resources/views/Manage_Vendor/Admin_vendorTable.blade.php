@extends('layout.master')
@section('content')
<!-- This is Table list vendor  blade file -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Supplier List</h2>
            <a href="add">Add</a>
        </div>
        <div class="col-lg-2 d-flex align-items-stretch">
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>

                        <th>Company</th>
                        <th>Owner</th>
                        <th>Contact </th>
                        <th>Type</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendor_data as $data_vendor)
                    <tr>
                        <td hidden>{{ $data_vendor->id }}</td>
                        <td>{{ $data_vendor->comp }}</td>
                        <td>{{ $data_vendor->owner }}</td>
                        <td>{{ $data_vendor->contact }}</td>
                        <td>{{ $data_vendor->type }}</td>
                        <td>{{ $data_vendor->product }}</td>
                        <td>{{ $data_vendor->date }}</td>
                        <td><a href="vendor/{{ $data_vendor->id }}/edit">Edit</a> &nbsp; <a href="vendor/{{ $data_vendor->id }}/delete/page">Delete</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
@endsection