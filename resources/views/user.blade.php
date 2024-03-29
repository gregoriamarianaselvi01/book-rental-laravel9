@extends('layouts.mainlayout')

@section('title', 'Users')

@section('page-name')

@section('content')
    <h1>Users List</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="/user-banned" class="btn btn-secondary me-3"> <i class="bi bi-list"></i> View Banned</a>
        <a href="/registered-users" class="btn btn-primary"> <i class="bi bi-person-plus"></i></i> New Registered User </a>
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
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        @if ($item->phone)
                            {{ $item->phone }}
                        @else 
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/user-detail/{{$item->slug}}"><i class="bi bi-ticket-detailed"></i></a>
                        <a href="/user-ban/{{$item->slug}}"><i class="bi bi-ban"></i></i></a>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection 