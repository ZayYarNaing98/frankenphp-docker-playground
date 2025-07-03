@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header bg-secondary text-white">
                Create Category
            </div>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <input type="text" name="name" class="form-control card-body" placeholder="Enter Category Name" />
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary me-4" type="submit">+ Create</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
