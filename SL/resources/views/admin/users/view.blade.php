@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <head>
            <h1>Users</h1>
            <h3 class="ps-5">| Here are all the registered users. Click a name to view single user information.</h3>
        </head>
        <hr class="border border-2 border-white rounded">

        @foreach ($users as $user)
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
            <div class="row mb-3">
                <h4>Name: <a href="{{ route('admin.users.show', $user) }}" class="text-white text-decoration-none">{{ $user->name }}</a></h4>
                <h4>Email: {{ $user->email }}</h4>
                <h4>Role: {{ $role }}</h4>
            </div>
            <hr class="border border-2 border-bg-l rounded">
        @endforeach
    </div>
@endsection