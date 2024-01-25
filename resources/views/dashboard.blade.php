@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')

    <h1>Welcome, {{Auth::user()->username}} </h1>

    <div class="mt-5">
        <h2>Rent Log</h2>
        <x-rent-log-table :rentlog='$rent_logs'/>
    </div>


@endsection 
