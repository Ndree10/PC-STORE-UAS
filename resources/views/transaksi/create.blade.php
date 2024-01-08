@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">Add Transaction</h1>
    <hr />
    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="id_transaksi" class="form-control" placeholder=Id_Transaction">
            </div>
            <div class="col">
                <input type="text" name="id_items" class="form-control" placeholder=Id_Item">
            </div>
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection