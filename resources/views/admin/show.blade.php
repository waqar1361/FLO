@extends('admin.layout')

@section('content')
    
    <section class="col-11 mx-auto">
        <h2 class="text-center">{{ $user->fullname }}</h2>
        
        <table class="table table-bordered table-striped">
            <tr>
                <th>First Name</th>
                <th>Sur Name</th>
            </tr>
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->sur_name }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <th>Contact/Mobile</th>
            </tr>
            <tr>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->contact }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <th>CNIC</th>
            </tr>
            <tr>
                <td>{{ $user->age }} Years Old</td>
                <td>{{ $user->cnic }}</td>
            </tr>
            <tr>
                <th colspan="2">Email</th>
            </tr>
            <tr>
                <td colspan="2">{{ $user->email }}</td>
            </tr>
            <tr>
                <th colspan="2">Address</th>
            </tr>
            <tr>
                <td colspan="2">{{ $user->address }}</td>
            </tr>
        </table>
    </section>

@endsection()