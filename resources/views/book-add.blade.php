@extends('layouts.mainlayout')

@section('title', 'Add Book')

@section('page-name')

@section('content')

    <h1>Add New Book</h1>

    <div class="mt-5 w-50">

        <div class="mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div> 
            @endif
        </div>

        <form action="book-add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Book Code" value="{{old('book_code')}}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Book Title" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
                <a href="/books" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div>
    
@endsection 