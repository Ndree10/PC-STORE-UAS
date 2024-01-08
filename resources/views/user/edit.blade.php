@extends('layouts.app')
  
@section('title', 'Edit Item')
  
@section('contents')
    <hr />
    <form action="{{ route('user.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $users->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $users->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password" value="{{ $users->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection