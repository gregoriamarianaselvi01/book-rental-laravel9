@extends('layouts.mainlayout')

@section('title', 'Deleted Book')

@section('page-name')

@section('content')
    <h1>Deleted Book List</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="/books" class="btn btn-primary">Back</a>
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
                    <th>Code</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedBooks as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->book_code}}</td>
                    <td>{{ $item->title}}</td>
                    <td>
                        <a href="book-restore/{{$item->slug}}"><i class="bi bi-skip-backward"></i></a>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection 