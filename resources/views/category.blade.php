@extends('layouts.mainlayout')

@section('title', 'Category')

@section('page-name')

@section('content')
    <h1>Category List</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-secondary me-3"> <i class="bi bi-list"></i> View Deleted Data</a>
        <a href="category-add" class="btn btn-primary"> <i class="bi bi-folder-plus"></i> Add Data</a>
    </div>
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
    </div>
    <div class="my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->name}}</td>
                    <td>
                        <a href="category-edit/{{$item->slug}}"><i class="bi bi-pencil-square"></i></a>
                        <a href="category-delete/{{$item->slug}}"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection 