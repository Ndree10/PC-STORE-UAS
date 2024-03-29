@extends('layouts.app')
  
@section('title', 'Edit Item')
  
@section('contents')
    <hr />
    <form action="{{ route('items.update', $items->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $items->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Stock</label>
                <input type="text" name="stock" class="form-control" placeholder="Stock" value="{{ $items->stock }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $items->price }}" >
            </div>
        </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $items->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection