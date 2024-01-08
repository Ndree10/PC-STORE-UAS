@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">Edit Transaction</h1>
    <hr />
    <form action="{{ route('transaksi.update', $transaksi_items->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Id Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" placeholder="Id Transaksi" value="{{ $transaksi->id_transaksi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Id Item</label>
            <input type="text" name="id_items" class="form-control" placeholder="Id Item" value="{{ $transaksi->id_item }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tittle</label>
            <input type="text" name="tittle" class="form-control" placeholder="Tittle" value="{{ $transaksi->tittle }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $transaksi->quantity }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $transaksi->price }}" readonly>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection