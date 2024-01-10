<!-- items/edit.blade.php -->

@extends('layouts.master') <!-- Assuming you have a layout file -->

@section('content')
    <h1>Edit Item</h1>

    <!-- Display the item details and an edit form -->
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add input fields to edit the item properties -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $item->name }}" class="form-control">
        </div>
        <!-- Add more input fields as needed -->

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
