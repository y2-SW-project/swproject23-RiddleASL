<?php 
                $role = '';
                switch ($user->isAdmin) {
                    case 1:
                        $role = 'Admin';
                        break;
                    
                    case 0:
                        $role = 'User';
                        break;

                    default:
                        $role = 'Unknown - Please contact database management';
                        break;
                }
            ?>

@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <head>
            <h1>User: </h1>
        </head>

        <div class="row mb-3">
            <h4>Name: {{ $user->name }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Role: {{ $role }}</h4>
        </div>
        <div class="row d-flex">
            <div class="col-6">
                <a href="#"><button class="btn btn-outline-bg-l">Edit</button></a>
                <a href="#"><button class="btn btn-outline-danger">Delete</button></a>
            </div>
        </div>
    </div>
@endsection