@extends('usermanagement::layouts.master')

@section('content')
    <div class="container">
        <div class="py-5">
            <h1>Welcome to Users</h1>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#SN</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Token</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="https://i.pravatar.cc/40?img={{$key+1}}" class="img-fluid rounded-circle" alt=""></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->remember_token }}</td>
                            <td>{{ date("d,M Y", strtotime($user->created_at)) }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
