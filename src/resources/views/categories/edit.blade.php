@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header bg-secondary text-white">
                Edit Category
            </div>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <input type="text" name="name" class="form-control card-body" value="{{ $category->name }}" />
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Upadte</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
