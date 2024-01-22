@extends('layouts.mainlayout')

@section('title', 'Delete User')

@section('page-name')

@section('content')

    <h2>Are you sure to delete user {{$user->username}} ?</h2>

    <div class="mt-3">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger">Sure</a>
        <a href="/users" class="btn btn-primary">Cancel</a>
    </div>
    
@endsection 